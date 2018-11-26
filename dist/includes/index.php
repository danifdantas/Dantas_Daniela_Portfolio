<?php
include 'functions.php';

//single project route

if(isset($_GET['project'])) {
    $data = get_single_project($conn, $_GET['project']);
    echo json_encode($data);
} else{
    $data = get_all_projects($conn);
    echo json_encode($data);
}

?>