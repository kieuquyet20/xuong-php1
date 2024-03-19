<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tên</th>
                <th scope="col">Năm sinh</th>
                <th scope="col">Quê quán</th>
                <th scope="col">Sdt</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tầng</th>
                <th scope="col">Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listNguoiThue as $key => $value) {   ?>
                <tr>
                    <th scope="row"><?php echo $value['id'] ?></th>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['namsinh'] ?></td>
                    <td><?php echo $value['quequan'] ?></td>
                    <td><?php echo $value['sdt'] ?></td>
                    <td><img src="<?php echo $value['hinhanh'] ?>" alt="" style="max-width: 100px;"></td>
                    <td><?php echo $value['sotang'] ?></td>
                    <td><a href="index.php?url=update&nguoithue_id=<?php echo $value["id"] ?>"
                                class="btn btn-warning">Sửa</a>
                            <a href="index.php?url=delete&nguoithue_id=<?php echo $value["id"] ?>"
                                class="btn btn-danger">Xóa</a></button>
                        </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
<a class="btn btn-primary" href="index.php?url=add" role="button">Thêm</a>

</body>

</html>