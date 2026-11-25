<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật danh mục</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $sql= "select* from the_loai where id='$id'";
        $result= mysqli_query($conn, $sql);
        $theloai= mysqli_fetch_assoc($result);
    ?>

    <h1>Cập nhật danh mục</h1>
    <form class="khoi" action="index.php?page_layout=capnhatdanhmuc&id=<?php echo $id;?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenTheLoai" value="<?php echo $theloai['ten_the_loai']?>" id="" placeholder="Tên thể loại">
        </div>
        <button type="submit">Cập nhật</button>
    </form>

    <?php
        if(isset($_POST['tenTheLoai']))
        {
            $tenTheLoai = $_POST['tenTheLoai'];

            if(!empty($tenTheLoai)){
                //người dùng nhập đủ thông tin

                //vào php cop database
                $sql= "UPDATE `the_loai` 
                SET`ten_the_loai`='$tenTheLoai'
                WHERE id='$id'";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=danhmuc");
                }else{
                    echo"Thêm danh mục thất bại!";
                }

            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
    ?>
</body>
</html>