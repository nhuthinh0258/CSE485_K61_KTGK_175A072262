<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id=$_POST['id'];
    $hoten = $_POST['txtTen'];
    $chucvu= $_POST['txtchucvu'];
    $phongban=$_POST['txtphongban'];
    $luong=$_POST['txtluong'];
    $date=$_POST['txtdate'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','nhanvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE db_nhanvien SET hovaten='$hoten',chucvu='$chucvu',phongban='$phongban',luong='$luong',ngayvaolam='$date' WHERE manv=$id";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: ../admin.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: ../error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>