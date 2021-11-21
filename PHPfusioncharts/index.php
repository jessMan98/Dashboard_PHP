<?php 
    include('includes/header.php');
    include('conexion.php');
    include('fusioncharts/fusioncharts-wrapper/fusioncharts.php');
    include('vistas/northwind.php');

    $obj = new Northwind();

    $jeV = $obj->top_vendedores($conn);
    $jeP = $obj->top_productos($conn);
    $jeC = $obj->ventas_company($conn);
    $jeE = $obj->ventas_estado($conn);
    $jeT = $obj->ventas_totales($conn);

    $columnChartV = new FusionCharts("bar2D", "myFirstChart" , 700, 400, "chart-1", "json",$jeV);
    $columnChartP = new FusionCharts("line", "mySecondChart" , 700, 400, "chart-2", "json",$jeP);
    $columnChartC = new FusionCharts("pareto2D", "myThirdChart" , 700, 400, "chart-3", "json",$jeC);
    $columnChartE = new FusionCharts("doughnut3d", "myFourChart" , 700, 400, "chart-4", "json",$jeE);
   
    $columnChartV->render();
    $columnChartP->render();
    $columnChartC->render();
    $columnChartE->render();

?>

<center>
    <div class="total"> 
        <span>Ventas Totales</span> 
        <?php 
            echo $jeT; 
        ?>
    </div>
</center>

    <div id="chart-1">Chart will render here! Hola</div>
    <div id="chart-2"> Chart 2 </div>    
    <div id="chart-3"> Chart 3 </div>  
    <div id="chart-4"> Chart 3 </div>  
   








