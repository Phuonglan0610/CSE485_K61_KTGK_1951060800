<?php
include('admin_template/header.php');
?>

<div class="main-content">
    <div class="wrapper">
        <div class="alert alert-success text-center" role="alert">
            <h2>Thêm người nhận</h2>
        </div>

  <!-- sửa -->
        <div class="container col-md-12 mx-auto">
            <form action="process-add.php" METHOD="POST">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Họ và tên</span>
                        <input type="text" class="form-control" name= "txthoten" placeholder="Nhập họ và tên">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3" >Tuổi</span>
                        <input type="text" class="form-control" name= "txttuoi" placeholder="Nhập tuổi ">
                    </div>
                    
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3" >Nhóm máu</span>
                        <input type="text" class="form-control" name= "txtmayban" placeholder="Nhóm máu">
                    </div>

                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Lượng máu yêu cầu</span>
                        <input type="email" class="form-control" name="txtluongmauyeucau" placeholder="Nhập Lượng máu yêu cầu" >      
                    </div>

                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >giới tính</span>
                        <input type="tel" class="form-control" name="gioitinh" placeholder="Nhập giới tính">             
                    </div>
                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Ngày yêu cầu</span>
                        <input type="tel" class="form-control" name="ngayyeucau" placeholder="Nhập ngày yêu cầu">             
                    </div>
                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Số điện thoại</span>
                        <input type="tel" class="form-control" name="sodidong" placeholder="Nhập số điện thoại">             
                    </div>

                    <div class="input-group mb-2 ">
                        <label class="input-group-text col-3" for="inputGroupSelect01">Tên Đơn Vị</label>
                        <select class="form-select form-select-sm" name="sltMaDV" id="sltMaDV">
                        <?php
                                
                            //kết nối server
                            require('../config/constants.php');

                            //đóng kết nối
                            mysqli_close($conn);
                        ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info" name="submit">Thêm</button>
     
                </div>
            </form>
                      
        </div>        
    </div>
</div>
<?php
    include('admin_template/footer.php');
?>