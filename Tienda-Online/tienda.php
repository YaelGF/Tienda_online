<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Carrito</title>
</head>
<body class="indigo lighten-5">
	<br>
        <div class="container white" style="min-height:  80vh; padding: 20px"> <!-- CONTAINER -->
            <div class="row"> <!-- ROW -->
              <form  action="javascript:enviar()" method="POST" >
                <form>
                    <div class="input-field col 16" >
                        <input type="number" min="1" max="10" name="Cantidad" value="1" id ="cantidad-id">
                        <label for="cantidad">Cantidad :</label>
                    </div>
                    <div class="input-field col 16" >
                        <select name="menu" id="menu-id">
                            <?php
                                $db = new SQLite3("tienda.db");
                                $resultado = $db->query("SELECT * from productos where existencias > 0;");
                                while ($row = $resultado->fetchArray()) {
                            ?>
                            <option value ="<?php echo $row["producto"]; ?>"><?php echo $row["producto"]; ?> </option>
                            <?php
                                }
                            ?>
                        </select>
                        <label for="menu">Producto: </label>
                    </div>
                    <div class="input-field col 16" >
                        <button type="button" class="btn waves-effect" onclick="getData()">
                            Insertar
                        </button>
                    </div>
                    <div class="input-field col s12" >
                      <textarea  id="textarea-id"  disabled  cols="100" rows="50" style="width = 875px; height: 317px" name ="textarea"></textarea>
                    </div>
                    <div class="input-field col 16">
                        <label for="pago">Total a pagar:</label>
                        <input type="number" name="pago" readonly="readonly" disabled="disabled" value="0" id= "valor-id">
                    </div>
                    <div class="input-field col 16">
                        <button type="button" class="btn waves-effect" id="clear-id">Limpiar</button>
                    </div>
                   <div class="input-field col 16">
                   <input type="submit" class="btn waves-effect" id="ticket-id" value="Ticket">
                    </div>
                    <div class="input-field col 16">
                        <a href="productos/index.php"><button type="button" class="btn waves-effect">Base de Datos</button></a>
                    </div>
                    <div class="input-field col 16">
                        <a href="./tickets/index.php"><button type="button" class="btn waves-effect">Historial Ventas</button></a>
                    </div>
                    
                </form>
              </form>
            </div> <!-- ROW -->
        </div> <!-- CONTAINER -->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script src="carrito.js"></script>
        
    </body>
</html>
