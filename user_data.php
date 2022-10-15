<?php
if (isset($_POST['submit'])) {
    // Collect the form data.
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';

    if (!isset($errors)) {
        // The header row of the CSV.
        $header = "name,email,dob,gender,country\n";
        // The data of the CSV.
        $data = "$name,$email,$dob,$gender,$country\n";
        
        $fileName = dirname(__DIR__) . "/formdata-" . date("d-m-y-h-i-s") . ".csv";

        /*
         * Create the CSV file.
         * If file exists, append the data to it. Otherwise create the file.
         */
        if (file_exists($fileName)) {
            // Add only data. The header is already added in the existing file.
            file_put_contents($fileName, $data, FILE_APPEND);
        } else {
            // Add CSV header and data.
            file_put_contents($fileName, $header . $data);
        }
    }
}