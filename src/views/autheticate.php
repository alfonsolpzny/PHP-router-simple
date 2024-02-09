<?php
session_start();
if (isset($_SESSION['loggedin'])) { //Si esta logeado mandarlo a /home
    header('Location: home');
}

if (!empty($_POST)) {
    require_once 'MySQLi_db_connection.php';

    //if input fields are empty go to /index page
    if (!isset($_POST["username"], $_POST["password"])) {
        header('location: /index');
    } else {
        $username_form = $conn->real_escape_string($_POST["username"]);
        $password_form = $conn->real_escape_string($_POST["password"]);

        $sql = "SELECT id, username, password from users WHERE username = ?;";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('s', $username_form);
            $stmt->execute();
            //$stmt->store_result();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                if (password_verify($_POST["password"], $rows[0]["password"])) {

                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['id'] = $rows[0]["id"];
                    header('Location: /home');
                } else {
                    header('location: /index');
                }
            } else {
                header('location: /index');
            }
        } else {
            header('location: /index');
        }
    }




    // $sql = "SELECT password from users where username = ?;";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('s', ...[$username_form]);


    $conn->close();
}
