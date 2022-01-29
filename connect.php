<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username) {
    if (!empty($password)) {
        $host = "--" // tutaj wypełnij (musisz dać swoją baze danych)
        $dbusername = "--" // tutaj wypełnij (musisz dać swoją baze danych)
        $dbpassword = "--" // tutaj wypełnij (musisz dać swoją baze danych)
        $dbname = "--" // tutaj wypełnij (musisz dać swoją baze danych)

        // tworzenie laczenia
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('.
                mysqli_connect_errno().')' . 
                mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO form (username, password) values ('$username', '$password')"
            if ($conn >query($sql)) {
                echo "Właśnie się zalogowałeś!" // case #1
            }
            else {
                echo "Error: ". $sql . "<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else {
        echo "Haslo nie powinno byc puste"; // case #2
        die();
    }
}
else {
    echo "nazwa nie powinna byc pusta" // case #3
}
?>
