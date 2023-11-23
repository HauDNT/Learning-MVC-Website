<form action="?action=store&controller=nhanvien" method="POST">
    Họ tên nhân viên
    <input type="text" name="ten"">
    <br>
    Phòng
    <select name="ma_phong">
        <?php foreach ($dsPhong as $phong) { ?>
            <option value="<?php echo $phong['ma']?>">
                <?php echo $phong['ten']?>
            </option>
        <?php } ?>
    </select>
    <br>

    <button>Thêm</button>
</form>