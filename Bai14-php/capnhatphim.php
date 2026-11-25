<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phim</title>
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
        $sql= "select* from phim where id='$id'";
        $result= mysqli_query($conn, $sql);
        $phim= mysqli_fetch_assoc($result);
    ?>

    <h1>Cập nhật phim</h1>
    <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id;?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenPhim" value="<?php echo $phim['ten_phim']?>" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" value="<?php echo $phim['quoc_gia']?>" id="" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <input type="text" name="idDaoDien" value="<?php echo $phim['dao_dien_id']?>" id="" placeholder="ID đạo diễn">
        </div>
        <div class="i-text">
            <input type="date" name="nam" value="<?php echo $phim['nam']?>" id="" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="text" name="doTuoi" value="<?php echo $phim['do_tuoi']?>" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" value="<?php echo $phim['mo_ta']?>" id="" placeholder="Mô tả">
        </div>
        <button type="submit">Cập nhật</button>
    </form>

     <?php
        if(isset($_POST['tenPhim']) && 
           isset($_POST['quocGia']) && 
           isset($_POST['idDaoDien']) && 
           isset($_POST['nam']) &&
           isset($_POST['doTuoi']) &&
           isset($_POST['moTa']))
        {
            $tenPhim = $_POST['tenPhim'];
            $quocGia = $_POST['quocGia'];
            $idDaoDien = $_POST['idDaoDien'];
            $nam = $_POST['nam'];
            $doTuoi = $_POST['doTuoi'];
            $moTa = $_POST['moTa'];

            if(!empty($tenPhim) && 
                !empty($quocGia) && 
                !empty($idDaoDien) && 
                !empty($nam) &&
                !empty($doTuoi) &&
                !empty($moTa) ){
                //người dùng nhập đủ thông tin

                //vào php cop database
                $sql= "UPDATE `phim` 
                SET`ten_phim`='$tenPhim',
                `quoc_gia`='$quocGia',
                `dao_dien_id`='$idDaoDien',
                `nam`='$nam',
                `do_tuoi`='$doTuoi',
                `mo_ta`='$moTa'
                WHERE id='$id'";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=phim");
                }else{
                    echo"Thêm phim thất bại!";
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