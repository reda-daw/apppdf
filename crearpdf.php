<?php
    require './vendor/autoload.php';


use Spipu\Html2Pdf\Html2Pdf;


//Recoger el contenido del fichero del anexo que contiene el html
ob_start();

require 'crearhtml.php';

$html=ob_get_clean();


$html2pdf=new Html2Pdf('P','A4','es','true','UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output();


?>