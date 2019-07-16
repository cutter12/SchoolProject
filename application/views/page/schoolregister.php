<div class="col-lg-9 col-md-9 bg bg-light">
<div class="pt-4 pl-2">
<h3 class="text-center">ระบบสมัครนักเรียน นักศึกษา วษท.ศก.</h3>
<hr>
<div class="jumbotron">
<h5><strong>ขั้นตอนการสมัคร</strong></h5>
<p class="text-primary"><u>ขั้นตอนที่ 1 กรอกข้อมูลผู้สมัคร</u></p>
<p style="text-indent:2em;">กรอกข้อมูลส่วนตัวและคุณสมบัติของผู้สมัครให้ครบถ้วนผ่านระบบสมัครเรียนออนไลน์<br>

</p>

<p class="text-primary mt-1"><u>ขั้นตอนที่ 2 เลือกสาขาที่ต้องการสมัคร</u></p>
<p style="text-indent:2em;">เลือกสถานศึกษาและสาขาที่ต้องการสมัครเข้าศึกษาต่อ โดยผู้สมัครสามารถเลือกได้มากกว่า 1 สถานศึกษา และมากกว่า 1 สาขาวิชา</p>
<p class="text-primary"><u>ขั้นตอนที่ 3 พิมพ์ใบสมัคร</u></p>
<p style='text-indent:2em;'>เมื่อการสมัครผ่านระบบรับสมัครออนไลน์เสร็จสมบูรณ์แล้วให้ผู้สมัคร พิมพ์ใบสมัครและนำไปยื่นที่สถานศึกษาตามที่ตนเองได้สมัครไว้</p>
<p class="text-primary"><u>ขั้นตอนที่ 4 ยื่นใบสมัคร</u></p>
<p style='text-indent:2em;'>เมื่อการสมัครเสร็จสมบูรณ์ให้ผู้สมัคร พิมพ์ใบสมัครและนำไปยื่นที่สถานศึกษาที่ได้สมัครไว้ เพื่อให้เจ้าหน้าที่ยื่นยันการสมัครอีกครั้งหนึ่ง</p>
<h5><strong>หลักฐานที่ใช้ในการสมัคร</strong></h5>
<ol type="1">
<li>บัตรประชาชน <span class="badge badge-danger">สำคัญ</span></li>
<li>ทะเบียนบ้าน <span class="badge badge-danger">สำคัญ</span></li>
<li>ใบรายงานผลการเรียน (Transcript) <span class="badge badge-danger">สำคัญ</span></li>
<li>ใบสมัครพิมพ์ออกจากระบบพร้อมพิมพ์รูปถ่าย <span class="badge badge-danger">สำคัญ</span></li>
</ol>
<p><small class="text-danger">** หมายเหตุ: นักศึกษาที่ไม่สามารถสมัครเรียนผ่านระบบออนไลน์ได้ ให้ติดต่อสถานศึกษาที่ต้องการสมัครด้วยตนเอง</small></p>
<hr>
<div class="text-center">
<button data-toggle="collapse" data-target="#show" class="btn btn-primary btn-lg">สมัครเรียน (ปีการศึกษา 2562/1)</button>
</div>
<div id="show" class=" mt-3"><!-- อย่าลืมใส่ class collapse -->
    <div class="mb-3">
        <!-- ส่วนของฟอร์มการสมัคร -->
        <form action="<?php echo base_url("/maincontroller/student");?>" method="post" id="register_form">
        <h5 class="mt-3">ข้อมูลทั่วไป</h5>
            <div class="form-row">
                <div class="input-group col-md-6">
                    <div class="input-group-prepend">
                    <!-- ข้อมูลนำเข้า รหัสบัตรประจำตัวประชาชน => idcard -->
                        <span class="input-group-text"><small>รหัสบัตรประจำตัวประชาชน</small></span>
                    </div>
                    <input type="text" name="idcard" class="form-control form-control-sm text-center" maxlength="13" size="14" id="idcard_input">
                </div>
                <div class="input-group col-md-6">
                    <div class="input-group-prepend">
                    <!-- ข้อมูลนำเข้า อีเมล => email -->
                        <span class="input-group-text"><small>อีเมล</small></span>
                    </div>
                    <input type="text" class="form-control form-control-sm text-center" maxlength="50" size="50" name="email" id="email_input">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                    <!-- ข้อมูลนำเข้า คำนำหน้าชื่อ => prefix -->
                        <label for="" class="input-group-text"><small>คำนำหน้าชื่อ</small></label>
                    </div>
                    <select name="prefix" id="" class="custom-select">
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                </div>
                <div class="input-group col-md-8">
                    <div class="input-group-prepend">
                    <!-- ข้อมูลนำเข้า ชื่อต้น => fname -->
                        <span class="input-group-text"><small>ชื่อ</small></span>
                    </div>
                    <input type="text" class="form-control form-control-sm text-center" name="fname" id="fname_input">
                </div>
                
                
            </div>
            <div class="form-row mt-2">
            <div class="col-md-4">
                    <!-- ข้อมูลนำเข้า Radiobutton => sex -->
            <span>เพศ:</span> <input type="radio" value="ชาย" name="sex"> <span>ชาย</span>
             <input type="radio" value="female" name="หญิง"> <span>หญิง</span>
               
                    
               
            </div>
            <div class="input-group col-md-8">
                    <div class="input-group-prepend">
                    <!-- ข้อมูลนำเข้า นามสกุล text => lname -->
                        <span class="input-group-text"><small>สกุล</small></span>
                    </div>
                    <input type="text" class="form-control form-control-sm text-center"  name="lname" id="lname_input">
                </div>
            </div>
        <div class="form-row mt-2">
            <div class="input-group col-md-9">
                <div class="input-group-prepend">
                <!-- ข้อมูลนำเข้า ที่อยู่ที่สามารถติดต่อได้ => address -->
                    <span class="input-group-text"><small>ที่อยู่ติดต่อได้</small></span>
                </div>
                <input type="text" name="address_information" class="form-control form-control-sm text-center" id="address_input">
            </div>
            <div class="input-group col-md-3">
                <div class="input-group-prepend">
                <!-- ข้อมูลนำเข้า รหัสไปรษณ๊ย์ => zipcode -->
                    <span class="input-group-text"><small>รหัสไปรษณีย์</small></span>
                </div>
                <input type="text" class="form-control form-control-sm text-center" name="zipcode" maxlength="5">
            </div>
        </div>
        <div class="form-row mt-2">
            <div class=" input-group col-md-4">
                <div class="input-group-prepend">
                <!-- ข้อมูลนำเข้า เบอร์โทรศัพท์มือถือ => phonenumber -->
                    <span class="input-group-text"><small>โทรศัพท์มือถือ</small></span>
                </div>
                <input type="text" class="form-control form-control-sm text-center" maxlength="10" name="phonenumber" id="phone_input">
            </div>
            <div class="col-md-4 input-group">
                <div class="input-group-prepend">
                <!-- ข้อมูลนำเข้า จังหวัดของสถานศึกษาเดิม => school_province -->
                    <span class="input-group-text"><small>จังหวัดของสถานศึกษา</small></span>
                </div>
                <input type="text" class="form-control form-control-sm text-center" name="schoolprovince" size="50" id="student_school_input">
            </div>
            <div class="col-md-4 input-group">
                <div class="input-group-prepend">
                <!-- ข้อมูลนำเข้า ชื่อสถานศึกษา => schoolname -->
                    <span class="input-group-text"><small>ชื่อสถานศึกษา</small></span>
                </div>
                <input type="text" class="form-control form-control-sm" name="school    name" id="schoolname_input">
            </div>
            
            
        </div>
        <hr>
