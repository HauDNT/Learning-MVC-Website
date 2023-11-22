<h1>DANH SÁCH SINH VIÊN</h1>

<a href="?action=insert">Thêm sinh viên mới</a>
<table border="1" width="100%">
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr align="center">
            <td>
                <?php echo $each['ma'] ?>
            </td>
            <td>
                <?php echo $each['ten'] ?>
            </td>
            <td>
                <a href="?action=edit&ma=<?php echo $each['ma']?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each['ma']?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>