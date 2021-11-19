<?php 
    include('conexion.php');
    include('includes/header.php');
    include('fusioncharts/fusioncharts-wrapper/fusioncharts.php');
    include('vistas/northwind.php');

    $obj = new Northwind();

    $jeV = $obj->top_vendedores($conn);
    $jeP = $obj->top_productos($conn);
    $jeC = $obj->ventas_company($conn);
    $jeE = $obj->ventas_estado($conn);

    $columnChartV = new FusionCharts("column2D", "myFirstChart" , 600, 400, "chart-1", "json",$jeV);
    $columnChartP = new FusionCharts("doughnut3D", "mySecondChart" , 600, 400, "chart-2", "json",$jeP);
    $columnChartC = new FusionCharts("column2D", "myThirdChart" , 600, 400, "chart-3", "json",$jeC);
    $columnChartE = new FusionCharts("column2D", "myFourChart" , 600, 400, "chart-4", "json",$jeE);


    $columnChartV->render();
    $columnChartP->render();
    $columnChartC->render();
    $columnChartE->render();
?>

<center>
    <div id="chart-1">Chart will render here! Hola</p>
</center>
    
    <div id="chart-2"> Chart 2 </div>    
    <div id="chart-3"> Chart 3 </div>  
    <div id="chart-4"> Chart 3 </div>  
   








