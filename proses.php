<?php

$todos = [];
$files = file_get_contents('data.txt');
$todos = json_decode($files);

if(isset($_POST['todo'])){

    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    $json_enkrip = json_encode($todos);
    file_put_contents('data.txt',$json_enkrip);

}

?>
