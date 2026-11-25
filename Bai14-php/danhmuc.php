<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn-add{
            display: block;
            width: 120px;
            background-color: pink;
            color: white;
            padding: 10px 15px;;
            margin-bottom: 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        table{
            width: auto;
            margin-top: 15px;
        }
        tr, th, td{
            border: 1px solid black;
            padding: 8px;
        }
        .capnhat{
            width: 100%;
            border-radius: 5px;
            background-color: green;
        }
        .xoa{
            border-radius: 5px;
            background-color: red;
        }
    </style>
</head>

<body>
    <h1>Danh mục</h1>
    <div>
        <a class="btn-add" href="index.php?page_layout=themdanhmuc">Thêm danh mục</a>
    </div>
    <?php
        $sql = "select * from the_loai";
        $result = mysqli_query($conn, $sql);
    ?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên thể loại</th>
                <th>Chức năng</th>
            </tr>

            <?php
                while($row= mysqli_fetch_assoc($result))
                {
            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['ten_the_loai']?></td>
                <td>
                    <a class="capnhat" href="index.php?page_layout=capnhatdanhmuc&id=<?php echo $row['id']?>">Cập nhật</a>
                    <a class="xoa" href="index.php?page_layout=xoadanhmuc&id=<?php echo $row['id']?>">Xóa</a>
                </td>
            </tr>
            
            <?php
            
                }
            ?>
        </table>
    </div>
</body>
</html>