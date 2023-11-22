<form action="?action=update&controller=lop" method="post">
    Mã lớp
    <input type="hidden" name="ma" value="<?php echo $each['ma']?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <button>Sửa</button>
</form>