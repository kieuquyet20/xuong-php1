<?php
require_once "db.php";

function getAllNguoiThue()
{
    $sql = "SELECT nt.id, nt.ten, nt.namsinh, nt.quequan, nt.sdt, nt.hinhanh, tang.sotang 
    FROM nguoithue AS nt 
    INNER JOIN tang ON nt.id_tang = tang.id;";
    return getData($sql);
}
function insertNguoiThue($ten, $namsinh, $quequan, $sdt, $hinhanh,$id_tang){
    $sql = "INSERT INTO nguoithue( ten, namsinh,quequan, sdt, hinhanh, id_tang) VALUES('$ten', '$namsinh', '$quequan', '$sdt', '$hinhanh', '$id_tang')";
    return getData($sql);
}
function getNguoiThue($nguoithue_id){
    $sql = "SELECT nt.id, nt.ten, nt.namsinh, nt.quequan, nt.sdt, nt.hinhanh, tang.sotang 
    FROM nguoithue AS nt 
    INNER JOIN tang ON nt.id_tang = tang.id WHERE nt.id = {$nguoithue_id}";
    return getData($sql,false);
}
function updateNguoiThue($nguoithue_id,$ten, $namsinh, $quequan, $sdt, $hinhanh,$id_tang){
    $sql = "UPDATE nguoithue SET ten='{$ten}', namsinh='{$namsinh}', quequan='{$quequan}', sdt='{$sdt}', hinhanh='{$hinhanh}',id_tang='{$id_tang}' WHERE id='{$nguoithue_id}' ";
    return getData($sql,false);
}
function deleteNguoiThue($nguoithue_id) {
    $sql = "DELETE FROM nguoithue WHERE id='{$nguoithue_id}'";
    return getData($sql, false);
}