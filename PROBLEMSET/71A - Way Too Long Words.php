<?
$dir = fopen("php://stdin", 'r');
$data = stream_get_contents($dir);
$parsedData = explode("\n", $data);
$totalLine = $parsedData[0];
for ($i=1; $i<=$totalLine; $i++){
    $checkString = trim($parsedData[$i]);
    if (strlen($checkString) > 10){
        echo $checkString[0] . (strlen($checkString)-2) . $checkString[strlen($checkString)-1];
        echo "\n";
    } else {
        echo $checkString;
         echo "\n";
    }
}
?>