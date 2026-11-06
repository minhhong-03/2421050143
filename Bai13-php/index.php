<?php
    // Nội dung php đặt ở vị trí này
    echo "Hello World! <br>"; // in ra màn hình dùng echo
    // Biến: $Tên biến = giá trị;
    $hoTen = "Lê Thị Minh Hồng";
    $tuoi = 20;
    // nối chuỗi trong php dùng dấu .
    echo $hoTen . " " . $tuoi . "<br> ";

    // Trả về độ dài chuỗi: strlen()

    echo strlen ($hoTen) . "<br>";
    // Đếm số từ: str_word_count()
    echo str_word_count($hoTen)."<br>";

    // Tìm kiếm kí tự trong chuỗi: strpos()
    echo strpos($hoTen, "n"). "<br>";

    // Thay thế kí tự trong chuỗi
    echo str_replace ("Minh", "Ánh", $hoTen) ."<br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    // Cộng 
    echo $soThuNhat + $soThuHai . "<br>";

    // Trừ
    echo $soThuNhat - $soThuHai . "<br>";

    // Nhân
    echo $soThuNhat * $soThuHai . "<br>";

    // Chia
    echo $soThuNhat / $soThuHai . "<br>";

    // Toán tử gán
    # += -= *= /= %=
    $soThuNhat += $soThuHai ;
    echo $soThuNhat . "<br>";

    // Toán tử so sánh: ==, !=, >, < >=, <=, ===
    echo $soThuNhat ==  $soThuHai . "<br>";

    // Câu điều kiện
    // if ("Điều kiện"){
    //     logic
    // }
    // elseif("Điều kiện"){
    //     logic
    // } else{
    //     logic
    // }

    // Kiểm tra tổng của số thứ nhất và số thứ hai 
    // (nếu < 15 thì in ra nhỏ hơn 15)
    // (nếu > 15 thì in ra tổng = 15)
    // còn lại in ra lớn hơn 15
    $tong = $soThuNhat + $soThuHai ;
    if( $tong < 15 ){
        echo "Nhỏ hơn 15 <br>";
    } elseif( $tong == 15){
        echo " Tổng = 15 <br>";
    } else{
        echo "Lớn hơn 15 <br>";
    } 
    // Switch case
    $color = "red";
    switch ($color){
        case "red":
           
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
            break;
        default: 
        echo "<br>";
        echo "no color";
        break;
    }

    // for
    for ( $i = 0; $i < 100 ; $i++){
        echo $i . "<br>";
    }

    // Mảng
    $mang = ["Anh", "Nhật Anh", "Vu Anh"];
    // Đếm phần tử
    echo count ($mang) . "<br>";
    echo $mang[1] . "<br>";


    $mang[] = "Phương Ngân";
    print_r($mang);

    echo "<br>";
    unset($mang[3]);
    print_r ($mang);

   
?>