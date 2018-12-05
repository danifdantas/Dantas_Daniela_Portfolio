<?php
$db_dsn = array (
    'host'=>'localhost',
    'dbname'=>'db_dantas_portfolio',
    'charset'=>'utf8',
);

$dsn = 'mysql:'.http_build_query($db_dsn,'',';');
$user = "root";
$pw = "root";
$options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
  ];
try{
    $conn = new PDO($dsn, $user, $pw, $options);
    //var_dump($conn);
} catch(PDOException $exception) {
    error_log($exception->getMessage());
    exit('Connection Error');
}

?>