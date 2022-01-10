<?php
$db=new PDO('mysql:host=localhost:3307;dbname=data_bbms', 'root','');
if($db){
    echo "Connect";
}
else{
    echo "not Connect";
}