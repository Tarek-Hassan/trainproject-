<?php
try{
$db= new PDO("mysql:host=localhost;dbname=train project;port=3306","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    

}catch( Exception $e ){?>
    <script>
    alert("you can't connect to the databasse");
    </script>
    <?php 
    exit;
    
}
?>
