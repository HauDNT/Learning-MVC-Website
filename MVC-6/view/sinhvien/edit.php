<form action="?action=update&controller=sinh_vien" method="POST">
    Mã sinh viên
    <input type="text" name="ma" value="<?php echo $each -> get_ma() ?>">
    <br>
    Họ tên
    <input type="text" name="ten" value="<?php echo $each -> get_ten() ?>">
    <br>
    Lớp
    <select name="malop">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma()?>"
                <?php if($each->get_malop() === $lop->get_ma())
                    echo "selected"
                    ?>>
                <?php echo $lop->get_ten()?>
            </option>

        <?php endforeach;?>
    </select>

    <button>Sửa</button>
</form>