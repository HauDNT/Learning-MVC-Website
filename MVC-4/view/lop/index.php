<a href="?action=create">
    Thêm
</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sỉ số</th>
        <th>Lớp - Sỉ số</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($array as $each): ?>
        <tr align="center">
            <td>
                <?php echo $each -> get_ma() ?>
            </td>
            <td>
                <?php echo $each -> get_ten() ?>
            </td>
            <td>
                <?php echo $each -> get_siso() ?>
            </td>
            <td>
                <?php echo $each -> get_siso_lop() ?>
            </td>
            <td>
                <a href="?action=edit&ma=<?php echo $each -> get_ma() ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each -> get_ma() ?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



