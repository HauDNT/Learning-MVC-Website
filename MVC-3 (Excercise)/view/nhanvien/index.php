<h1>DANH SÁCH NHÂN VIÊN</h1>

<a href="?controller=nhanvien&action=insert">
    Thêm nhân viên mới
</a>

<table width="100%" border="1">
    <tr>
        <th>Mã nhân viên</th>
        <th>Họ tên nhân viên</th>
        <th>Tên phòng</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr align="center">
            <td> <?php echo $each['manv'] ?> </td>
            <td> <?php echo $each['tennv'] ?> </td>
            <td> <?php echo $each['tenphong'] ?> </td>
            <td>
                <a href="?controller=nhanvien&action=edit&ma=<?php echo $each['manv']?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?controller=nhanvien&action=delete&ma=<?php echo $each['manv']?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>



