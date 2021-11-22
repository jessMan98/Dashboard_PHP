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
    $partida = $obj->show_partida($conn);
    $pedido = $obj->show_pedido($conn);

?>
    
<div class="titulo">    
    <h1 data-text="Database">Database</h1> 
</div>   
    



<div class="container-tables">
    <div class="item">
        <h2>Categoria</h2>

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
        <h2>Cliente</h2>
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
        <h2>Empleado</h2>
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
        <h2>Estado</h2>
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
        <h2>Productos</h2>
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

    <div class="item">
        <h2>Partida</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Numero Pedido</th>
                    <th>ID Producto</th>
                    <th>Ventas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($partida)) { ?>
                        <tr>
                            <td> <?php echo $row['num_pedido'] ?> </td>
                            <td> <?php echo $row['id_producto'] ?> </td>
                            <td> <?php echo $row['ventas'] ?> </td>
                        </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    
    <div class="item">
        <h2>Pedido</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Numero Pedido</th>
                    <th>ID Pedido</th>
                    <th>Fecha Pedido</th>
                    <th>ID Empleado</th>
                    <th>ID Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($pedido)) { ?>
                        <tr>
                            <td> <?php echo $row['num_pedido'] ?> </td>
                            <td> <?php echo $row['id_pedido'] ?> </td>
                            <td> <?php echo $row['fecha_pedido'] ?> </td>
                            <td> <?php echo $row['id_empleado'] ?> </td>
                            <td> <?php echo $row['id_cliente'] ?> </td>
                        </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
    
</div>