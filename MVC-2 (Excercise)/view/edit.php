<form method="POST" action="?action=update">
    Mã sinh viên:
    <input type="hidden" name="ma" value="<?php echo $each['ma'] ?>">
    Họ và tên:
    <input type="text" name="ten" value="<?php echo $each['ten'] ?>">
    <button>Sửa</button>
</form>