<?php
    require 'connect.php';

    $postdata = file_get_contents('php://input');
    if (isset($postdata) && !empty($postdata)) {
        $request = json_decode($postdata);

        $id = (int) $_GET['id'];
        $fname = $request->fName;
        $lname = $request->lName;
        $kilasy = $request->kilasy;
        $datyN = $request->datyN;
        $dada = $request->dada;
        $mama = $request->mama;
        $toerana = $request->toerana;
        $tel = $request->tel;
        $email = $request->email;

        $sql = "UPDATE students SET fName='$fname', lName='$lname',kilasy='$kilasy', datyN='$datyN', dada='$dada', mama='$mama', toerana='$toerana', tel='$tel', email='$email' WHERE sId='$id' LIMIT 1";

        if (mysqli_query($con, $sql)) {
            http_response_code(204);
        } else {
            return http_response_code(422);
        }
    }
