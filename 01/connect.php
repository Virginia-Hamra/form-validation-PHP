<?php 
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
/*$origen = filter_input(INPUT_POST, 'origen');
$terminos = filter_input(INPUT_POST, 'terminos');*/

if (!empty ($name)){
    if (!empty($password)){
        $host = "127.0.0.1";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "test";
//create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());   
    } 
    else {
        $sql = "INSERT INTO form_info (name, password)
        values ('$name', '$password')";
        if ($conn->query($sql)) {
            echo "New record is inserted sucessfully";
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
        $conn->close();
     }
    }
    else {
        echo "Password should not be empty";
        die();
    }
}
else{
    echo "Username should not be empty";
    die();
}

?>