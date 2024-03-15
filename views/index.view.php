<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>My Todo List</h1>
    <?php foreach ($tasks as $task) : ?>
        <?php
        if ($task->complete) {
            echo "<strike>$task->description</strike> <br>";
        } else {
            echo "<p> $task->description </p> <br>";
        }
        ?>
    <?php endforeach; ?>
</body>

</html>