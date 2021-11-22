<?php 
    include('includes/header.php');
    require_once('conexion.php'); 
    include('data/northwind.php');

    $obj = new Northwind();
    $cat = $obj->show_categoria($conn);
    $cliente = $obj->show_cliente($conn);
    $empleado = $obj->show_empleado($conn);
    $estado = $obj->show_estado($conn);
    $producto = $obj->show_producto($conn);

?>

<div class="container-tables">
    <div class="item">
        <table class="table">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($cat)) { ?>
                        <tr>
                            <td> <?php echo $row['categoria'] ?> </td>
                            <td> <?php echo $row['id_categoria'] ?> </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="item">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Clave Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($cliente)) { ?>
                        <tr>
                            <td> <?php echo $row['id_cliente'] ?> </td>
                            <td> <?php echo $row['nom_cliente'] ?> </td>
                            <td> <?php echo $row['clave_estado'] ?> </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="item"> 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($empleado)) { ?>
                        <tr>
                            <td> <?php echo $row['id_empleado'] ?> </td>
                            <td> <?php echo $row['nom_empleado'] ?> </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="item">
        <table class="table">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($estado)) { ?>
                        <tr>
                            <td> <?php echo $row['clave_estado'] ?> </td>
                            <td> <?php echo $row['nom_estado'] ?> </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="item">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>ID Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($producto)) { ?>
                        <tr>
                            <td> <?php echo $row['id_producto'] ?> </td>
                            <td> <?php echo $row['nom_producto'] ?> </td>
                            <td> <?php echo $row['id_categoria'] ?> </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>

</div>