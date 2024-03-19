<?php
require_once "models/Nguoithue.php";
require_once "models/Tang.php";

function listNguoiThue()
{
    $listNguoiThue = getAllNguoiThue();
    include "views/list.php";
}
function listAllTang()
{
    $listTang = listTang();
    // var_dump($listTang);
    include "views/add.php";
}
function addNguoiThue($ten, $namsinh, $quequan, $sdt, $hinhanh, $id_tang)
{
    $targetDir = "public/image/";
    $targetFile = $targetDir . $hinhanh['name'];
    $hinhanh_url = "";

    if (move_uploaded_file($hinhanh['tmp_name'], $targetFile)) {
        $hinhanh_url = $targetFile;

        $check = insertNguoiThue($ten, $namsinh, $quequan, $sdt, $hinhanh_url, $id_tang);

        if (!$check) {
            echo '<script> alert("Thêm thành công")</script>';
        } else {
            echo '<script> alert("Thêm thất bại")</script>';
        }
    } else {
        echo '<script> alert("Upload ảnh không thành công")</script>';
    }
}
function updateView()
{
    $nguoithue_id = isset($_GET['nguoithue_id']) ? $_GET['nguoithue_id'] : null;
    $listTang = listTang();
    $nguoiThue = getNguoiThue($nguoithue_id);
    include "views/update.php";
}
function postUpdate($ten, $namsinh, $quequan, $sdt, $hinhanh, $id_tang)
{
    $nguoithue_id = isset($_GET['nguoithue_id']) ? $_GET['nguoithue_id'] : null;
    $nguoiThue = getNguoiThue($nguoithue_id);
    if ($hinhanh['size'] != 0) {
        $targetDir = "public/image/";
        $targetFile = $targetDir . $hinhanh['name'];
        if (move_uploaded_file($hinhanh['tmp_name'], $targetFile)) {
            $image_url = $targetFile;
        }
    } else {
        $image_url = $nguoiThue['hinhanh'];
    }
    $check = updateNguoiThue($nguoithue_id, $ten, $namsinh, $quequan, $sdt, $image_url, $id_tang);
    if (!$check) {
        echo '<script>alert("Cap nhat người thuê thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Cap nhat người thuê that bai")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}
function postDeleleNguoiThue()
{
    $nguoithue_id = isset($_GET['nguoithue_id']) ? $_GET['nguoithue_id'] : null;

    deleteNguoiThue($nguoithue_id);
    echo '<script>alert("Xoa người thuê thành công")</script>';
    echo '<script>window.location.href = "index.php";</script>';
}
