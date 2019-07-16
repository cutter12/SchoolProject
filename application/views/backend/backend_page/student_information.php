<div class="container">
    <div class="row">
        <div class="col">
            <form action="#" method="post">
                <div class="form-row mt-1">
                    <div class="col-md-4">
                        <label for="idcard">รหัสบัตรประชาชน</label>
                        <input type="text" name="idcard" value="<?php echo $information->idcard;?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="fname">ชื่อ</label>
                        <input type="text" value="<?php echo $information->fname;?>" class="form-control" >
                    </div>
                    <div class="col-md-4">
                        <label for="lname">นามสกุล</label>
                        <input type="text" value="<?php echo $information->lname;?>" class="form-control">
                    </div>
                </div>
                <div class="form-row mt-1">
                    <div class="col-md-4">
                        <label for="sex">เพศ</label>
                        <input type="text" name="sex" value="<?php echo $information->sex;?>" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="phonenumber">โทร</label>
                        <input type="text" class="form-control" value="<?php echo $information->phonenumber1;?>" name="phonenumber">
                    </div>
                    <div class="col-md-5">
                        <label for="address_information">ที่อยู่</label>
                        <input type="text" class="form-control" name="address_information" value="<?php echo $information->address_information;?>">
                    </div>
                </div>
                <div class="form-row mt-1">
                    <div class="col-md-4">
                        <label for="branch_name">สาขาวิชาที่เลือกเรียน</label>
                        <input type="text" value="<?php echo $information->branch_name;?>" class="form-control">
                    </div>
                </div>
                <div class="text-center mt-3"><a href="<?php echo base_url('maincontroller/admin_backend');?>" class="btn btn-danger">กลับ</a>
                <input type="submit" value="บันทึก" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</div>