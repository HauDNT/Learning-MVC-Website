<form action="?action=update&controller=sinhvien" method="post">
    Mã sinh viên
    <input type="text" name="ma" value="<?php echo $each['ma']?>">
    <br>
    Họ và tên
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach ($dsLop as $lop): ?>
            <option value="<?php echo $lop['ma']?>"  <?php if($lop['ma'] === $each['malop']) echo 'selected'?>>
                <?php echo $lop['ten']?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Sửa</button>
</form>