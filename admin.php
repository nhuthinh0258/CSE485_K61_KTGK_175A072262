<?php

require("view/template/header.php");
?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH NHÂN VIÊN</h5>
        <div>
            <a href="controller/add_employee.php" class="btn btn-primary">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Phòng ban</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Ngày vào làm</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','nhanvien');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM db_nhanvien";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['manv']; ?></th>
                                <td><?php echo $row['hovaten']; ?></td>
                                <td><?php echo $row['chucvu']; ?></td>
                                <td><?php echo $row['phongban']; ?></td>
                                <td><?php echo $row['luong']; ?></td>
                                <td><?php echo $row['ngayvaolam']; ?></td>
                                <td><a href="../KTGK/controller/update_employee.php?id=<?php echo $row['manv']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="../KTGK/controller/delete_employee.php?id=<?php echo $row['manv']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                    // Bước 04: Đóng kết nối Database Server
                    mysqli_close($conn);
                ?>
                
                
            </tbody>
            </table>
    </div>    
</main>

<?php
require("view/template/footer.php");
?>