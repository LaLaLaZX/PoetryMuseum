<?php 
    include "php-connect/connect.php";
    session_start();
       

    if(isset($_POST['login'])) {
        $login = $_POST['login'];
        if($login === '') {
            unset($login);
        }
    }

    if(isset($_POST['password'])) {
        $password = $_POST['password'];
        if($password === '') {
            unset($password);
        }
    }



    $login = trim($_POST['login']);
    $password = trim($_POST['password']);


    $check_user = "SELECT * FROM `Visitors` WHERE `Email` ='$login'";
    $result = mysqli_query($connect, $check_user);
    $info_user = mysqli_fetch_array($result);
    $role = "SELECT visitors.ID_admin FROM visitors WHERE `Email` ='$login'";
    $res = mysqli_query($connect, $role);
    $info_role = mysqli_fetch_array($res);
    
    if ($info_user === NULL) {
        $array = array(
            'message' => 'not found user or password',
        );
         
        $json = json_encode($array);
        echo $json;
    } else {

        if(password_verify($password, $info_user['Password']))
        {
            // echo '2';
            $_SESSION['login'] = $info_user['Email'];
            $_SESSION['ID_Visitors'] = $info_user['ID_Visitors'];

            if ($info_role['ID_admin'] === '1') 
            {
                // $_SESSION['kulebaka'] = 'lox';
                $_SESSION['ID_admin'] = '1';
                $array = array(
                    'message' => 'admin',
                );
                $json = json_encode($array);
                echo $json;
            } else
            {          
                $_SESSION['ID_admin'] = '2';
                $array = array(
                    'message' => 'good',
                );
                $json = json_encode($array);
                echo $json;
            }
        } else {
            $array = array(
                'message' => 'not found user or passwor1d',
            );
            $json = json_encode($array);
            echo $json;
        }

    }

?>