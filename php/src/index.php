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

        <div class="navigation">
            <div class="tab">
                <i class="uil uil-home"></i>
                <h2>Overview</h2>
            </div>
            <div class="tab">
                <i class="uil uil-signal-alt-3"></i>
                <h2>Stats</h2>
            </div>
            <div class="tab">
                <i class="uil uil-folder"></i>
                <h2>Projects</h2>
            </div>
            <div class="tab">
                <i class="uil uil-comment-alt-lines"></i>
                <h2>Chat</h2>
            </div>
            <div class="tab">
                <i class="uil uil-calendar-alt"></i>
                <h2>Calendar</h2>
            </div>
        </div>

        <div class="more">
            <div class="action">
                <i class="uil uil-setting"></i>
                <h2>Settings</h2>
            </div>
            <div class="action">
                <i class="uil uil-signout"></i>
                <h2>Log out</h2>
            </div>
        </div>
    </div>

    <div>
        <h1>Hello !</h1>
        <a href="http://localhost:8080" target="_blank">Open PHPMyAdmin</a>
        <a href="/assets/images/design.webp">View Design</a>
    </div>
</body>
</html>
