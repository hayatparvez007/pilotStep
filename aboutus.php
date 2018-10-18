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
    <?php include("navigationbar.php"); ?>







       
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