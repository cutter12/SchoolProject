<div class="col-lg-3 col-md-3 bg bg-light d-flex flex-column">
    <div class="pt-4">
        <div class="p-1"><span class="title">มุมผู้บริหาร</span><span class="back-line"></span></div>
        <div class="p-1 text-sm-center text-center"><img src="<?php echo base_url('image/aran_pic.png');?>" alt="" class="img-fluid"></div>
        <div class="p-1"><span class="title">ฝากข้อความ</span><span class="back-line"></span></div>
        <div class="p-1">
            <form action="<?php echo base_url('maincontroller/showdata');?>" method="post">
            <div class="form-group">
                <label for="fullname">ชื่อ - สกุล</label>
                <input type="text" class="form-control form-control-sm" name="fullname" id="fullname">
            </div>
            <div class="form-group">
                <label for="email">ใส่อีเมล (จำเป็น)</label>
                <input type="text" class="form-control form-control-sm" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="header">หัวข้อ</label>
                <input type="text" class="form-control form-control-sm" name="header" id="header">
            </div>
            <div class="form-group">
                <label for="message">ข้อความ</label>
                <textarea name="message" id="message" cols="4" rows="7" class="form-control form-control-sm"></textarea>
            </div>
            <input type="submit" value="ส่งข้อความ" id="input1">
            </form>
        </div>
        <div class="p-1"><span class="title">Online Service</span><span class="back-line"></span></div>
    </div>
</div>
</div>
<footer>
    <div class="jumbo">
        วิทยาลัยเกษตรและเทคโนโลยีศรีสะเกษ <br>
        Sisaket College of Agriculture and Technology<br>
        Develop By Teichit Seehawong : Trainee Teacher
    </div>
</footer>
</div> <!-- end of container tag -->
</body>
</html>