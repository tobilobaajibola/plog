
<script src="<?php echo base_url();?>assets/js/core.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script async src="<?php echo base_url();?>assets/js/custom_script.js"></script> -->

<script type="text/javascript">
var ab_url = "<?php echo base_url();?>";




  $(document).ready(function() {
 setInterval(function(){
      $('#logcategory').load(ab_url+'applogs/list_log_category<?php app_service_link($app, $service); ?>');
 },10000);
  setTimeout(function() {
    $('#logcategory').load(ab_url+'applogs/list_log_category<?php app_service_link($app, $service); ?>');
}, 0); //
}
);


    $(document).ready(function() {
 setInterval(function(){
      $('#total_log').load(ab_url+'applogs/get_total_logs<?php app_service_link($app, $service); ?>');
 },10000);
  setTimeout(function() {
    $('#total_log').load(ab_url+'applogs/get_total_logs<?php app_service_link($app, $service); ?>');
}, 0); //
}
);

function call_ajax_boxes_data()
{
     $('[data-load-general-data]').each(function(){
           var load_general_data_url = $(this).data('load-general-data');
           var $this = $(this);
           $.ajax({
              url: load_general_data_url,
             type:'get',
             success:function(dt){
               $this.html(dt);
             }
           });
        });
}
  $(document).ready(function() {
 setInterval(function(){call_ajax_boxes_data();},10000);
  setTimeout(function() {call_ajax_boxes_data();}, 0); //
}
);
</script>

<script type="text/javascript">
var ab_url = "<?php echo base_url();?>";
  $(document).ready(function() {
 setInterval(function(){
      $('#summaryLogList').load(ab_url+'applogs/list_logs<?php app_service_link($app, $service);?>');
 },10000);
  setTimeout(function() {
    $('#summaryLogList').load(ab_url+'applogs/list_logs<?php app_service_link($app, $service);?>');
}, 0); //
}
);

    $(document).ready(function() {
 setInterval(function(){
      $('#listlogservice').load(ab_url+'applogs/list_service_log<?php app_service_link($app, $service);?>');
 },10000);
  setTimeout(function() {
    $('#listlogservice').load(ab_url+'applogs/list_service_log<?php app_service_link($app, $service);?>');
}, 0); //
}
);




  $(document).ready(function() {
 setInterval(function(){
      $('#servicelinklogcategory').load(ab_url+'servicelinklogs/list_servicelink_log_category<?php app_service_link($app, $service); ?>');
 },10000);
  setTimeout(function() {
    $('#servicelinkcategory').load(ab_url+'servicelinklogs/list_servicelink_log_category<?php app_service_link($app, $service); ?>');
}, 0); //
}
);



  $(document).ready(function() {
 setInterval(function(){
      $('#summaryservicelinkLogList').load(ab_url+'servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>');
 },10000);
  setTimeout(function() {
    $('#summaryservicelinkLogList').load(ab_url+'servicelinklogs/list_servicelink_logs<?php app_service_link($app, $service);?>');
}, 0); //
}
);

    $(document).ready(function() {
 setInterval(function(){
      $('#listlogservicelink').load(ab_url+'servicelinklogs/list_servicelink_service_log<?php app_service_link($app, $service);?>');
 },10000);
  setTimeout(function() {
    $('#listlogservicelink').load(ab_url+'servicelinklogs/list_servicelink_service_log<?php app_service_link($app, $service);?>');
}, 0); //
}
);
</script>


<script>
function myDisplayer(some) {
  document.getElementById("servicelinklogcategory").innerHTML = some;
}

let myPromise = new Promise(function(myResolve, myReject) {
  let x = 0;

// some code (try to change x to 5)

  if (x == 0) {
    myResolve("OK");
  } else {
    myReject("Error");
  }
});

myPromise.then(
  function(value) {myDisplayer(value);},
  function(error) {myDisplayer(error);}
);
</script>


 