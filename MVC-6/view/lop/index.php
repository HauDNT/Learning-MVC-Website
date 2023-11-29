<a href="index.php">
    Trở về
</a>
<br>
<a href="?action=create">
    Thêm thông tin lớp mới
</a>

<table width="100%" border="1">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Sỉ số</th>
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
                <?php echo $each->get_siso() ?>
            </td>
            <td>
                <a href="?action=edit&ma=<?php echo $each -> get_ma()?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each -> get_ma()?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
