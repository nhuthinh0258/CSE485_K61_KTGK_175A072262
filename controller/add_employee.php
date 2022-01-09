<?php
include("../view/template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm nhân viên</h5>
        <div>
        <form action="../model/process-add.php" method="POST">
            <div class="mb-3">
                <label for="txtTen" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="txtTen" id="txtTen">
            </div>
            <div class="mb-3">
                <label for="txtchucvu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" name="txtchucvu" id="txtchucvu">
            </div>
            <div class="mb-3">
                <label for="txtsomayban" class="form-label">Phòng ban</label>
                <input type="text" class="form-control" name="txtphongban" id="txtphongban">
            </div>
            <div class="mb-3">
                <label for="txtdidong" class="form-label">Lương</label>
                <input type="text" class="form-control" name="txtluong" id="txtluong">
            </div>
            <div class="mb-3">
                <label for="txtemail" class="form-label">Ngày vào làm</label>
                <input type="text" class="form-control" name="txtdate" id="txtdate">
            </div>
                    <?php
                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost','root','','nhanvien');
                            if(!$conn){
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "SELECT * FROM db_nhanvien";

                            $result = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){
                    ?>
                                    <option value="<?php echo $row['manv']; ?>"></option>
                    <?php
                                }
                            }
                            // Bước 03: Đóng kết nối
                            mysqli_close($conn);
                    ?>
                </select>
            <button type="submit" class="btn btn-primary mt-3">Thêm</button>
            </form>
        </div>
    </div>    
    </main>

<?php
include("../view/template/footer.php");
?>