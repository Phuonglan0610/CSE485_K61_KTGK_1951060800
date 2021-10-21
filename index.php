<?php
   include('admin_template/header.php');
?>
<div class="d-flex justify-content-center">
    <h1 class="">Người nhận máu</h1>
</div>
<div class="container mt-5">
        <a class='btn text-light ' style='background-color: #20c997;' href="add.php"> Thêm người nhận </a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Tuổi</th>
        <th scope="col">Nhóm máu</th>
        <th scope="col">Lượng máu yêu cầu</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Ngày yêu cầu</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">sửa</th>
        <th scope="col">xóa</th>
        
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from blood_recipient";
            $res = mysqli_query($conn, $sql);
            $i = 0;
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $i++;
                    $name = $row['reci_name'];
                    $age = $row['reci_age'];
                    $bgrp = $row['reci_bgrp'];
                    $bqnty = $row['reci_bqnty'];
                    $sex = $row['reci_sex'];
                    $date = $row['reci_reg_date'];
                    $phno = $row['reci_phno'];?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $age ?></td>
                        <td><?php echo $bgrp ?></td>
                        <td><?php echo $bqnty ?></td>
                        <td><?php echo $sex ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $phno ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
    </table>
</div>

<?php
   include('admin_template/footer.php');
?>