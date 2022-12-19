 <div class="container" style="margin-top:70px; padding-top:10px;">
  <div class="row">
   
   <div class="col-lg-9 col-md-9 col-sm-9 col-12 pt-0 body_top_div" >			
    <ul class="list-group p-0">
    	<li  class="list-group-item font-weight-bold bg-success text-light " id="">
    		<center>Contuct</center>
    	</li>
    </ul>


    <li class="list-group-item">
      <div class="Contuct_text">
        <p>
          <label>Contact Information</label> <br><br>
          <label>Feni Polytechnic institute, Feni.</label> <br><br>
          <label>Post -Malipur, Post Code-3900</label><br><br>
          <label>Feni Sadar,Feni.</label><br><br>
          <label>Phone :0331 74030</label><br> 
          <label>Mobil: 01688709257 (Principal)</label><br> 
          <label>Mailing Address:fpi@gamil.com</label><br><br>

          <label>Registrar</label><br><br>

          <label>E-mail: info@fenipoly.edu.bd</label><br>
          <label>reg_fpi@fenipoly.edu.bd</label><br><br>
          <label>developer@fenipoly.edu.bd</label><br><br>


        </p>
      </div>

      <div style="height:400px; width:100%;">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.79637630183!2d91.40849871444237!3d23.03124752178439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375369ae3d72f73b%3A0xaf6db3b21c8e61e9!2sFeni%20Polytechnic%20Institute-FPI!5e0!3m2!1sen!2sbd!4v1624518544557!5m2!1sen!2sbd"  height="100%" width="100%" style="border:0;" allowfullscreen loading="lazy" ></iframe>
      </div>
    </li>
 

    	
   </div>


        <div class="col-lg-3 col-md-3 col-sm-3 col-12 p-0" >
          
          <div class="col-12 p-0 pl-2 ">
           <div class="p_div p-0">
            <div  class="pic_div_1">
             Message from Principal
            </div>


            <?php
              $var_pri="SELECT * FROM `pricipal_info`";
              $VAR=$ob->link->query($var_pri);

              if ($VAR)
              {
               $fatch_pric=$VAR->fatch_array();
            ?>

            <div class="p_img_div">
             <center><img src="<?php print $fatch_pric[13]; ?>" class="img-fluid p_img"></center>
            </div>
            <div class="pic_div_2">
             <span><?php print $fatch_pric[1];?></span><br>
             <span><a href="">detalis</a></span>
            </div>

            <?php
             }
            ?>


           </div>
          </div>




          <div class="col-12 p-0 pl-2 pt-2">
           <div class="p_div p-0">
            <div  class="pic_div_1">
             Message from vice principal
            </div>
            <div class="p_img_div">
             <center><img src="image/p_sir.jpg" class="img-fluid p_img"></center>
            </div>
            <div class="pic_div_2">
             <span>Md. Mosaddequl Bari</span><br>
             <span><a href="">detalis</a></span>
            </div>
           </div>
          </div>



          <div class="col-12 p-0 pl-2 pt-2">
           <div class="p_div p-0">
            <div  class="pic_div_1">
             Important Links
            </div>

            <div class="p_img_div">
             <li class="pic_div_1_li">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">কারিগরি শিক্ষা অধিদপ্তর</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">বাংলাদেশ কারিগরি শিক্ষা বোর্ড</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">বাংলাদেশ সরকারী কর্ম কমিশন</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">জনপ্রশাসন মন্ত্রণালয়</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">ব্যানবেইস</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a>
              </li>
              <li class="pic_div_1_li" style="">
               &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right pic_div_1_icon"></i>&nbsp;&nbsp;
               <a href="#"  class="pic_div_1_text">বিজি প্রেস</a>
              </li>    
            </div>
          
           </div>
          </div>


          <div class="col-12 p-0 pl-2 pt-2">
           <div class="p_div p-0">
            <div  class="pic_div_1">
             Emergency Hotline
            </div>

            <div class="p_img_div">
             <center>
              <img src="image/Hotline_BN.png" class="img-fluid hot_line">
             </center>
            </div>
          
           </div>
          </div>


          <div class="col-12 p-0 pl-2 pt-2">
           <div class="p_div p-0">
            <div  class="pic_div_1">
             NATIONAL ANTHEM
            </div>

            <div class="p_img_div">
             <center>
               <audio controls  class="mt-3 w-100 p-1">
                <source src="http://fenipoly.edu.bd/en/public/frontend/img/bd_national_anthem.mp3" type="audio/ogg">
               </audio>
             </center>

            </div>
          
           </div>
          </div>
          
         
          
         </div>


        </div>
       </div>