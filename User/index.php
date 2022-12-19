<?php
  session_start();

  include("../Datebase/Connection.php");
  $ob=new Datebase();



?>


<!doctype html>


<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="image/FPI.png">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/meanmenu.css">

    <title>Feni Polytectnic institute</title>
  </head>
  <body style="background-image:url(image/White_Background-01.jpg);">

<form method="POST" enctype="multipart/form-data">
    <div class="container">
     <div class="col-sm-12 col-12 main_div">

       <div class="container top_div">
      
       <div class="row">
        <div class="col-lg-6 col-md-6  col-sm-6 text-sm-left text-center col-12 top" >
         <a href="index.php?school_project=job_placement" class="btn" id="btn_1">Job Placement</a>
         <a href="index.php?school_project=attached_cv" class="btn" id="btn_2">Attached CV</a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 text-sm-right text-center col-12   top"  style="background-color:#683091; ">
         <label class="top_right">
          <a href="">
           <img src="image/uk_f.png" class="img-fluid top_img" >&nbsp;English
          </a>
         </label>
         <label class="top_right_1">
          <a href="">
           <img src="image/ban_f.png" class="img-fluid top_img">&nbsp;বাংলা
          </a>
         </label>
        </div>
       </div>
  
       </div>



       <div class="container">
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12 slider_div  hovereffect">

           <div class=" col-lg-12 col-sm-12 col-md-12 col-12 d-sm-block d-none slider_top_div">
            <div class="slider_top_image">
             <img src="image/FPI.png" class="img_fluid">
            </div>
            <div  class="slider_top_text">
             &nbsp;&nbsp;&nbsp;<span>Feni Polytechnic Institute </span><br>
             <span style="margin-left:20px;">Established - 1964</span>
            </div>
           </div>

          <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel" style="margin-top:">
           <div class="carousel-inner">
            <div class="carousel-item slider_img active ">
             <img class="img-fluid slider" src="image/010621_06_15_12.jpg" alt="First slide">
            </div>
            <div class="carousel-item  slider_img">
             <img class="img-fluid slider" src="image/010621_06_59_11.jpg" alt="Second slide">
            </div>
           </div>
          </div>

          
         </div>
        </div>
       </div>
 
       <div class="container">
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#fff;">

          <div class="navbar-area" style="background-color:#fff;">
           <div class="mobile-nav " style="background-color:#fff;">
            <a href="#" class="logo">Select the menu</a>
           </div>

           <div class="main-nav" style="padding:0px; background-color:#fff;">
            <div class="container" style=" padding:0px;">
             <nav class="navbar navbar-expand-md bg-white" style=" padding:0px;">
             <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav" >
    
               <li class="nav-item " id="nav_item_li" >
                <a href="index.php?school_project=home" class="nav-link" id="nav_item"><i class="fa fa-home" style="font-size:20px;"></i></a>
               </li>

               <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">About Us</a>
               <ul class="dropdown-menu" id="dropdown_ul" style="min-width:800px; max-width:100%;">
                <div class="row">
                 <div class="col-md-4 col-12">
                  <li class="nav-item">
                   <a href="index.php?school_project=Historys" class="nav-link">HISTORY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Mission" class="nav-link">MISSION</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=vision" class="nav-link">VISION</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Posion" class="nav-link">POSITION</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Structure" class="nav-link">INSTITUTE STRUCTURE</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=orgaogram" class="nav-link">ORGANOGRAM</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=contuct" class="nav-link">CONTACT US</a>
                  </li>
                 </div>
                 <div class="col-md-4 col-12">
                  <li class="nav-item">
                   <a href="index.php?school_project=Principle_info" class="nav-link">ABOUT PRINCIPAL</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Vice_Principle_info" class="nav-link">ABOUT VICE-PRINCIPAL</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Previous_Principle_info" class="nav-link">EX-PRINCIPAL</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=teacher_info" class="nav-link">TEACHER INFORMATION</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=staff_info" class="nav-link">STAFF INFORMATION</a>
                  </li>
                  <li class="nav-item">
                   
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Citizencharter" class="nav-link">CITIZEN CHARTER</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Pocul_point" class="nav-link">LIST OF FOCAL POINTS</a>
                  </li>
                 </div>
                 <div class="col-md-4 col-12">
                 </div>
                </div>
       
                
               </ul>
          
              </li>

              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">DEPERTMENTS</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">COMPUTER TECNOLOGY</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Comt" class="nav-link">ABOUT OF COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=cmt_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>


                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">CIVIL TECNOLOGY</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Civil" class="nav-link">ABOUT OF CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=ct_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>


                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">POWER TECNOLOGY</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Power" class="nav-link">ABOUT OF POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=pt_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">ELECTRICAL TECNOLOGY</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=elect" class="nav-link">ABOUT OF ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=et_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>


                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">MECHANICAL TECNOLOGY</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=mech" class="nav-link">ABOUT OF MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=mt_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>


                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">AIDT</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=aidt" class="nav-link">ABOUT OF AIDT</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=aidt_head" class="nav-link">ABOUT OF DEPERTMENT HEAD</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_tech_info" class="nav-link">TEACHER'S INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Dept_staff" class="nav-link">STAFF INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_info" class="nav-link">STUDENT INFO</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Shop_info" class="nav-link">LAB/ SHOP INFO</a>
                  </li>
                 </ul>
                </li>

               </ul>
              </li>


              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">TRAINING</a>
               <ul class="dropdown-menu" id="dropdown_ul" style="min-width:600px; max-width:10)%;">
                <div class="row">
                 <div class="col-md-6 col-12">
                  <li class="nav-item ">
                   <a class="nav-link text-danger font-weight-bold">TRAINING IN THE COUNTRY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=In_house training_tech" class="nav-link">IN-HOUSE TRAINING(TEACHER)</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=In_house_training_Stasff" class="nav-link">IN-HOUSE TRAINING(STAFF)</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Sub_based_training" class="nav-link">SUBJECT BASED TRAINING</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=INDUSTRIAL_FACTORIES_TRAINING" class="nav-link">INDUSTRIAL FACTORIES TRAINING</a>
                  </li>
                 </div>
                 <div class="col-md-6 col-12">
                  <li class="nav-item">
                   <a class="nav-link text-danger font-weight-bol">TRAINING A BROAD</a>
                  </li>
                 </div>
                </div>
                <!-- <li class="nav-item">
                 <a href="#" class="nav-link">IN-HOUSE TRAINING(TEACHER)</a>
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">IN-HOUSE TRAINING(TEACHER)</a>
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">SUBJECT BASED TRAINING</a>
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">INDUSTRIAL FACTORIES TRAINING</a>
                </li> -->
               </ul>
              </li>


              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">ACADEMIC ACTIVITIES</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">CLASS ROUTINE</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Class_Routine" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">ONLINE CLASS ROUTINE</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Online_Class_Routine" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>


                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">DEGITEL CLASS CONTENT</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Digital_Class_Content" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">SYLLABUS</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Syllabas" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">SEMESTER PLAN</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub" id="dropdown_ul_1">
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Semester_plan" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">STUDENT PROJECT</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Student_project" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="index.php?school_project=Probidhan" class="nav-link">REGULITION</a>
                </li>
               </ul>
              </li>


  

              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">RESULT</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle" id="dropdown_ul_1">INTERNAL EXAM</a>
                 <ul class="dropdown-menu" id="dropdown_ul_sub">
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">CIVIL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">ELECTRICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">MECHANICAL TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">POWER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">COMPUTER TECNOLOGY</a>
                  </li>
                  <li class="nav-item">
                   <a href="index.php?school_project=Result" class="nav-link">ARCHTITECTURE AND INTERIOR DESING TECNOLOGY</a>
                  </li>
                 </ul>
                </li>

                <li class="nav-item">
                 <a href="#" class="nav-link">BOARD FINAL EXAM</a>
                </li>
               </ul>
              </li>

              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">JOB PLACEMENT</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="index.php?school_project=Working_info" class="nav-link">EMPLOYMENT INFO</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=job_placement" class="nav-link">WORKING EX-STUDENT</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=attached_cv" class="nav-link">ATTACHED CV</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=Recruitment_Info" class="nav-link">RECRUITMENT NOTIFICATIONS</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=Old_Student_achive" class="nav-link">EX-STUDENT ACHIVE</a>
                </li>
               </ul>
              </li>

              <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">INDUSTRY LINK</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="index.php?school_project=Agreements_info" class="nav-link">AGREEMENTS</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=INDUSTRIAL_ATTACHMENT" class="nav-link">INDUSTRIAL ATTACHMENT</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=industrial_visit" class="nav-link">INDUSTRY VISIT</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=Nearby_industries" class="nav-link">NEARBY INDUSTRIES</a>
                </li>
               </ul>
              </li>
 

               <li class="nav-item" id="nav_item_li">
               <a href="#" class="nav-link dropdown-toggle" id="nav_item">GALLERY</a>
               <ul class="dropdown-menu" id="dropdown_ul">
                <li class="nav-item">
                 <a href="index.php?school_project=Fpi_photo" class="nav-link">PHOTO'S</a>
                </li>
                <li class="nav-item">
                 <a href="index.php?school_project=FPI_Vedio" class="nav-link">VIDEO'S</a>
                </li>
               </ul>
              </li>


             </ul>
            </div>
            </nav>
       
           </div>
          </div>
         </div>

         </div>
        </div>
       </div>

  <?php




  if(isset($_GET["school_project"]))
    {
        
      switch($_GET["school_project"])
        {

           case "job_placement":
            {
              include("job_placement/job_placement.php");
            }
          break;

          case "attached_cv":
            {
              include("job_placement/attached_cv.php");
            }
          break;

           case "Working_info":
            {
              include("job_placement/Working_info.php");
            }
          break;

          case "Working_info_view":
            {
              include("job_placement/Working_info_view.php");
            }
          break;

          case "Recruitment_Info":
            {
              include("job_placement/Recruitment_Info.php");
            }
          break;

          case "Recruitment_Info_view":
            {
              include("job_placement/Recruitment_Info_view.php");
            }
          break;

          case "Old_Student_achive":
            {
              include("job_placement/Old_Student_achive.php");
            }
          break;

          case "Old_Student_achive_view":
            {
              include("job_placement/Old_Student_achive_view.php");
            }
          break;

          





          case "Historys":
            {
              include("Historys.php");
            }
          break;

          case "Mission":
            {
              include("Mission.php");
            }
          break;

          case "vision":
            {
              include("vision.php");
            }
          break;

          case "Posion":
            {
              include("Posion.php");
            }
          break;


          case "Structure":
            {
              include("Structure.php");
            }
          break;

          case "orgaogram":
            {
              include("orgaogram.php");
            }
          break;

          case "contuct":
            {
              include("contuct.php");
            }
          break;

          case "Principle_info":
            {
              include("Principle_info.php");
            }
          break;


          case "Vice_Principle_info":
            {
              include("Vice_Principle_info.php");
            }
          break;

          case "Previous_Principle_info":
            {
              include("Previous_Principle_info.php");
            }
          break;

          case "teacher_info":
            {
              include("teacher_info.php");
            }
          break;

          case "staff_info":
            {
              include("staff_info.php");
            }
          break;


          case "Citizencharter":
            {
              include("Citizencharter.php");
            }
          break;

          case "Pocul_point":
            {
              include("Pocul_point.php");
            }
          break;



          case "Comt":
            {
              include("About_dept/Comt.php");
            }
          break;

          case "Civil":
            {
              include("About_dept/Civil.php");
            }
          break;

          case "Power":
            {
              include("About_dept/Power.php");
            }
          break;

          case "elect":
            {
              include("About_dept/elect.php");
            }
          break;

          case "mech":
            {
              include("About_dept/mech.php");
            }
          break;

          case "aidt":
            {
              include("About_dept/aidt.php");
            }
          break;


          case "aidt_head":
            {
              include("Dept_head/aidt.php");
            }
          break;


          case "cmt_head":
            {
              include("Dept_head/cmt.php");
            }
          break;

          case "ct_head":
            {
              include("Dept_head/ct.php");
            }
          break;

          case "et_head":
            {
              include("Dept_head/et.php");
            }
          break;

          case "mt_head":
            {
              include("Dept_head/mt.php");
            }
          break;

          case "pt_head":
            {
              include("Dept_head/pt.php");
            }
          break;

          case "Dept_tech_info":
            {
              include("Dept_tech_info.php");
            }
          break;

          case "Dept_tech_view":
            {
              include("Dept_tech_view.php");
            }
          break;
          case "Dept_staff":
            {
              include("Dept_staff.php");
            }
          break;

           case "Dept_staff_view":
            {
              include("Dept_staff_view.php");
            }
          break;

         case "Student_info":
           {
             include("Student_info.php");
           }
         break;

         case "Shop_info":
           {
             include("Shop_info.php");
           }
         break;

         case "In_house training_tech":
           {
             include("In_house training_tech.php");
           }
         break;

         case "Training_info_view":
           {
             include("Training_info_view.php");
           }
         break;

          case "In_house_training_Stasff":
           {
             include("In_house_training_Stasff.php");
           }
         break;

          case "Sub_based_training":
           {
             include("Sub_based_training.php");
           }
         break;

          case "INDUSTRIAL_FACTORIES_TRAINING":
           {
             include("INDUSTRIAL_FACTORIES_TRAINING.php");
           }
         break;

         case "Class_Routine":
           {
             include("acadamic_acivities/Class_Routine.php");
           }
         break;

         case "View_Class_Routine":
           {
             include("acadamic_acivities/View_Class_Routine.php");
           }
         break;

         case "Online_Class_Routine":
           {
             include("acadamic_acivities/Online_Class_Routine.php");
           }
         break;

         case "Online_Class_Routine_view":
           {
             include("acadamic_acivities/Online_Class_Routine_view.php");
           }
         break;

         case "Digital_Class_Content":
           {
             include("acadamic_acivities/Digital_Class_Content.php");
           }
         break;

         case "Digital_Class_Content_view":
           {
             include("acadamic_acivities/Digital_Class_Content_view.php");
           }
         break;

         case "Syllabas":
           {
             include("acadamic_acivities/Syllabas.php");
           }
         break;


         case "Semester_plan":
           {
             include("acadamic_acivities/Semester_plan.php");
           }
         break;

         case "Semester_plan_view":
           {
             include("acadamic_acivities/Semester_plan_view.php");
           }
         break;

         case "Student_project":
           {
             include("acadamic_acivities/Student_project.php");
           }
         break;

          case "Student_project_view":
           {
             include("acadamic_acivities/Student_project_view.php");
           }
         break;
          case "Probidhan":
           {
             include("acadamic_acivities/Probidhan.php");
           }
         break;

         case "Probidhan_view":
           {
             include("acadamic_acivities/Probidhan_view.php");
           }
         break;

         case "Result":
           {
             include("Result/Result.php");
           }
         break;

         case "Result_view":
           {
             include("Result/Result_view.php");
           }
         break;

         case "Workinfo":
           {
             include("Workinfo.php");
           }
         break;



         case "Blood_Donation":
           {
             include("Co_edu_activities/Blood_Donation.php");
           }
         break;

         case "Celebrating_National_Day":
           {
             include("Co_edu_activities/Celebrating_National_Day.php");
           }
         break;

         case "Cultural_Activities":
           {
             include("Co_edu_activities/Cultural_Activities.php");
           }
         break;

         case "Debate_Club":
           {
             include("Co_edu_activities/Debate_Club.php");
           }
         break;

         case "Language_Club":
           {
             include("Co_edu_activities/Language_Club.php");
           }
         break;

         case "Rovering":
           {
             include("Co_edu_activities/Rovering.php");
           }
         break;

         case "Sports":
           {
             include("Co_edu_activities/Sports.php");
           }
         break;

         case "Agreements_info":
           {
             include("Agreements_info.php");
           }
         break;

        case "Agreements_info_view":
           {
             include("Agreements_info_view.php");
           }
         break;

         case "INDUSTRIAL_ATTACHMENT":
           {
             include("INDUSTRIAL_ATTACHMENT.php");
           }
         break;


         case "industrial_visit":
           {
             include("industrial_visit.php");
           }
         break;

         case "Nearby_industries":
           {
             include("Nearby_industries.php");
           }
         break;

         case "Annual_Purchase_Plan":
           {
             include("E_tender/Annual_Purchase_Plan.php");
           }
         break;

         case "Annual_Purchase_Plan_view":
           {
             include("E_tender/Annual_Purchase_Plan_view.php");
           }
         break;

         case "Budget":
           {
             include("E_tender/Budget.php");
           }
         break;

         case "Budget_view":
           {
             include("E_tender/Budget_view.php");
           }
         break;

         case "E_Tender_notice":
           {
             include("E_tender/E_Tender_notice.php");
           }
         break;

         case "E_Tender_notice_view":
           {
             include("E_tender/E_Tender_notice_view.php");
           }
         break;

         case "View_appeal":
           {
             include("Right_information/View_appeal.php");
           }
         break;

         case "View_informationofficer":
           {
             include("Right_information/View_informationofficer.php");
           }
         break;

         case "View_Low":
           {
             include("Right_information/View_Low.php");
           }
         break;

         case "View_receipt":
           {
             include("Right_information/View_receipt.php");
           }
         break;

          case "Complen":
           {
             include("Complen_box/Complen.php");
           }
         break;

         case "Integrity_Strategy_Committee":
           {
             include("integrity/Integrity_Strategy_Committee.php");
           }
         break;

         case "National_Integrity_Strategy":
           {
             include("integrity/National_Integrity_Strategy.php");
           }
         break;

        case "Progress_Reports":
           {
             include("integrity/Progress_Reports.php");
           }
         break;

         case "Progress_Reports_view":
           {
             include("integrity/Progress_Reports_view.php");
           }
         break;

        case "Work_Plan":
          {
           include("integrity/Work_Plan.php");
          }
        break;

        case "Work_Plan_view":
          {
           include("integrity/Work_Plan_view.php");
          }
        break;

        case "Infrastructure":
          {
           include("About_info/Infrastructure.php");
          }
        break;

         case "Ongoingeducation":
          {
           include("About_info/Ongoingeducation.php");
          }
        break;

        case "Principle_message":
          {
           include("Principle_message.php");
          }
        break;

        case "VicePrinciple_message":
          {
           include("VicePrinciple_message.php");
          }
        break;


        case "Annaul_Work_Plan":
          {
           include("Annual_performance/Annaul_Work_Plan.php");
          }
        break;
         case "Annaul_Work_Plan_view":
          {
           include("Annual_performance/Annaul_Work_Plan_view.php");
          }
        break;
        case "Half_Yearly_Assessment":
          {
           include("Annual_performance/Half_Yearly_Assessment.php");
          }
        break;
        case "Half_Yearly_Assessment_view":
          {
           include("Annual_performance/Half_Yearly_Assessment_view.php");
          }
        break;
        case "Tri_Month_Progress_Report":
          {
           include("Annual_performance/Tri_Month_Progress_Report.php");
          }
        break;
        case "Tri_Month_Progress_Report_view":
          {
           include("Annual_performance/Tri_Month_Progress_Report_view.php");
          }
        break;

        


        


        

        
        

        

        




         

        


        
        

        



        



         


         


         




         case "Fpi_photo":
           {
             include("Fpi_photo.php");
           }
         break;

         case "FPI_Vedio":
           {
             include("FPI_Vedio.php");
           }
         break;



         



         


          


          


          default:
            {
              include("body.php");
            }
        }
    }
  else
    {
      include("body.php");
    }

