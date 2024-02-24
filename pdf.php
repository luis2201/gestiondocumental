<?php

header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=".$_GET['document']);
readfile('files/'.$_GET['document'].'.pdf');

?>