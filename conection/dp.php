<?php
try{
$conn=new PDO("mysql:host=localhost;dbname=smart_note","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}
catch (PDOException $erorr){
        die("connected failed".$erorr->getMessage());
}

?>      