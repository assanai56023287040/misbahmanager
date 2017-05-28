<?php
 $html.="<h1>Hello Assanai</h1>"
      ."<h1>test test Hello Test</h1>"
      ."<table border='1'" ;
 $this->mpdf = new mPDF();
 $this->mpdf->WriteHTML($html);
 $this->mpdf->output();
 $this->mpdf->exit;
?>