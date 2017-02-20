

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">
                    <?php 
                @session_start();
                echo SessionHelper::flashMessage(); ?>
                            <h1>Checkout Page</h1>
                            <p class="text-muted">You currently have <?php echo count($this->cartitem) ?> item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <form method="post" action="">
                                    <?php 
                                    $i = 1;
                                        $total= 0;
                                    foreach($this->cartitem as $ci){ ?>
                                    <input type="hidden" name="itemnames<?php echo $i ?>" value="<?php echo $ci->name ?>" /> 
    <input type="hidden" name="itemnumbers<?php echo $i ?>" value="<?php echo $ci->product_id ?>" /> 
      <input type="hidden" name="itemdescs<?php echo $i ?>" value="Color:<?php echo $ci->color ?>,size : <?php echo $ci->size ?>" /> 
    <input type="hidden" name="itemprices<?php echo $i ?>" value="<?php echo $ci->price-$ci->discount ?>" />
      <input type="hidden" name="itemQtys<?php echo $i ?>" value="<?php echo $ci->quantity ?>" />
                                   
                                    <?php $total = $total + ($ci->price-$ci->discount) * $ci->quantity ?>
                                            <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>admin/public/images/product/<?php echo $ci->image1 ?>" alt="<?php echo $ci->name ?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $ci->name ?></a>
                                           
                                           <br> Color: <?php echo $ci->color ?><br>
                                            Size : <?php echo $ci->size ?>
                                            </td>
                                            <td>
                                                <?php echo $ci->quantity ?>
                                               
                                            </td>
                                            <td>Rs. <?php echo $ci->price ?></td>
                                            <td>Rs. <?php echo $ci->discount ?></td>
                                            <td>Rs. <?php echo($ci->price-$ci->discount) * $ci->quantity ?></td>
                                            <td>&nbsp;
                                            </td>

                                        </tr>
                                        
                                    <?php $i++; } ?>
                                        
                                        <input type="hidden" name="numItem" value="<?php echo $i-1 ?>">
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">Rs . <?php echo $total ?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url() ?>dashboard/index" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                   
                                    <button type="submit" class="btn btn-primary">Make order <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>You may also like these products</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

					<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

				    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

      