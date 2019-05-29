<?php

function timetable($timetable){
    $dowMap = array('Sun', 'Monday', 'Tuesday', 'Wednessday', 'Thursday', 'Friday', 'Saturday','Sunday');
    $html='';
    // for($day=1;$day<8;$day++){
    //     foreach(){
    //     }
    //     $html.=' <p>Day - '.$dowMap[$timing->day].'</p>';
    // }
    if(is_array($timetable)){
        foreach($timetable as $timing){
            $html.=' <p>Day - '.$dowMap[$timing->day].'</p>';
            $html.=' <p>Timing : '.$timing->time_start.' - '.$timing->time_end.'</p>';
        }
    }
    
    return $html;
}

// echo "<pre>";
// echo $this->config->item('admin_url');
// print_r($listing);exit;

foreach($listing as $list){
    echo '<div class="ratingbox">
    <img src="'.@($this->config->item('admin_url').'/'.$list->images[0]->file).'" height="207" width="237"/>
    <div class="ratingdetails">
    <p>'.@$list->catname->name .' '. @$list->subcatname->name. '</p>
    <p>'.@$list->name.'</p>
    '.timetable(@$list->timetable).'
    
    <p>Contact No : '.@$list->contact.'</p>
    <p>Address : '.@$list->address.'</p>
    <a class="listprice" href="#">View More...</a>
    <span class="listprice">EUR 1</span>
    </div>
    </div>';
}
//exit;
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
</div>*/?>
