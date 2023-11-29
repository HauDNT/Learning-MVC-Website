<form action="?action=store&controller=sinh_vien" method="POST">
    Họ và tên
    <input type="text" name="ten">
    <br>
    Lớp
    <select name="malop" id="">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma()?>">
                <?php echo $lop->get_ten()?>
            </option>

        <?php endforeach;?>
    </select>
    <br>

    <button>Thêm</button>
</form>