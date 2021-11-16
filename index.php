<?php include('conexion.php') ?>
<?php include('includes/header.php')?>

<?php
    $query = mysqli_query($conn,"SELECT *FROM cliente");
?>

    <table> 
        <tr> 
            <th>I</th>
            <th>Nombre</th>
            <th>Clave</th>

            <?php
                while($item=mysqli_fetch_array($query)){
                    echo"<tr>";
                        echo "<td>".$item['id_cliente'] ."</td>";
                        echo "<td>".$item['nom_cliente'] ."</td>";
                        echo "<td>".$item['clave_estado'] ."</td>";
                    echo"</tr>";
                }
            ?>
        </tr>
    </table>

<?php include('includes/footer.php') ?>
