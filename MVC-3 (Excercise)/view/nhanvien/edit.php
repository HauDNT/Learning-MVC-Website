<form action="?action=update&controller=nhanvien" method="post">
    Mã nhân viên
    <input type="text" name="ma" value="<?php echo $each['ma']?>">
    <br>
    Họ và tên
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <br>
    Phòng
    <select name="ma_phong">
        <?php foreach ($dsPhong as $phong): ?>
            <option value="<?php echo $phong['ma']?>"  <?php if($phong['ma'] === $each['maphong']) echo 'selected'?>>
                <?php echo $phong['ten']?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Sửa</button>
</form>