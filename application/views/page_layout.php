<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php
function app_service_link($app, $service){
if((!empty($app)) && (empty($service))){
echo '/'.$app;
}
elseif(!empty($app && $service)) {
echo '/'.$app.'/'.$service;
}
}
?>
    
    <?php
     $this->load->view('general/headtag');
     ?>
     <!-- <body class="smoothscroll enable-animation boxed"> -->
    <!-- <body class="layout-admin aside-sticky header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle b-0"> -->
<body class="layout-admin header-sticky" data-aos-easing="ease-in-out-sine" data-aos-duration="700" data-aos-delay="0">
    <div id="wrapper" class="d-flex align-items-stretch flex-column">




    <?php $this->load->view('general/header'); ?>

        
      <div id="wrapper_content" class="d-flex flex-fill">


<!-- <a class="btn btn-default btn-lg lightbox specialBtn specialBtn-booking specialBtn-right" href="component/checkin" data-lightbox="iframe" data-plugin-options='{"type":"ajax", "closeOnBgClick":true}'>
    <span> <i class="fa fa-calendar left"></i> VISITOR CHECK IN </span></a
> -->
  <!-- -->
     
<?php 
    //side bar function
     // $this->load->view('general/side');
     ?>

       <div id="middle" class="flex-fill">
<?php

      if (isset($page_layout)){
       $this->view($page_layout);
      }
    ?>
</div>          
        </div>
     
      <!-- / -->

<?php  $this->load->view('general/footer');?>
</div>
<?php $this->load->view('general/foottag');?>

</body>
</html>


