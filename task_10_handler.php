<?php 
    
    // connect to db
    require "db.php";

    // create array for error
    $error = [];
    $success = [];
    $data = $_POST;

    // validate input data
    $value = htmlspecialchars(stripcslashes(trim($data["textvalue"])));

    // check if empty input value
    if (empty($value)) {
        $error += ["error" => "Введите значение для записи в БД"];
    }

    // if all right
    if (empty($error)) {
        
        // check if value is already in db
        $checkDbValue = R::count("usermessages", "text = ?", [$value]);
        if($checkDbValue == 1){

            // alert for success data 
            $error += ["error" => "You should check in on some of those fields below."];

            // send data
            echo json_encode($error); 

        }else{
            // write data to db
            $createItem = R::dispense("usermessages");
                $createItem->text = $value;
                $createItem->create_date = date("d.m.y");
                $createItem->create_time = date("H:i:s");
            R::store($createItem);    

            // alert for success data 
            $success += ["success" => "Данные успешно записаны в БД"];

            // send data
            echo json_encode($success); 
        }

    }else{

        // send data
        echo json_encode($error); 

    }

?>