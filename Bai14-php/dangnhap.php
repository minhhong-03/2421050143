<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 200px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        input{
            padding: 5px 0;
            margin: 10px 0;
        }
        button{
            padding: 5px 0;
            
        }
        .form{
            padding 10px 0;

        }
        h1{
            margin: 5px 0;
        }
    </style>

</head>
<body>
    <div class="khoi">
        <!--<div class = "" ></div>-->
        <div style ="width: 80%; margin: auto; text-align: center " class ="">
            <h1> Đăng nhập</h1>
            <form action ="dangnhap.php" method="POST">
                <div class="">
                    <input type ="text" name ="tenDangNhap" id="" placeholder="Tên đăng nhâp">
                </div>
                <div class="">
                    <input type ="password" name ="matKhau" id="" placeholder="Mật khẩu">
                </div>
                <div class="">
                    <button type="submit">Đăng nhập </button>
                </div>
            </form>

        </div>
    </div>
   <?php
        // echo $_POST['tenDangNhap'];
        // echo $_POST['matKhau'];
        if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau']) ){
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            if($tenDangNhap == "admin" && $matKhau == "123"){
                session_start();
                $_SESSION['dangnhap'] = "thanhcong";
                header("Location: trangchu.php");
            }else{
                echo "Tên đăng nhập hoặc mât khẩu ko chính xác";
            }
        }
    ?>


                                
</body>
</html>