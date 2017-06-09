<?php
foreach($this->selectedproduct as $spp){

}
//print_r($this->sorted);
// foreach($this->sorted as $sxx){
// echo $sxx->name;
// }

foreach($this->sorted as $qqq){

}

foreach($this->subsorted as $rrr){

}

?>
<div class="row" style="margin-top: 20px;">
    <div class="col-sm-4">
        <img src="<?php echo base_url() ?>admin783/public/images/product/<?php echo $spp->image1 ?>" class="img-responsive img-thumbnail" style="margin-left: 10%;">
    </div>
    <div class="col-sm-5">
        <h4 class="title secondary-color"><?php echo ucfirst($spp->name) ?></h4>


        <p><strong>Category: </strong><a href="<?php echo base_url() ?>dashboard/displaySortedProduct/<?php echo $spp->category_id?>" class="container-link">
        <?php echo ucfirst($qqq->name);?>
         </a> / <a href="<?php echo base_url() ?>dashboard/displaySortedSubProduct/<?php echo $spp->subcategory_id?>" class="container-link"><?php echo ucfirst($rrr->name) ?></a></p>
            <p><strong>Country: </strong><?php echo strtoupper($spp->country) ?></p>
                    <div class="description">
                <?php echo $spp->description ?>
            </div>
            <div class="price">
                <h2>Rs. <?php echo $spp->price ?></h2>
            </div>
            </div>
            <div class="col-md-3">
              <h3 class="center">Quantity</h3>
              <input type="number" name="quantity" value="1" style="width:60px;" class="form-control">

            </div>
   <!--  <div class="col-sm-3 text-center">
        <h3 class="title secondary-color">Rs. 5,700</h3>
            <div class="center-content">
            <div class="input-group quantity-box">
                                    <span class="input-group-btn">
                        <button class="btn btn-default minus" type="button">-</button>
                    </span>

                                <input readonly="readonly" class="form-control text-center" placeholder="Quantity" value="1" data-id="6084302811" type="text">
                                           <span class="input-group-btn">
                        <button class="btn btn-default plus" type="button">+</button>
                    </span>

                            </div>
                <button type="button" class="btn addCart btn-cheers" style="margin-bottom: 10px;">Place Order</button>
            </div>
    </div> -->
</div>
