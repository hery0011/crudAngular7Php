<?php
    require 'connect.php';

    $postdata = file_get_contents('php://input');
    if (isset($postdata) && !empty($postdata)) {
        $request = json_decode($postdata);

        $fname = $request->fName;
        $lname = $request->lName;
        $kilasy = $request->kilasy;
        $datyN = $request->datyN;
        $dada = $request->dada;
        $mama = $request->mama;
        $toerana = $request->toerana;
        $tel = $request->tel;
        $email = $request->email;

        $sql = "INSERT INTO students(fName,lName,kilasy, datyN, dada, mama, toerana, tel, email) VALUES ('$fname', '$lname', '$kilasy', '$datyN', '$dada', '$mama', '$toerana', '$tel','$email')";

        $result = mysqli_query($con, $sql);
    }
