<?php
  ob_start();
?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
 <h1>Estamos creando un PDF</h1>
</page>

<?php

  $content = ob_get_clean();
  require_once(dirname(__FILE__).'');
  try
  {
      $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('PDF-CF.pdf');
  }
  catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
  }