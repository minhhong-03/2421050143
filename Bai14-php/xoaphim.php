<?php
    $id= $_GET['id'];
    $sql="DELETE FROM `phim` WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php?page_layout=phim");
?>