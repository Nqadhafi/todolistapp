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
<?php foreach ($todos as $key => $value): ?>
        <li>
            <input type="checkbox" name="todo" id="" onclick="window.location.href='index.php?status=<?php echo ($value['status'] == 1) ? '0' : '1' ?>&key=<?php echo $key ?>'" <?php if($value['status'] == 1) echo 'checked'; ?>>
            <label for="">
                <?php 
                if($value['status'] == 1){
                    echo '<del>'. $value['todo'] . '</del>';
                    
                 } 
                 else {
                    echo $value['todo'];
                 }
                 ?>
            </label>
            <a href="#">Delete</a>
        </li>
        <?php endforeach; ?>
    </ul>
    </div>
    </div>
</body>
</html>