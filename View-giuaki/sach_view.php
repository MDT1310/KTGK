<?php
include_once "sach.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sách</title>
</head>
<body>
    <h2>Danh sách sách</h2>
    <table border="1">
        <tr>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Số lượng</th>
        </tr>
        <?php 
        // if(isset($layDanhSachSach) && is_array($danhSachSach)) {
            foreach ($controller->model->layDanhSachSach() as $sach): 
        ?>
        <tr>
            <td><?php echo $sach['masach']; ?></td>
            <td><?php echo $sach['tensach']; ?></td>
            <td><?php echo $sach['soluong']; ?></td>
        </tr>
        <?php endforeach; 
        // } else {
        //     echo "<tr><td colspan='3'>Không có dữ liệu sách.</td></tr>";
        // }
        ?>
    </table>
</body>
</html>
