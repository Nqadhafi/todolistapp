<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Belajar</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include('proses.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="content">
    <h1>Membuat Aplikasi To Do List</h1>
    <form method="post">
        <label for="">Kegiatan hari ini</label>
        <input type="text" name="todo" id="">
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <input type="checkbox" name="todo" id="">
            <label for="">To Do Num 1</label>
            <a href="#">Delete</a>
        </li>
    </ul>
    </div>
    </div>
</body>
</html>