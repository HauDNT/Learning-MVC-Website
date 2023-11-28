<form action="?action=update" method="POST">
    <!--Xuất ra thông tin của lớp gồm: mã, tên, sỉ số từ biến $each tại LopController.php-->
    Mã lớp
    <input name="ma" type="text" value="<?php echo $each -> get_ma()?>">
    <br>
    Tên lớp
    <input name="ten" type="text" value="<?php echo $each -> get_ten()?>">
    <br>
    Sỉ số
    <input name="siso" type="text" value="<?php echo $each -> get_siso()?>">
    <button>Thêm</button>

    <!--Gán giá trị biến $action=update-->
</form>