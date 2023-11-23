<h1>DANH SÁCH CÁC PHÒNG BAN CÔNG TY</h1>

<a href="?controller=phong&action=insert">Thêm phòng ban mới</a>
<!-- Click chọn 'Thêm phòng ban mới' ta sẽ có giá trị của $controller=phong và $action=insert-->
<!-- Quay về controller/phong.php để nhảy vào case 'insert' để tiến hành điều hướng thao tác thêm-->

<table width="100%" border="1">
    <tr>
        <th>Mã phòng</th>
        <th>Tên phòng</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <!--Lấy kết quả từ biến $result ở controller/phong.php đưa vào vòng foreach để in ra giá trị từng cột-->
    <?php foreach ($result as $each) {?>
    <tr align="center">
        <td>
            <?php echo $each['ma'] ?>
        </td>
        <td>
            <?php echo $each['ten'] ?>
        </td>
        <td>
            <a href="?action=edit&controller=phong&ma=<?php echo $each['ma'] ?>">
                Sửa
            </a>
            <!-- Khi ta ấn vào nút sửa, giá trị của $action = edit và $controller = phong -->
            <!-- Sau khi click, ta quay lại controller/phong.php để nhảy vào case 'edit' để tiếp tục -->
            <!-- thao tác chỉnh sửa thông tin -->
        </td>
        <td>
            <a href="?action=delete&controller=phong&ma=<?php echo $each['ma'] ?>">
                Xóa
            </a>
            <!-- Khi ta ấn vào nút xóa, giá trị của $action = edit và $controller = phong -->
            <!-- Sau khi click, ta quay lại controller/phong.php để nhảy vào case 'delete' để tiếp tục -->
            <!-- thao tác xóa thông tin -->
        </td>
    <?php } ?>
    </tr>
</table>