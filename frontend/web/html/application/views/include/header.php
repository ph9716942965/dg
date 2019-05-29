<?php /*
<html lang="en">
<head>
    <title>Bootstrap Typeahead with Ajax Example</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
</head>
<body>


<div class="row">
	<div class="col-md-12 text-center">
		<br/>
		<h1>Search Dynamic Autocomplete using Bootstrap Typeahead JS</h1>	
			
			
	</div>
</div>


<script type="text/javascript">


	$('#hh').typeahead({
	    source:  function (query, process) {
        return $.get("<?= base_url('/api/Search')?>" , { query: query }, function (data) {
        		console.log(data);
        		data = $.parseJSON(data);
	            return process(data);
	        });
	    }
	});


</script>
</body>
</html>


 exit;
*/
?>



<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
    <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title><?= isset($title)?$title:'Dance Globe'?></title>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="<?= isset($title)?$title:'Dance Globe'?> &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="<?= isset($title)?$title:'Dance Globe'?> &raquo; Comments Feed" href="comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/digitalcard.local\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.9"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='twentysixteen-fonts-css'  href='https://fonts.googleapis.com/css?family=Merriweather%3A400%2C700%2C900%2C400italic%2C700italic%2C900italic%7CMontserrat%3A400%2C700%7CInconsolata%3A400&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css'  href='assets/wp-content/themes/dance-theme/genericons/genericons5589.html?ver=3.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='twentysixteen-style-css'  href='<?= base_url("assets/")?>wp-content/themes/dance-theme/style1f93.css' type='text/css' media='all' />
<!--[if lt IE 10]>
<link rel='stylesheet' id='twentysixteen-ie-css'  href='http://digitalcard.local/wp-content/themes/dance-theme/css/ie.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentysixteen-ie8-css'  href='http://digitalcard.local/wp-content/themes/dance-theme/css/ie8.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 8]>
<link rel='stylesheet' id='twentysixteen-ie7-css'  href='http://digitalcard.local/wp-content/themes/dance-theme/css/ie7.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='cyclone-template-style-dark-0-css'  href='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/dark/style6af1.css?ver=2.11.0' type='text/css' media='all' />
<link rel='stylesheet' id='cyclone-template-style-default-0-css'  href='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/default/style6af1.css?ver=2.11.0' type='text/css' media='all' />
<link rel='stylesheet' id='cyclone-template-style-standard-0-css'  href='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/standard/style6af1.css?ver=2.11.0' type='text/css' media='all' />
<link rel='stylesheet' id='cyclone-template-style-thumbnails-0-css'  href='<?= base_url("assets/")?>wp-content/plugins/cyclone-slider-2/templates/thumbnails/style6af1.css?ver=2.11.0' type='text/css' media='all' />
<!--[if lt IE 9]>
<script type='text/javascript' src='http://digitalcard.local/wp-content/themes/dance-theme/js/html5.js?ver=3.7.3'></script>
<![endif]-->
<script type='text/javascript' src='<?= base_url("assets/")?>wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?= base_url("assets/")?>wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="<?= base_url('assets/')?>wp-content/themes/dance-theme/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/')?>wp-content/themes/dance-theme/css/responsive.css" media="all" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  

</head>

<body>

<div class="header">
<div class="container">
<div class="col-md-2"><a href="<?= base_url()?>"><img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/logo.png"></a><button class="navibtn"><i class="fa fa-bars"></i></button></div>

<div class="col-md-7">
<input id="hh" placeholder="Search..." name="sasfsd" autocomplete="off"  type="text">
<div class="searchbtn">
<button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
</div>

<script type="text/javascript">


	$('#hh').typeahead({
	    source:  function (query, process) {
        return $.get("<?= base_url('/api/Search')?>" , { searchkey: query }, function (data) {
        		
						//console.log(process);
        		data = $.parseJSON(data);
						console.log(data);
	            return process(data);
	        });
	    },
			afterSelect: function (item) {
            $.ajax({
                url: "<?= base_url('/api/Search')?>" ,
             method:"POST",
             data:{selectedSearch:item},
            // dataType:"json",
             success:function(data)
               {
                 console.log(data);
								$('#content').html(data);
                //  $("#billing_title").val(data[0].customername);
                //     $("#billing_email").val(data[0].email);
                //     $("#billing_phone").val(data[0].phone);
               }
              })
        }
	});


</script>

<div class="menu navmenu">
<?php
$links=$this->Common_model->get('categories');
//echo "<pre>";print_r($data);exit;
foreach($links as $link){
 echo '<a href="'.base_url('welcome/search/'.$link->slug).'">'.$link->name.'</a>';
}
?>

<!-- <a href="dance-schools/index.html">Dance Schools</a>
<a href="social-nights/index.html">Social Nights</a>
<a href="events/index.html">Events</a> -->
<a href="login/index.html">Vendor Login</a>
</div>
</div>

</div>

</div>
<div id="content">