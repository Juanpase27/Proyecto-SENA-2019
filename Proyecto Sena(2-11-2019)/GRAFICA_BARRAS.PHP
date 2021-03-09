<?php
require_once('jpgraph-4.2.9/src/jpgraph.php');

require_once('jpgraph-4.2.9/src/jpgraph_bar.php');

require_once("CONEX_BARRAS.php");

$resultados = mysqli_query($mysqli, "SELECT * FROM inventario");
			
while($consulta = mysqli_fetch_array($resultados)){

    $datos[]=$consulta['cantidad'];
    $labels[]=$consulta['nombre_producto'];

}

$grafico = new graph(500, 400, 'auto');
$grafico->SetScale('textint');
$grafico->title->set('Ejemplo de grafico');
$grafico->xaxis->title->Set('Productos');
$grafico->xaxis->SetTickLabels($labels);
$grafico->yaxis->title->Set('Ventas');

$barplot1 = new BarPlot($datos);

$barplot1->SetFillGradient('#BE81F7', '#E3CEF6', GRAD_HOR);

$barplot1->Setwidth(30);

$grafico->Add($barplot1);

$grafico->Stroke();

$grafico->Stroke('Img.png');
?>