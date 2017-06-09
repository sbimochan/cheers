    <?php 
    foreach($this->all as $al){

    }
    ?>

    <!-- Page Content -->
    <div class="container">


            <div class="col-md-12">


                <div class="row">
                <?php
             
                ?>
                <?php foreach ($this->selected as $xz) {?>
                     <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail new-thumb">
                    <img src="<?php echo base_url() ?>admin783/public/images/product/<?php echo $xz->image1 ?>" alt="" style="height: 307px" class="img-responsive">
                    <div class="caption">
                        <h4><?php echo $xz->name?></h4>
                        <p>
                            <?php $xz->short_description = strip_tags($xz->short_description);
                                if (strlen($xz->short_description) > 40) {
                             $stringCut = substr($xz->short_description, 0, 40);
                            $xz->short_description = substr($stringCut, 0, strrpos($stringCut, ' ')).' <a href="/this/story">Read More</a>'; }
                            echo $xz->short_description; ?>
                        </p>

                            <p>
                                <a href="#" class="btn btn-primary">Buy Now!</a> <a href="<?php echo base_url() ?>dashboard/details/<?php echo $xz->slug?>" class="btn btn-default">More Info</a>
                            </p>
                        </div>
                        </div>
                    </div>
                     <?php  } ?>

                    


                      
                </div>

            </div>

        </div>

    </div>