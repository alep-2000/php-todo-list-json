<?php

    $string = file_get_contents('data/todo_list.json');

    $array = json_decode($string, true);

    if(isset($_POST['taskToDo'])){
        $task = [
            "text" => $_POST['taskToDo'],
            "done" =>true
        ];

        array_push($array, $task);

        file_put_contents('data/todo_list.json', json_encode($array));
    }

    header('Content-Type: application/json');
    echo json_encode($array);
;?>