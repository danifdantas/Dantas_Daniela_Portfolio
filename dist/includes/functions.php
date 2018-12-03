<?php
include 'connect.php';
// get one project first
function get_single_project($pdo, $proj) {
    $query = "SELECT * FROM tbl_projects p, tbl_roles r, tbl_projects_roles pr WHERE p.project_id = pr.project_id AND r.role_id = pr.role_id AND id = '$proj'";

    $get_project = $pdo->query($query);
    $results = array();

    while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}

function get_all_projects($pdo) {
    $query = "SELECT * FROM tbl_projects p, tbl_roles r, tbl_projects_roles pr WHERE p.project_id = pr.project_id AND r.role_id = pr.role_id";

    $get_projects = $pdo->query($query);
    $results = array();

    while($row = $get_projects->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}

?>