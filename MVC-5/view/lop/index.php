<a href="?action=create">
    Thêm
</a>
<table width="100%" border="1">
    <tr>
        <th>Mã</th>
        <th>Tên- Sỉ số</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($array as $each):?>
        <tr align="center">
            <td> <?php echo $each -> get_ma()?></td>
            <td> <?php echo $each -> get_lop_siso()?></td>
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