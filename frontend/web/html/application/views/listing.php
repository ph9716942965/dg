<?php

echo "<pre>";print_r($listing);exit;
foreach($listing as $list){
    echo '<div class="ratingbox">
    <img src="'.@$list->images[0].'"/>
    <div class="ratingdetails">
    <p>'.$list->catname->name .' '. $list->subcatname->name. '</p>
    <p>'.$list->name.'</p>
    
    <p>Day : Monday - Friday</p>
    <p>Timing : 10:00 - 11:00</p>
    <p>Contact No : 3898354991</p>
    <p>Address : Via Canonica, 18, Casalecchio di Reno, Metropolitan City of Bologna, Italy</p>
    <a class="listprice" href="http://digitalcard.local/dance-details?did=60">View More...</a>
    <span class="listprice">EUR 1</span>
    </div>
    </div>';
}
?>

<?php /*
<div class="ratingbox">
<img src="http://digitalcard.local/wp-content/uploads/vendor/15583945486.jpeg"/>
<div class="ratingdetails">
<p>Dance Schools</p>
<p>Argentine Academy of Tango</p>
<p>Day : Monday - Friday</p>
<p>Timing : 10:00 - 11:00</p>
<p>Contact No : 3898354991</p>
<p>Address : Via Canonica, 18, Casalecchio di Reno, Metropolitan City of Bologna, Italy</p>
<a class="listprice" href="http://digitalcard.local/dance-details?did=60">View More...</a>
<span class="listprice">EUR 1</span>
</div>
</div>*/ ?>
