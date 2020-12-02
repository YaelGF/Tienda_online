<?php
if($_GET){
    $usuario = $_GET["usuario"];
    $password = $_GET["password"];
    $db = new SQLite3("DB/sies.db");

    $resultado = $db->query("SELECT * from usuarios where user_name='$usuario' and user_pass='$password';");
     while ($row = $resultado->fetchArray()) {
        $id = $row["id_usuario"];
        $uwu = $row["user_name"];
        $pass = $row["user_pass"];
    }
    if($usuario == $uwu and $password == $pass){
        header("Location: home.php");
    }
    else {
        echo '<script type="text/javascript">
        alert("Error en usuario o contraseña");
        window.location.href="index.php";
        </script>';
    }
}
?>