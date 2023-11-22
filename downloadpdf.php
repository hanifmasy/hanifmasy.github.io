<?php
     header("Cache-Control: public");
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; filename=cv_hanif_masykuri.pdf");
     header("Content-Type: application/pdf");
     header("Content-Transfer-Encoding: binary");
     readfile("cv_hanif_masykuri.pdf");
 ?>

