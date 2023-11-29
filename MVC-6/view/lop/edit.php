<form action="?action=update" method="POST">
    Sỉ số
    <input type="text" name="ma" value="<?php echo $each -> get_ma() ?>">
    <br>
    Tên lớp
    <input type="text" name="ten" value="<?php echo $each -> get_ten() ?>">
    <br>
    Sỉ số
    <input type="text" name="siso" value="<?php echo $each -> get_siso() ?>">
    <br>

    <button>Sửa</button>
</form>