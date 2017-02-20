

    <!-- Page Content -->
    <div class="container">


            <div class="col-md-12">

                

                <div class="row">
                      <?php foreach ($this->sortedProduct as $yyy) {?>
                     <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail new-thumb">
                    <img src="<?php echo base_url() ?>admin783/public/images/product/<?php echo $yyy->image1 ?>" alt="" style="height: 307px" class="img-responsive">
                    <div class="caption">
                        <h4><?php echo $yyy->name?></h4>
                        <p>
                            <?php $yyy->short_description = strip_tags($yyy->short_description);
                                if (strlen($yyy->short_description) > 40) {
                             $stringCut = substr($yyy->short_description, 0, 40);
                            $yyy->short_description = substr($stringCut, 0, strrpos($stringCut, ' ')).' <a href="/this/story">Read More</a>'; }
                            echo $yyy->short_description; ?>
                        </p>

                            <p>
                                <a href="#" class="btn btn-primary">Buy Now!</a> <a href="<?php echo base_url() ?>dashboard/details/<?php echo $yyy->slug?>" class="btn btn-default">More Info</a>
                            </p>
                        </div>
                        </div>
                    </div>
                     <?php  } ?>


                </div>

            </div>

        </div>

    </div>	