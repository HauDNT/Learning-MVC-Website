<h1>Danh sách sinh viên</h1>

<a href="?action=create">
    Thêm sinh viên mới
</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr align="center">
            <td>
                <?php echo $each['ma']?>
            </td>
            <td>
                <?php echo $each['ten']?>
            </td>
            <td>
                <button>
                    <a href="?action=edit&ma=<?php echo $each['ma']?>">
                        Sửa
                    </a>
                </button>
            </td>
            <td>
                <button>
                    <a href="?action=delete&ma=<?php echo $each['ma']?>">
                        Xóa
                    </a>
                </button>
            </td>
        </tr>
    <?php } ?>
</table>