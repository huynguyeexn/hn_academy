


<?php
include_once 'hn_layout/huunhan.layout.header';
?>




<div class="hn-page">



   <?php
   include_once 'hn_layout/huunhan.layout.page-title';
   ?>
   <div class="hn-page-content">
      <!-- START COURSES -->
      <div class="hn-courses">
         <div class="container">
            <div class="hn-courses-box">

               <?php
               include_once 'hn_layout/huunhan.layout.courses';
               ?>


            </div>
         </div>
      </div>
      <!-- END COURSES <-->
      <div class="fluid">
         <div class="hn-big-courses ">
            <div class="container">
               <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-md-6">
                     <div class="hn-big-courses-content">
                        <h1>Business for begginers</h1>
                        <span>By Simon Smith | March 18, 2018</span>
                        <div class="hn-course-star">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam unde natus consequatur eos, possimus in, fuga delectus optio veniam quasi, ipsa molestiae. Reprehenderit magni perspiciatis labore, odit aut fuga non.</p>
                     </div>

                  </div>
                  <div class="col-md-6">

                     <div class="hn-big-courses-img">
                        <img src="hn_images/huunhan-bg-4.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="container mt-5">
         <!-- START FEATURES ROW -->
         <?php
         include_once 'hn_layout/huunhan.layout.features';
         ?>
         <!-- END FEATURES ROW -->
      </div>
   </div>
   <!-- START GET IN BOX -->
   <?php
   include_once 'hn_layout/huunhan.layout.getinbox';
   ?>
   <!-- END GET IN BOX -->
</div>









<?php
include_once 'hn_layout/huunhan.layout.footer';
?>