<?php 
$pageIndex = 0;
if (isset($_GET['p'])) {
    $pageIndex = intval($_GET['p']);
} 
if ($pageIndex < 0 || $pageIndex > 6) {
    $pageIndex = 0;
}

$pages = array('overview', 'stats', 'projects', 'chat', 'calendar', 'settings', 'log-out');

$page = $pages[$pageIndex];
?>

<!-- <php
$host = $_ENV["MYSQL_HOST"];
$user = $_ENV["MYSQL_USER"];
$pass = $_ENV["MYSQL_PASSWORD"];
$database = $_ENV["MYSQL_DATABASE"];

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// select query
$sql = 'SELECT * FROM `tasks`';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $tasks[] = $data;
    }
}

foreach ($tasks as $task) {
    echo "<br>";
    echo "<h1> #" . $task->id . " " . $task->title . "</h1>";
    echo "<p>" . $task->description . "</p>";
    echo "<br>";
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="/assets/stylesheets/main.css">
</head>
<body>
    <div class="menu">
        <div class="title">
            <h1>TODO List</h1>
        </div>

        <ul class="navigation">
            <?php 
            $icons = array('home', 'signal-alt-3', 'folder', 'comment-alt-lines', 'calendar-alt', 'setting', 'signout');

            for ($i = 0; $i < count($pages); $i++) {
                $name = $pages[$i];
                $iconName = $icons[$i];

                $className="tab";
                if ($page === $name) $className = $className . ' active';

                if ($i == 5) {
                    echo '</ul>';
                    echo '<ul class="more">';
                }

                echo '<li><a class="' . $className . '" href="?p=' . $i . '">';
                echo '<i class="uil uil-' . $iconName . '"></i>';
                echo str_replace('-', ' ', 
                strtoupper(substr($name, 0, 1)) . 
                    substr($name, 1)
                );
                echo '</a></li>';
            }
            ?>
        </ul>
    </div>

    <main>
        <?php include("pages/" . $page . ".php"); ?>
    </main>
</body>
</html>
