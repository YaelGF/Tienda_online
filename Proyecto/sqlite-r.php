<?php
if($_GET){
    $usuario = $_GET["usuario"];
    $password = $_GET["password"];
    $cpassword = $_GET["cpassword"];

    $db = new SQLite3("DB/sies.db");
    $resultado = $db->query("SELECT * from usuarios where user_name='$usuario';");
    while ($row = $resultado->fetchArray()) {
        $id_usuario = $row["id_usuario"];
    }

    if($id_usuario != null){
        echo '<script type="text/javascript">
        alert("Usuario ya registrado intente con otro UwU ");
        </script>';
    }else {
        # code...
        if($password == $cpassword){

        $db->exec("INSERT INTO usuarios ( user_name, user_pass  ) VALUES ('$usuario', '$password');");
        
        echo '<script type="text/javascript">
        alert("Quedo Registrado Disfrute su entrada ");
        window.location.href="index.php";
        </script>';

        }else {

            # code...
            echo '<script type="text/javascript">
            alert("LAs contraseñas deben ser iguales");
            </script>';

        }
    }

    
}
?>