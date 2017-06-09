    <!-- Page Content -->
    <div class="container">


            <div class="col-md-12">



                <div class="row">
                      <?php foreach ($this->all as $al) {?>
                     <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail new-thumb">
                    <img src="<?php echo base_url() ?>admin783/public/images/product/<?php echo $al->image1 ?>" alt="" style="height: 307px" class="img-responsive">
                    <div class="caption">
                        <h4><?php echo $al->name?></h4>
                        <p>
                            <?php $al->short_description = strip_tags($al->short_description);
                                if (strlen($al->short_description) > 40) {
                             $stringCut = substr($al->short_description, 0, 40);
                            $al->short_description = substr($stringCut, 0, strrpos($stringCut, ' ')).' <a href="/this/story">Read More</a>'; }
                            echo $al->short_description; ?>
                        </p>
                        
                            <p>
                                <a href="<?php echo base_url() ?>dashboard/details/<?php echo $al->slug?>" class="btn btn-primary ">Buy Now!</a>
                            <a href="<?php echo base_url() ?>dashboard/details/<?php echo $al->slug?>" class="btn btn-default pull-right">More Info</a>
                            </p>
                        </div>
                        </div>
                    </div>
                     <?php  } ?>


                </div>

            </div>

        </div>

    </div>
