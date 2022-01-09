
<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nhanvien = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','nhanvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_nhanvien WHERE manv = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
<?php
include("../view/template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Sửa</h5>
        <div>
        <form action="../model/process-update.php" method="POST">
            <div class="form-group">
                <label for="txtid" class="form-label">ID</label>
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['manv']; ?>">
                <?php echo $row['manv']; ?>
            </div>
            <div class="form-group">
                <label for="txtTen" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="txtTen" id="txtTen" value="<?php echo $row['hovaten']; ?>">
            </div>
            <div class="form-group">
                <label for="txtchucvu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" name="txtchucvu" id="txtchucvu" value="<?php echo $row['chucvu']; ?>">
            </div>
            <div class="form-group">
                <label for="txtphongban" class="form-label">Phòng ban</label>
                <input type="text" class="form-control" name="txtphongban" id="txtphongban" value="<?php echo $row['phongban']; ?>">
            </div>
            <div class="form-group">
                <label for="txtdidong" class="form-label">Lương</label>
                <input type="text" class="form-control" name="txtluong" id="txtluong"  value="<?php echo $row['luong']; ?>">
            </div>
            <div class="form-group">
                <label for="txtdate" class="form-label">Ngày vào làm</label>
                <input type="text" class="form-control" name="txtdate" id="txtdate" value="<?php echo $row['ngayvaolam']; ?>">
            </div>
                    <?php
                              
                            $ma_nhanvien = $_GET['id'];

                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost','root','','nhanvien');
                            if(!$conn){
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "SELECT * FROM db_nhanvien";
                            // Bước 03: Đóng kết nối
                            mysqli_close($conn);
                    ?>
                </select>
            <button type="submit" class="btn btn-primary mt-3">Sửa</button>
            </form>
        </div>
    </div>    
    </main>

<?php
include("../view/template/footer.php");
?>