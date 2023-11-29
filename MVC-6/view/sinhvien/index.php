<a href="index.php">
    Trở về
</a>
<br>
<a href="?action=create&controller=sinh_vien">
    Thêm thông tin sinh viên mới
</a>

<table width="100%" border="1">
    <tr>
        <th>Mã sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    <?php foreach ($array as $each): ?>
        <tr align="center">
            <td>
                <?php echo $each->get_ma() ?>
            </td>
            <td>
                <?php echo $each->get_ten() ?>
            </td>
            <td>
                <?php echo $each->get_tenlop() ?>
            </td>
            <td>
                <a href="?action=edit&controller=sinh_vien&ma=<?php echo $each -> get_ma()?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&controller=sinh_vien&ma=<?php echo $each -> get_ma()?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
