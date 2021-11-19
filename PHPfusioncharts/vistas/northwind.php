<?php

class Northwind{

    function top_vendedores($cnx){
        $query = mysqli_query($cnx,"SELECT *FROM top_vendedores");
        
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
                    ));
            }
            $jsonEncodedData = json_encode($arrData); 
        }
        return $jsonEncodedData;
    }


    function top_productos($cnx){
        $query = mysqli_query($cnx, "SELECT *FROM top_productos");

        if($query){
            $arrData = array(
                "chart" => array(
                    "caption" => "Top #5 Mejores Productos ",
                    "subCaption" => "Northwind Database",
                    "xAxisName" => "Productos",
                    "yAxisName" => "Ventas (MDP)",
                    "palettecolors" => "60200B,FFFF00,FE0041,F2F780,2FFE65",
                    "showValues" => "0",
                    //"bgColor" => "#088B84",
                    "theme" => "candy"
                )
            );
    
            $arrData["data"] = array();
    
            while($row = mysqli_fetch_array($query)){
                array_push(
                    $arrData["data"],
                    array(
                        "label" => $row["nom_producto"],
                        "value" => $row["Ventas"]
                    ));
            }

            $jsonEncodedData = json_encode($arrData);
        }
        return $jsonEncodedData;
    }

    function ventas_company($cnx){
        $query = mysqli_query($cnx, "SELECT *FROM ventas_por_compañia");

        if($query){
            $arrData = array(
                "chart" => array(
                    "caption" => "Ventas por Compañia",
                    "subCaption" => "Northwind Database",
                    "xAxisName" => "Compañia",
                    "yAxisName" => "Ventas (MDP)",
                    "palettecolors" => "60200B,FFFF00,FE0041,F2F780,2FFE65",
                    "showValues" => "0",
                    //"bgColor" => "#088B84",
                    "theme" => "candy"
                )
            );
    
            $arrData["data"] = array();
    
            while($row = mysqli_fetch_array($query)){
                array_push(
                    $arrData["data"],
                    array(
                        "label" => $row["nom_cliente"],
                        "value" => $row["Ventas"]
                    ));
            }

            $jsonEncodedData = json_encode($arrData);
        }
        return $jsonEncodedData;
    }

    function ventas_estado($cnx){

        $query = mysqli_query($cnx, "SELECT *FROM ventas_por_estado");

        if($query){
            $arrData = array(
                "chart" => array(
                    "caption" => "Ventas por Estado",
                    "subCaption" => "Northwind Database",
                    "xAxisName" => "Estado",
                    "yAxisName" => "Ventas (MDP)",
                    "palettecolors" => "60200B,FFFF00,FE0041,F2F780,2FFE65",
                    "showValues" => "0",
                    //"bgColor" => "#088B84",
                    "theme" => "candy"
                )
            );
    
            $arrData["data"] = array();
    
            while($row = mysqli_fetch_array($query)){
                array_push(
                    $arrData["data"],
                    array(
                        "label" => $row["clave_estado"],
                        "value" => $row["Ventas"]
                    ));
            }

            $jsonEncodedData = json_encode($arrData);
        }
        return $jsonEncodedData;
    }


}






?>