    <?php 
        include('conexion.php');
        include('includes/header.php');
        include('fusioncharts/fusioncharts-wrapper/fusioncharts.php');
    ?>


<?php
    $query = mysqli_query($conn,"SELECT *FROM top_vendedores");
    
    if($query){
        $arrData = array(
            "chart" => array(
                "caption" => "Top #5 Mejores Vendedores ",
                "subCaption" => "Northwind Database",
                "xAxisName" => "Vendedores",
                "yAxisName" => "Ventas (MDP)",
                "showValues" => "0",
                "theme" => "candy"
            )
        );

        $arrData["data"] = array();

        while($row = mysqli_fetch_array($query)){
            array_push(
                $arrData["data"],
                array(
                    "label" => $row["nom_empleado"],
                    "value" => $row["Ventas"]
                )              
            );
        }
        $jsonEncodedData = json_encode($arrData);
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 700, 400, "chart-1", "json", $jsonEncodedData);
        // Render the chart    
        $columnChart->render();
        
    }

?>

    <center>
        <div id="chart-1">Chart will render here! Hola</p>
    </center>
    
    
   








