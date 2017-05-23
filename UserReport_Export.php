<?php  
  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'notebook');  
  
$setSql = "SELECT `id`,`user_id`,`name`,`created_at`,`updated_at` FROM `notebooks`";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Sr NO./ID" . "\t" . "User Id" . "\t" . "Notebook Name" . "\t" . "Updated At" . "\t" . "Created At" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?> 