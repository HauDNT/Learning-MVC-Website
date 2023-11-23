<form action="?action=update&controller=phong" method="POST">
    Mã phòng
    <input type="text" name="ma" value="<?php echo $each['ma']?>">
    Tên phòng
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <button>Sửa</button>
</form>