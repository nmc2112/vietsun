<?php
    $xtp = new XTemplate('views/home.html');
    if($_POST){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mess = $_POST['message'];
        $sql  = "INSERT INTO tblclients(cl_firstname,cl_lastname,cl_email,cl_phone,cl_message) VALUES('{$fname}','{$lname}','{$email}','{$phone}','{$mess}')";
        
        $db->executeSQL($sql);
    }
    $xtp->parse('HOME');
    $acontent = $xtp->text('HOME');