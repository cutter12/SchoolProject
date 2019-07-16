<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="<?php echo base_url('jquery/app.js');?>"></script>
    <title><?php echo $title;?></title>
</head>
<body id="bgg">
    <div class="container pt-2">
    <div class="row ">
    <div class="col-lg-12">
    <a href="#"><img src="<?php echo base_url('image/banner.png');?>" class="img-fluid" alt=""></a>
    </div>
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark pr-0 pt-0 pb-0 sticky-top">
        <!---- below this line is NAVBAR BRAND (LOGO) -->
        <a href="<?php echo base_url();?>" class="navbar-brand text-white pl-2 pr-2 pt-2" id="a-nav-background-color">
        <!-- --- end of navbar brand ------------------->
        <i class="fas fa-home" style="font-size:24px; "></i>
        </a>
        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#demo">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse p-0" id="demo">
            <ul class="navbar-nav border border-dark">
                

                
                <li class="nav-item pr-2">
                <div class="dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle" id="menu1" data-toggle="dropdown"><i class="fas fa-university"></i><span class="font">&nbspเกี่ยวกับโรงเรียน</span></a>
                <div class="dropdown-menu dropmenu1 bg bg-dark pt-0 pb-0">
                    <a href="<?php echo base_url('/schooldata');?>" class="dropdown-item">ข้อมูลทั่วไป</a>
                    <a href="<?php echo base_url('/schoolhistory');?>" class="dropdown-item font">ประวัติโรงเรียน</a>
                    <a href="#" class="dropdown-item font">วิสัยทัศน์ พันธกิจ</a>
                    <a href="<?php echo base_url('/schoolmanager');?>" class="dropdown-item font">ทำเนียบผู้บริหาร</a>
                    <a href="#" class="dropdown-item font">โครงสร้างการบริหารงาน</a>
                    <a href="#" class="dropdown-item font">คณะกรรมการสถานศึกษาฯ</a>
                    <a href="#" class="dropdown-item font">เครือข่ายผู้ปกครองฯ</a>
                    <a href="#" class="dropdown-item font">เครื่องแบบนักเรียน</a>
                </div>
                </div>
                </li>
                

                <li class="nav-item pr-2">
                <div class="dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle" id="menu2" data-toggle="dropdown"><i class='far fa-chart-bar'></i><span class="font">&nbspข้อมุลสารสนเทศ</span></a>
                <div class="dropdown-menu dropmenu2 bg bg-dark">
                    <a href="#" class="dropdown-item font">ผู้บริหารโรงเรียน</a>
                    <a href="#" class="dropdown-item font">ข้อมูลบุคลากร</a>
                    <a href="#" class="dropdown-item font">ข้อมูลนักเรียน</a>
                    <a href="#" class="dropdown-item font">คะแนน O-Net</a>
                    <a href="#" class="dropdown-item font">ข้อมูลอาคารสถานที่</a>
                    <a href="#" class="dropdown-item font">แผนที่การเดินทาง</a>
                </div>
                </div>
                </li>

                <li class="nav-item pr-2">
                <div class="dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle" id="menu3" data-toggle="dropdown"><i class="fas fa-bullhorn"></i><span class="font">&nbspข่าวประชาสัมพันธ์</span></a>
                <div class="dropdown-menu dropmenu3 bg bg-dark">
                    <a href="#" class="dropdown-item font">กิจกรรมโรงเรียน</a>
                    <a href="#" class="dropdown-item font">ประกาศข่าวทั่วไป</a>
                    <a href="#" class="dropdown-item font">ประกาศจัดซื้อจัดจ้าง</a>
                    <a href="#" class="dropdown-item font">ประกาศข่าวรับสมัคร</a>
                    <a href="#" class="dropdown-item font">ผลงานทางวิชาการ</a>
                    <a href="#" class="dropdown-item font">เอกสารเผยแพร่</a>
                </div>
                </div>
                </li>

                <li class="nav-item pr-2">
                <div class="dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle" id="menu4" data-toggle="dropdown"><i class="fas fa-fist-raised"></i><span class="font">&nbspเกียรติประวัติ</span></a>
                <div class="dropdown-menu dropmenu4 bg bg-dark">
                    <a href="#" class="dropdown-item font">เกียรติประวัติและผลงาน</a>
                    <a href="#" class="dropdown-item font">ผลงานนักเรียน</a>
                </div>
                </div>
                </li>

                <li class="nav-item pr-2">
                <div class="dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle" id="menu5" data-toggle="dropdown"><i class="fas fa-fist-raised"></i><span class="font">&nbspอัลบั้มภาพ&วีดีโอ</span></a>
                <div class="dropdown-menu dropmenu5 bg bg-dark">
                    <a href="#" class="dropdown-item font">อัลบั้มภาพ</a>
                    <a href="#" class="dropdown-item font">อัลบั้มวีดีโอ</a>
                </div>
                </div>
                </li>
                <li class="nav-item pr-2"><a href="<?php echo base_url('maincontroller/admin');?>" class="nav-link text-white"><i class="fas fa-comments"></i><span class="font">&nbspติดต่อผู้ดูและระบบ</span></a></li>
            </ul>
        </div>
    
    </nav> <!-- end of navbar tag -->
</div>
</div>
<div class="row m-auto">
    


        
        
            
        
   

