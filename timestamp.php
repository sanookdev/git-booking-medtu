<?

$file = 'timestamp/แบบฟอร์มการเก็บข้อมูลประสิทธิผลของการใช้แนวปฏิบัติการพัฒนาคุณภาพในการป้องกันภาวะอุณหภูมิกายต่ำในทารกเกิดก่อนกำหนด.docx';


$lastModified = @filemtime($file);

echo "encode = ".mb_detect_encoding($file)."<BR>";
echo "1 = ".$lastModified."<br>";
if($lastModified == NULL)
    $lastModified = filemtime(utf8_decode($file));
    
// echo $lastModified."<BR>";
utf8_encode($lastModified);

echo $lastModified."<BR>";

$strYear = date("Y", $lastModified) + 543;
$strMonth = date("m", $lastModified);
$strDay = date("d", $lastModified);
$strHour = date("H", $lastModified);
$strMinute = date("i", $lastModified);

echo $strYear . " " . $strMonth. " " . $strDay . " " . $strHour . " " . $strMinute;


?>