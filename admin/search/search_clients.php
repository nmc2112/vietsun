<?php
    include("../../libs/bootstrap.php");
    
    
    if(isset($_GET['query'])){
        $keyword = $_GET['query'];
        $sql = "SELECT * FROM tblclients
        WHERE (cl_firstname LIKE '%{$keyword}%')
        OR (cl_lastname LIKE '%{$keyword}%')
        OR (cl_email LIKE '%{$keyword}%')
        OR (cl_id LIKE '%{$keyword}%')";
        $table = $db->fetchAll($sql);
    }
    else{
        $sql = "SELECT * FROM tblclients
        ORDER BY cl_id
        LIMIT 0,20
        ";
        $table = $db->fetchAll($sql);
    }
    $output='<br>';
    if(count($table)>0){
        $output .= '
            <div class="table-responsive">
            <table class="table table bordered">
                <tr>
                    <th>Client ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th width="30%">Email</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>                            
                </tr>
            ';
        foreach($table as $row){
            $output .= '
                <tr>
                    <td>'.$row["cl_id"].'</td>
                    <td>'.$row["cl_firstname"].'</td>
                    <td>'.$row["cl_lastname"].'</td>
                    <td>'.$row["cl_email"].'</td>
                    <td>'.$row["cl_phone"].'</td>
                    <td><i class="fas fa-pen"></i></td>
                    <td><i class="fas fa-trash"></i></td>
                    </tr>
                ';
        }
        echo $output;
    }
    else{
        echo '<p class="ml-3 mt-2">Data Not Found</p>';
    }

    