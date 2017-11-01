<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

    //Recoger el contenido de otro archivo
ob_start(); // Función de PHP para recoger con un buffer lo que genera un HTML según elsiguiente 'require_once'
require_once 'print_view.php';
$html = ob_get_clean(); // Almaceno el resultado del buffer 'ob_start()' en una variable

    //$html2pdf = new Html2Pdf('P','Letter','es','true','UTF-8');
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html); // Paso como parámetro la variable con el buffer del contenido del HTMLs
$html2pdf->output('informe1.pdf');
?>
