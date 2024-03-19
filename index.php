<?php
require_once "controllers/NguoithueController.php";

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        listNguoiThue();
        break;
    case "add":
        if (isset($_POST['Save'])) {
            addNguoiThue($_POST['ten'], $_POST['namsinh'], $_POST['quequan'], $_POST['sdt'], $_FILES['hinhanh'], $_POST['id_tang']);
        }
        listAllTang();
        break;
    case "update":
        if (isset($_POST['update'])) {
            postUpdate($_POST['ten'], $_POST['namsinh'], $_POST['quequan'], $_POST['sdt'], $_FILES['hinhanh'], $_POST['id_tang']);
        }
        updateView();
        break;
    case "delete":
        postDeleleNguoiThue();
        break;
}
