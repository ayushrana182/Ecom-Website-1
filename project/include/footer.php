</div>

<div class="col-md-12 text-center" >&copy;Powered by AR7
</div>


<script>
  jQuery(window).scroll(function(){
    var vscroll =jQuery(this).scrollTop();
    jQuery('#logotext').css({
      "transform": "translate(0px,"+vscroll/1.25+"px)"
    });

    var vscroll =jQuery(this).scrollTop();
    jQuery('#back-flower').css({
      "transform":"translate("+vscroll/5+"px,-"+vscroll/12+"px)"
    });

    var vscroll =jQuery(this).scrollTop();
    jQuery('#fore-flower').css({
      "transform":"translate(0px,-"+vscroll/2+"px)"
    });
  });

  function detailsmodal(id){
   var data={"id":  id};
   jQuery.ajax({
     url :'/project/include/detailsmodal.php',
     method : "POST",
     data : data,
      success:function(data){
       jQuery('body').append(data);
       jQuery('#details-modal').modal('toggle');
     },
     error:function(){
       alert("Something Went Wrong!");
     },
   });
  }
</script>

</body>
</html>
