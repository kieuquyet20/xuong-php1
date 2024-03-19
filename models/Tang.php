<?php
require_once "db.php";
function listTang(){
    $sql = "SELECT * FROM tang";
    return getData($sql);
}