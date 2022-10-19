<?php $i=0;
          if($itemlist){
                    foreach($itemlist as $item){
                        
                        ?>
<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 col-p-3">
<div class="product-panel overflow-hidden border-0 shadow-sm" id="image-active_<?php echo $item->product_id ?>">
    <div class="item-image position-relative overflow-hidden">
        <div class="" id="image-active_count_<?php echo $item->product_id ?>"><span id="active_pro_<?php echo $item->product_id ?>"></span></div>
        <img src="<?php echo !empty($item->image)?$item->image:'assets/img/icons/default.jpg'; ?>" onclick="onselectimage('<?php echo $item->product_id ?>')" alt="" class="img-responsive">
    </div>
    <div class="panel-footer border-0 bg-white" onclick="onselectimage('<?php echo $item->product_id ?>')">
        <h3 class="item-details-title"><?php echo  $text=html_escape($item->product_name);?></h3>
    </div>
</div>
</div>

<?php }}?>