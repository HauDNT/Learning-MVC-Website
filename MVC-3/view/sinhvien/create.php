<form action="?action=store&controller=sinhvien" method="post">
    Tên
    <input type="text" name="ten">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach ($dsLop as $lop) { ?>
            <option value="<?php echo $lop['ma']?>">
                <?php echo $lop['ten']?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button>Thêm</button>
</form>