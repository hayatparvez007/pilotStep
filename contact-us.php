<!DOCTYPE html>
<html lang="eng-US">

<?php include("head.php");  ?>



<body class="home-page-3">
<!-- ========================================
    SITSPL PRELOADER
    ========================================
      -->
      <div class="step-preloader-rapper">
        <div class="preloder-table">
            <div class="preloder-cell">
                <div class="preloder-logo mtb-30 text-center">
                    <img src="assets/images/logo/sitspl_logo.png" alt="">
                </div>
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================
    SITSPL PRELOADER END
    ========================================
      -->

    <!-- ========================================
    HEADER,OFFCANVAS,SEARCH MODAL AREA START FROM HERE
    ========================================
      -->
    <?php $page='contact-us';$company='true'; include("navigationbar.php"); ?>

    <nav id="breadcrumb">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="index" class="breadcrumb">Home</a>
        <a href="about" class="breadcrumb">Contact Us</a>
      </div>
    </div>
  </nav>


      <!-- 
========================================
About Us section START from here
========================================
-->
<!-- Logic -->

<!-- Logic ends -->

<!-- 
========================================
GET IN TOUCH TWO AREA START FORM HERE
========================================
-->
<div class="step-get-in-touch section-pading contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading2"><span class="sec-bar-2">Get in Touch</span></h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
            <div class="row">
                    <div class="contact-address">
                            <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12 mbt-30">
                                <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                        <div class="con-i">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>+088-555-222-44</h5>
                                        <h5>+099-777-333-55</h5>
                                    </div>

                                </div>
                            </div>
                            </div>
                            <!-- end single contact address -->
                            <div class="col-md-3 col-sm-4 col-xs-12 mbt-30">
                                <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                       <div class="con-i">
                                            <i class="fa fa-paper-plane"></i>
                                       </div>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="mailto:iinfo@gmail.com">info@gmail.com</a></h5>
                                        <h5><a href="mailto:www.yourweb.com">www.yourweb.com</a></h5>
                                    </div>

                                </div>
                            </div>
                            </div>
                            <!-- end single contact address -->
                            <div class="col-md-3 col-sm-4 col-xs-12">
                               <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                        <div class="con-i">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>212 , Inner circular road,</h5>
                                        <h5>New York City, U.S.A.</h5>
                                    </div>

                                </div>
                            </div> 
                            </div>
                            <!-- end single contact address -->
                    </div>
            </div> <!-- end row -->
            <div class="big-spacer2"></div> <!-- end big spacer -->
            <div class="row">
               <form action="contact-us" method="post" class="main-contact-form-contact">
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Name" >
                    
                    <input type="email" name="email" placeholder="Email" >
                    
                    <input type="text" name="mobile" placeholder="Mobile/Phone No.">
                    
                </div>
                <div class="col-md-6">
                    <textarea placeholder="Message" name="message"></textarea>
                    <div class="text-right">
                        <!-- <a href="#!" class="btn-mr waves-effect waves-light">SEND</a> -->
                        <input type="submit" class="btn-sm btn-mr-solid has-rad-lg waves-effect waves-orange" value="Send" /> 
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>



    <!-- 
========================================
GET IN TOUCH TWO AREA START FORM HERE
========================================
-->






<!-- 
========================================
MAP AREA START FORM HERE
========================================
-->
   <div class="contact-page-map-area">
       <div id="googleMap"></div>
   </div>
<!-- 
========================================
MAP AREA END FORM HERE
========================================
-->

<!-- 
========================================
About us section
========================================
-->


<!--  Management Profile, Values, Vision & Mission 
-->
  
<!--  Management Profile, Values, Vision & Mission ends
-->




       
<!-- ========================================
FOOTER AREA END FORM HERE
========================================
-->
<?php include("footer.php"); ?>

<!-- ========================================
FOOTER AREA END FORM HERE
========================================
-->

<!-- ========================================
Scripts AREA START FROM HERE
========================================
-->
<?php include("indexscripts.php"); ?>

<!-- ========================================
Scripts AREA END HERE
========================================
-->

<script>
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 300});
  });      
</script>

</body>
</html>