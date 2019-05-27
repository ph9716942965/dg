
<div class="banner">
<img src="<?= $banner?>" width="100%">
</div>
<div class="catpagebox"><div class="container">
<?php
foreach($SearchList as $list){
    echo '<div class="col-md-3">
    <a href="'.base_url('welcome/search/'.$slug.'/'.$list->id).'"><img src="'.$list->image.'" width="100%"></a>
    </div>';
}
?>


<?php /*
<div class="col-md-3">
<a href="../category/salsa/index.html"><img src="../wp-content/uploads/2019/05/2.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/kizomba/index.html"><img src="../wp-content/uploads/2019/05/7.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/zouk/index.html"><img src="../wp-content/uploads/2019/05/4.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/bachata/index.html"><img src="../wp-content/uploads/2019/05/5.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/samba/index.html"><img src="../wp-content/uploads/2019/05/9.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/conga/index.html"><img src="../wp-content/uploads/2019/05/10.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/rumba/index.html"><img src="../wp-content/uploads/2019/05/8.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/merengue/index.html"><img src="../wp-content/uploads/2019/05/6.png" width="100%"></a>
</div>


<div class="col-md-3">
<a href="../category/others/index.html"><img src="../wp-content/uploads/2019/05/11.png" width="100%"></a>
</div> */ ?>

</div></div>
