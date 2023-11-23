<form action="?action=store&controller=phong" method="POST">
    Tên phòng
    <input type="text" name="ten"">
    <button>Thêm</button>
</form>
<!--Tại đây ta chưa thực hiện chức năng thêm mà chỉ lưu thông tin mới-->
<!--Sau khi kết thúc thao tác tại form này. Ta gán giá trị 'store' vào biến $action-->
<!--rồi nhảy vào case 'store' ở controller/phong.php để thêm thông tin vào bảng-->

