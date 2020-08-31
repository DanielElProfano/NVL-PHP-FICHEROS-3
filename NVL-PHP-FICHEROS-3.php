<?php

$archivo = "documento.txt";
$archivo_mod = "documento.txt.modificado";
$fecha = date("d-m-y");
$directorio = "./$fecha";
mkdir ($directorio);
copy($archivo,$directorio.'/'.$archivo_mod);

?>