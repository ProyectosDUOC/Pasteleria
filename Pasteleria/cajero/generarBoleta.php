<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar Boleta</title>
    <?php
        $items = array();
        session_start();
        if(isset($_SESSION["items"])){
            $items = $_SESSION["items"];
        }
        if(isset($_POST["opcion"])){

            if($_POST["opcion"]=="Agregar"){
                $idproducto = $_POST["idproducto"];
                $cantidad = $_POST["cantidad"];
                $items[] = array("idprod" => $idproducto, "cant" => $cantidad);
            }

            if($_POST["opcion"]=="Pagar"){
                /*$idBoleta=1;
                $boleta = new Boleta($idBoleta,$total,$empleado);
                foreach ($items as $key => $value) {
                    $item = new DetalleBoleta($key,$value["idprod"],$idBoleta,$value["cant"],3);
                }*/
                // GUARDAR CON DAOS 
                session_destroy();
            }
        }
    ?>
</head>
<body>
    <h1>Nueva Boleta</h1>

    <form action="generarBoleta.php" method="POST">
        <h2>Ingresar Producto</h2>
        <table>
            <tr>
                <td>Id Producto</td>
                <td><input type="number" name="idproducto"></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type="number" name="cantidad"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="opcion" value="Agregar"></td>
            </tr>
        </table>

        <h2>Detalle Boleta</h2>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php
                foreach ($items as $item) {
                    echo "<tr>";
                    echo "<td>".$item["idprod"]."</td>";
                    echo "<td>".$item["cant"]."</td>";
                    echo "<td>$500</td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <td>Total:</td>
                <td id="total"></td>
            </tr>
        </table>
        <input type="submit" name="opcion" value="Pagar">
    </form>
    <?php $_SESSION['items']=$items; ?>
</body>
</html>