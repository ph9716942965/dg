</div>
<div class="footer-top">
<div class="container">

<div class="col-md-4 foot1"><h4>Know More</h4>
<a href="about-us/index.html"><i class="fa fa-angle-right"></i> About Us</a>
<a href="contact-us/index.html"><i class="fa fa-angle-right"></i> Contact Us</a>
<a href="faqs/index.html"><i class="fa fa-angle-right"></i> FAQs</a>
</div>

<div class="col-md-4 foot2 center">
<h4>Download Our App On</h4>
<img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/AppStore.png">
<img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/googleplay.png">
</div>

<div class="col-md-4 foot3 center">
<h4>Connect With Us On</h4>
<img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/F.png">
<img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/INS.png">
<img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/T.png">
</div>

</div>
</div>

<div class="footer-bottom"><div class="container">
Copyright 2019 | All Rights Reserved   
<div class="fmenu">
<a href="privacy-policy/index.html">Privacy Policy</a>
<a href="terms-conditions/index.html">Terms & Conditions</a>
<a href="login/index.html">Vendor's Sign In</a>
</div>
</div></div>

<script type='text/javascript' src='wp-content/themes/dance-theme/js/skip-link-focus-fix8de4.html?ver=20160816'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};
/* ]]> */
</script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/themes/dance-theme/js/functions8de4.html?ver=20160816'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/libs/cycle2/jquery.cycle2.min6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/libs/cycle2/jquery.cycle2.carousel.min6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/libs/cycle2/jquery.cycle2.swipe.min6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/libs/cycle2/jquery.cycle2.tile.min6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/libs/cycle2/jquery.cycle2.video.min6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/dark/script6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/thumbnails/script6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/js/client6af1.js?ver=2.11.0'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-includes/js/wp-embed.min1f93.js?ver=4.8.9'></script>


<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>


$('#searchbar22').typeahead({
    var HomeURL= <?= base_url()?>
        source: function(query, result)
        {
         $.ajax({
         url: HomeURL + "/ali/Search",
         method:"POST",
         data:{Key:query},
         dataType:"json",
         success:function(data)
          {
         result($.map(data, function(item){
            return item;
           }));
          }
         })
        },
        // afterSelect: function (item) {
        //     $.ajax({
        //         url: HomeURL + "/handler/getusers.php",
        //      method:"POST",
        //      data:{CustomerGetByPhone:item},
        //      dataType:"json",
        //      success:function(data)
        //        {
        //          console.log(data);
        //          $("#billing_title").val(data[0].customername);
        //             $("#billing_email").val(data[0].email);
        //             $("#billing_phone").val(data[0].phone);
        //        }
        //       })
        // }
       });
// $(document).ready(function () {
//     $("#searchbar").change(function(){
//   alert("The text has been changed.");
// });
    
    $(".accordion_title").click(function () {
        if ($('.accordion_desc').is(':visible')) {
            $(".accordion_desc").slideUp(300);
            $(".plusminus").html("<i class='fa fa-plus'></i>");
        }
        if ($(this).next(".accordion_desc").is(':visible')) {
            $(this).next(".accordion_desc").slideUp(300);
            $(this).children(".plusminus").html("<i class='fa fa-plus'></i>");
        } else {
            $(this).next(".accordion_desc").slideDown(300);
            $(this).children(".plusminus").html('<i class="fa fa-minus"></i>');
        }
    });
	
	
$(".navibtn").click(function(){$(".navmenu").toggle();});
$("#yesuser").click(function() {$("#show1").show();});
$("#nouser").click(function() {$("#show1").hide();});

});

$( function() {
    $("#uploadmyImg").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#myimgPreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
</body>
</html>