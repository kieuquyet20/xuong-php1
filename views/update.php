<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <form action="index.php?url=update&nguoithue_id=<?php echo $nguoiThue['id'] ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Disabled fieldset example</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Họ tên</label>
                <input type="text" id="disabledTextInput" class="form-control" name="ten" value="<?php echo $nguoiThue['ten'] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Năm Sinh</label>
                <input type="date" id="disabledTextInput" class="form-control" name="namsinh" value="<?php echo $nguoiThue['namsinh'] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Quê quán</label>
                <input type="text" id="disabledTextInput" class="form-control" name="quequan" value="<?php echo $nguoiThue['quequan'] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Số điện thoại</label>
                <input type="text" id="disabledTextInput" class="form-control" name="sdt" value="<?php echo $nguoiThue['sdt'] ?>">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Hình ảnh</label>
                <img src="<?php echo $nguoiThue["hinhanh"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;">
                <input type="file" id="disabledTextInput" class="form-control" name="hinhanh">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tầng</label>
                <select id="disabledSelect" class="form-select" name="id_tang">
                    <option value="0">--Chọn--</option>
                    <?php foreach ($listTang as $valueT) {  ?>
                        <option <?php if ($valueT["sotang"] == $nguoiThue["sotang"]) echo "selected" ?> value="<?php echo $valueT["id"] ?>"><?php echo $valueT["sotang"] ?></option>
                    <?php } ?>


                </select>
            </div>

            <!-- <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                </div>
            </div> -->
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
            <a class="btn btn-primary" href="index.php?url=/" role="button">Danh Sách</a>
        </fieldset>
    </form>

</body>

</html>