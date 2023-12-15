<?php
// Check if a file was uploaded
if ($_FILES['file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['file']['tmp_name'])) {
    $uploadsDirectory = 'imaage/'; // Specify the directory where you want to save the images
    $uploadedFilePath = $uploadsDirectory . basename($_FILES['file']['name']);

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFilePath)) {
        // Return the link to the uploaded file
        echo $uploadedFilePath;
    } else {
        echo 'Error moving the uploaded file';
    }
} else {
    echo 'No file uploaded or upload error';
}


?>
