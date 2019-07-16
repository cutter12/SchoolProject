<div class="col-lg-9 col-md-9 bg bg-light">
<div class="pt-4 pl-2">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-4 col-md-8 col-sm-8 col-10 border border-primary rounded-lg p-2 text-center">
        <p class="text-center" >เข้าสู่ระบบสำหรับ Admin</p>
        
        <form action="<?php echo base_url('maincontroller/formcheck');?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control text-center" value="<?php echo set_value('username');?>" placeholder="ชื่อผู้ใช้" name="username" id="username">
            <span id="error_user">** กรุณากรอกชื่อผู้ใช้ **</span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control text-center" value="<?php echo set_value('password');?>" placeholder="รหัสผ่าน" name="password" id="password">
            <span id="error_pass">** กรุณากรอกรหัสผ่าน **</span>
            <?php echo form_error("password","<div style='font-size:10px;color:red;'>","</div>");?>
        </div>
        <input type="submit" class="btn btn-primary" value="เข้าสู่ระบบ" id="submit_btn">
        <input type="reset" class="btn btn-primary" id="text-clear" value="ล้างข้อความ">
        </form>
        </div>
        <div class="col"></div>
    </div>
    
    
<br>
    <div class="jumbotron">
        <h1>ติดต่อผู้ดูแลระบบ</h1>
        <div>นายเตชิต สีหะวงษ์</div>
        <div>ตำแหน่ง : ผู้พัฒนาเว็บไซต์</div>
        <div>วิทยาลัยเกษตรและเทคโนโลยีศรีสะเกษ</div>
        <div>อีเมล : <a href="#">teichit.seehawong@gmail.com</a></div>
    </div>
</div>
</div>