?>

       <?php


      //  if (isset($_GET["school_page"]))
      //  {
      //    switch ("school_page")
      //    {
      //     case "job_placement":
      //     {
      //       include("job_placement.php");
      //     }
      //     break;



      //     default:
      //       {
      //         include("body.php");
      //       }
      //    }
      //  }

      // else
      //   {
      //    include("body.php");
      //   }
      






       ?>




       


       <div class="container p-0 pt-3">
        <div class="row">
         <div class="col-lg-12 col-12 mt-5 p-0">
          <img src="image/footer_top_bg.png" style="" class="imgfluid" width="100%">
         </div>
        </div>
       </div>


       <div class="container p-0 pt-4">
        <div class="row">
         <div class="col-lg-12 pb-4" style="text-align:center">
          <span class="footer_div">Copyright © 2021 www.fenipoly.edu.bd. All Right Reserved.</span><br>
          <label class="footer_div">Developed by</label> &nbsp;<span class="footer_div_1"><a href="https://www.facebook.com/shatu.das.9">Shatu Chandra das</a></span>
         </div>
        </div>
       </div>



     </div>
    </div>
</form>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/jquery.meanmenu.js"></script>
     <script>
      jQuery('.mean-menu').meanmenu({
      meanScreenWidth: "991"
      });
     </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>