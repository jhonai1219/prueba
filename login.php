<?php

require "conexion.php";

if(isset($_POST['g-recaptcha-response'])){  
    $captcha=$_POST['g-recaptcha-response'];  
}  
$recaptcha_secret = '6LcGTKoaAAAAAJ7-IaYx59F7MGsxRhG_NFpBbuI1';  
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$captcha);  
$response = json_decode($response, true);  
if(!empty($response["success"]))  
{  
    //echo 'Thanks for your message!';  
    
    $email = $_POST['correo'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND pass = '$pass'";

    if(!$consulta = $conexion->query($sql)){
        echo "ERROR: no se pudo ejecutar la consulta!";
    }else{
        $filas = mysqli_num_rows($consulta);
        header("Location: error.html"); 
        if($filas == 0){
            
        }else{
            session_start();
            $_SESSION["email"] = $email;

            header('Location: principal.php');
        }
    }
} else {  
    header("Location: error.html"); 
}  

?>