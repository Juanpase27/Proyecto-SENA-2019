<?php

require_once 'CONEX_BARRAS.php';

$sql="SELECT * FROM inventario";

$resultados=mysqli_query($mysqli, $sql);
$valoresY=array();
$valoresX=array();

while($ver=mysqli_fetch_row($resultados)){
    $valoresY[]=$ver[2];
    $valoresX[]=$ver[1];
}

$datosX=json_encode($valoresX);
$datosY=json_encode($valoresY);

?>

<div id="graficaBarras"></div>

<script type="text/javascript">
    function crearCadenaBarras(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX ?>');
    datosY=crearCadenaBarras('<?php echo $datosY ?>');

	var data = [
        {
            x: datosX,
            y: datosY,
            type: 'bar'
        }
    ];

	Plotly.newPlot('graficaBarras', data);
</script>