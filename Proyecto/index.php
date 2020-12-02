<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <form  method="GET">
    
     <div class="container">
        <div class="row text-center login-page">
	   <div class="col-md-12 login-form">
	      <form action=".php" method=" "> 			
	         <div class="row">
		    <div class="col-md-12 login-form-header">
		       <p class="login-form-font-header">SIES <span> UTEC</span><p>
		    </div>
		</div>
		<div class="row">
      <div class="col-md-12 login-from-row">
        <IMG SRC="img//logoc.png" ALT="No cargo :("></div>
		   <div class="col-md-12 login-from-row">
		      <input name="usuario" type="text" placeholder="Usuario" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="password" type="password" placeholder="Contraseña" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
                <a href="register.php"><button type="button" class="btn-success">Registrar</button></a>
		        <button type="submit" class="btn-success">Entrar</button>
		   </div>
		</div>
	    </form>
	</div>
     </div>
    </div>
    </form>
    <?php
        include 'sqlite.php';  
    ?>
</body>
</html>