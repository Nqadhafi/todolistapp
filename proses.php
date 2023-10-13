<?php

$todos = [];
$files = file_get_contents('data.txt');
$todos = unserialize($files);

if(isset($_POST['todo'])){

    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    file_put_contents('data.txt', serialize($todos));

}

?>