<!-- ---------------------------------------------------- ส่วนของระดับการศึกษา ---------------------------------------------------------------------->
        <h5>เลือกระดับการศึกษาที่ต้องการสมัคร</h5>
        <div class="row text-center">
            <div class="col-sm-4">
            <!-- ข้อมูลนำเข้า ปุ่ม radio ระดับ ปวช => porworchor -->
            <span><strong>ประกาศนียบัตรวิชาชีพ(ปวช.)</strong></span>
            <div class="text-left"><input type="radio" name="porworchor" class="mr-1" value="ปวช.ปกติ">ปวช.(ปกติ)<br>
            <input type="radio" name="porworchor" class="mr-1 " value="ปวช.ทวิภาคี">ระดับ ปวช.(ทวิภาคี)<br>
            <input type="radio" name="porworchor" class="mr-1 " value="ปวช.เทียบโอน">ระดับ ปวช.(เทียบโอน)<br>
            <input type="radio" name="porworchor" class="mr-1 " value="ปวช.อศ.กช.">ระดับ ปวช.(อศ.กช.)</div> 
            </div>
            <!-- ข้อมูลนำเข้า ปุ่ม radio ระดับ ปวส. => porworsor -->
            <div class="col-sm-4"><span><strong>ประกาศนียบัตรวิชาชีพขั้นสูง(ปวส.)</strong></span>
            <div class="text-left">
                <input type="radio" name="porworchor" class="mr-1 " value="ปวส.ปกติ">ระดับ ปวส.(ปกติ)<br>
                <input type="radio" name="porworchor" class="mr-1 " value="ปวส.ทวิภาคี">ระดับ ปวส.(ทวิภาคี)<br>
                <input type="radio" name="porworchor" class="mr-1 " value="ปวส.อศ.กช.">ระดับ ปวส.(อศ.กช.)<br> 
            </div>
            
            </div>
            <!-- ข้อมูลนำเข้า ปุ่ม radio ระดับ ปริญญาตรี => bachelor -->
            <div class="col-sm-4"><span><strong>ปริญญาตรี</strong></span>
            <div class="text-right">
                <input type="radio" name="porworchor" class="mr-1" value="ปริญญาตรี.ทวิภาคี">ระดับ ป.ตรี(ทวิภาคี)<br>
            </div>
            </div>
        </div>

        <div class="text-center mt-3"><input type="submit" value="สมัครเรียน" class="btn btn-primary btn-lg text-center"></div>

        </form>
        <!-- ส่วนท้ายของฟอร์มการสมัคร -->
    </div>
</div>
</div>
</div>
</div>