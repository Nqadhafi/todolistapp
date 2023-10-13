<?php

$todos = [];
if(file_exists('todo_list.txt')){
$files = file_get_contents('todo_list.txt');
$todos = json_decode($files);
}
if(isset($_POST['todo'])){

    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    $json_enkrip = json_encode($todos);
    file_put_contents('todo_list.txt',$json_enkrip);

}

?>
