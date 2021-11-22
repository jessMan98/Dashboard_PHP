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
                    "palettecolors" => "2874A6,EC7063,BB8FCE,16A085,F8C471",
                    "numberPrefix" => "$",
                    "showValues" => "0",
                    "showBorder" => "1",
                    "borderColor" => "E5E5E5",
                    "captionAlignment" => "left",
                    "borderThickness" => 5,
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
                    "palettecolors" => "5499C7",
                    "numberPrefix" => "$",
                    "showValues" => "0",
                    "showBorder" => "1",
                    "borderColor" => "E5E5E5",
                    "borderThickness" => 5,
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
                    "palettecolors" => "FFFF00,28B463,FE0041,F2F780,2FFE65,2874A6,EC7063,BB8FCE,16A085,F8C471,5D6D7E,D35400",
                    "showBorder" => "1",
                    "showValues" => "0",
                    "borderColor" => "E5E5E5",
                    "borderThickness" => 5,
                    "numberPrefix" => "$",
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
                    "palettecolors" => "2874A6,BDB76B,7B68EE,FF8C00,C71585,EC7063,BB8FCE,16A085,E74C3C,F8C471,DC143C",
                    "showValues" => "1",
                    "showLabels" => "0",
                    "showBorder" => "1",
                    "borderColor" => "E5E5E5",
                    "borderThickness" => 5,
                    "pieRadius" => 180,
                    "numberPrefix" => "$",
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

    function ventas_totales($cnx){
        $query = mysqli_query($cnx, "SELECT *FROM ventas_totales");
        $r =  mysqli_fetch_array($query);
        return $r['TOTAL'];
    }
}

?>