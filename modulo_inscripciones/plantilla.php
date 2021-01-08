<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
// Cabecera de página
	function Header()
	{
	    // Logo
	    $this->Image('TESJo_logo.jpg',10,5,45);
	    $this->Image('SEP.png',60,8,40);
	    $this->Image('edomex.png',115,1,50);
	    $this->Image('tecnm.png',170,8,30);
	   
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Movernos a la derecha
	    
	    // Título
	    $this->Ln(20);
	   	$this->Cell(0,0,utf8_decode('Tecnológico de Estudios Superiores de Jocotitlán'),0,1,'C');
	   	$this->Ln(8);
	   	$this->SetFont('Arial','B',14);
	   	$this->Cell(0,0,utf8_decode('Carga Académica'),0,1,'C');
	    // Salto de línea
	    $this->Ln(8);
	}

	// Pie de página
	function Footer()
	{
	    // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}
?>