<?php

require('./fpdf.php');
$conexion = mysqli_connect("localhost","root","","cuaderno_campo2.0");
class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include 'C:\xampp\htdocs\cuaderno de campo\conexion_bd.php'; //llamamos a la conexion BD

      $consulta_info = $conexion->query(" select * from ventas "); //traemos datos de la empresa desde BD
      $dato_info = $consulta_info->fetch_object();
      $this->Image('lechuga-removebg-preview.png', 20,3, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
     
      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(0, 95, 189);
      $this->Cell(-20); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("VENTAS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(125, 173, 221); //colorFondo
      $this->SetTextColor(0, 0, 0); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(50, 10, utf8_decode('ID_P'), 1, 0, 'C', 1);
      $this->Cell(80, 10, utf8_decode('PRODUCTO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('PRECIO'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('UNIDADES'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
      
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include 'C:\xampp\htdocs\cuaderno de campo\conexion_bd.php';

$pdf = new PDF();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_asistencia = $conexion->query(" select ref_producto,n_pro_venta,precio_v,unidades_v,fecha_v from ventas");

while ($datos_reporte = $consulta_reporte_asistencia->fetch_object()) {
   $i = $i + 1;
   /* TABLA */
   $pdf->Cell(50, 10, utf8_decode($i), 1, 0, 'C', 0);
   $pdf->Cell(80, 10, utf8_decode($datos_reporte->n_pro_venta), 1, 0, 'C', 0);
   $pdf->Cell(30, 10, utf8_decode($datos_reporte->precio_v), 1, 0, 'C', 0);
   $pdf->Cell(50, 10, utf8_decode($datos_reporte->unidades_v), 1, 0, 'C', 0);
   $pdf->Cell(70, 10, utf8_decode($datos_reporte->fecha_v), 1, 1, 'C', 0);
}


$pdf->Output('Reporte Asistencia.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)