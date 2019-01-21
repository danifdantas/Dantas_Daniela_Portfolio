<?php

require 'connect.php';
// Get all projects
    function get_all_projects($pdo) {
        
      //Create query
      $query = "SELECT * FROM tbl_projects p, tbl_roles r, tbl_projects_roles pr WHERE p.project_id = pr.project_id AND r.role_id = pr.role_id";

        // pass query to connection
        $get_projects = $pdo->query($query);

        // result in an array
        $results = array();
        while($row = $get_projects->fetch(PDO::FETCH_ASSOC)) {
          $results[] = $row;
        }

        return $results;
    }

    function get_single_project($pdo, $proj) {
        
        //Create query
        $query = "SELECT * FROM tbl_projects p, tbl_roles r, tbl_projects_roles pr WHERE p.project_id = pr.project_id AND r.role_id = pr.role_id AND id = '$proj'";

      // pass query to connection
      $get_project = $pdo->query($query);
      // result in an array
      $results = array();

      while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
      }

      return $results;
    }


?>