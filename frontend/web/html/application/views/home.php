<div class="fullbox">
<div class="cycloneslider cycloneslider-template-default cycloneslider-width-responsive" id="cycloneslider-home-1" style="max-width:1400px" > 
<div class="cycloneslider-slides cycle-slideshow" data-cycle-allow-wrap="true" data-cycle-dynamic-height="off" data-cycle-auto-height="1400:449" data-cycle-auto-height-easing="null" data-cycle-auto-height-speed="250" data-cycle-delay="0" data-cycle-easing="" data-cycle-fx="fadeout" data-cycle-hide-non-active="true" data-cycle-log="false" data-cycle-next="#cycloneslider-home-1 .cycloneslider-next" data-cycle-pager="#cycloneslider-home-1 .cycloneslider-pager" data-cycle-pause-on-hover="false" data-cycle-prev="#cycloneslider-home-1 .cycloneslider-prev" data-cycle-slides="&gt; div" data-cycle-speed="1000" data-cycle-swipe="false" data-cycle-tile-count="7" data-cycle-tile-delay="100" data-cycle-tile-vertical="true" data-cycle-timeout="4000" > <div class="cycloneslider-slide cycloneslider-slide-image" >
 <img src="<?= base_url('assets/')?>wp-content/uploads/2019/05/1Banner-1400x449.png" alt="" title="" /> </div> <div class="cycloneslider-slide cycloneslider-slide-image" >
 <img src="<?= base_url('assets/')?>wp-content/uploads/2019/05/2Banner-1400x449.png" alt="" title="" /> 
</div> 
<div class="cycloneslider-slide cycloneslider-slide-image" > 
<img src="<?= base_url('assets/')?>wp-content/uploads/2019/05/3Banner-1400x449.png" alt="" title="" />
 </div> 
 </div> 
 </div>
</div>

<div class="homegrid">
<?php
$links=$this->Common_model->get('categories');
//echo "<pre>";print_r($data);exit;
foreach($links as $link){

echo "<div class=\"col-md-4\"><a href=\"".base_url('welcome/search/'.$link->slug)."\"><img src=\"".$link->image."\"></a></div>";
 //echo '<a href="'.base_url('welcome/search/'.$link->slug).'">'.$link->name.'</a>';
}
?>
<?php
/*
<div class="col-md-4"><a href="<?= base_url('welcome/search/dance-schools')?>"><img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/home1.jpg"></a></div>
<div class="col-md-4"><a href="social-nights/index.html"><img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/home2.jpg"></a></div>
<div class="col-md-4"><a href="events/index.html"><img src="<?= base_url('assets/')?>wp-content/themes/dance-theme/images/home3.jpg"></a></div>
*/?>
</div>