<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="styles.css" rel="stylesheet">
	<title>Carrito</title>
</head>
    
    <body class="indigo lighten-5">
	    <br>
        <div class="container white" style="min-height:  80vh; padding: 20px"> <!-- CONTAINER -->
            <div class="row"> <!-- ROW -->
              <form>
                <form>
                    <div class="Fecha"> Ticket
                    <br>
                      <?php
                          echo date('d/m/Y');
                          echo ('<br>');
                          $hora = new DateTime("now", new DateTimeZone('America/Mexico_City'));
                          echo $hora->format('h:i:s A');
                      ?>
                    </div>
                    <div class="input-field col s12" >
                      <textarea  id="textarea-id"  disabled  cols="100" rows="50" style="width = 875px; height: 317px" name ="textarea">
                      <?php
                          $product=$_REQUEST['product'];
                          $product=explode(".",$product);
                          $dimen=sizeof($product);
                          for($in=0; $in <$dimen;$in++){
                            echo $product[$in]."\n";
                          }
                        ?>
                      </textarea>
                    </div>
                    <div class="input-field col 16">
                        <label for="pago">Total a pagar:</label>
                        <input type="text" name="pago" readonly="readonly" id= "valor-id" disabled="disabled" Value= <?php echo $total=$_REQUEST['total']; ?> >
                    </div>
                    <div class="input-field col 16">
                        <label for="pago">Dinero dado:</label>
                        <input type="number" name="pago2"  id= "pago-id" value = "0">
                    </div>
                    <div class="input-field col 16">
                        <label for="pago">Cambio a dar:</label>
                        <input type="text" name="cambio" readonly="readonly" id= "cambio-id" disabled="disabled" Value= "0" >
                    </div>
                    <div class="input-field col 16" >
                        <button type="button" class="btn waves-effect" onclick="calcular_Cambio()">
                            Calcular
                        </button>
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

