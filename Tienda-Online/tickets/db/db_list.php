<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from tickets;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora venta</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Total</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_ticket = $row['id_ticket'];
        $fecha = $row['fecha'];
        $hora_venta = $row['hora_venta'];
        $cantidad_producto = $row['cantidad_producto'];
        $producto = $row['producto'];
        $total_Producto = $row['total_Producto'];

        $table = "
            <tr>
                <td>$id_ticket</td>
                <td>$fecha</td>
                <td>$hora_venta</td>
                <td>$cantidad_producto</td>
                <td>$producto</td>
                <td>$total_Producto</td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>