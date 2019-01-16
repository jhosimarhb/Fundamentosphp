<?php
$zip = new ZipArchive;

if ($zip->open("coprimido.zip",ZipArchive::CREATE)=== true){
	/*$zip->addfile("1.JPG","1.JPG");
	$zip->addfile("2.JPG","2.JPG");
	$zip->addfile("3.JPG","3.JPG");
	$zip->addfile("4.JPG","4.JPG");*/
	$zip->deleteName('4.JPG');
	$zip->close();


}else{
	echo "no he podido abrir el archivo";
}

?>