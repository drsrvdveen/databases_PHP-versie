<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
$titel=strstr(__FILE__,'_DOCENT');
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$fileList = glob('*.php');
foreach($fileList as $filename){
    if(is_file($filename)){
        if ($filename == 'opdracht_begin.php' || $filename == 'opdracht_eind.php' || $filename == 'index.php') {continue;}
        echo "<h1><a href=\"{$filename}\">{$filename}</a></h1>";
    }   
}

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>