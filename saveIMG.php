<?php

error_reporting(E_ERROR | E_PARSE);

$response = new stdClass;
$response->status = null;
$response->message = null;

//uplpadflie
$destination_dir = "/image";
$base_filename = basename($_FILES["file"]["name"]);
$starget_file = $destination_dir . $base_filename;
if(!$_FILES["file"]["error"]){
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$starget_file)){
        $response->status = true;
        $response->message = "File Upload Successfuly";


    }else{
        $response->status = false;
        $response->message = "File Upload Failed";
    }

}else{
    $response->status = false;
    $response->message = "File Upload Failed";

}
header('Content-Type: application/json');
echo json_encode($response);
