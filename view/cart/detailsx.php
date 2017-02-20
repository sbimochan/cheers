<div class="container">

               

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.html">

                            <h1>Shopping cart</h1>

                            <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                            <div class="table-responsive" ng-app = "">
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
                                    <?php foreach($this->addProduct as $aP) {?>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>admin783/public/images/product/<?php echo $aP->image1 ?>" alt="<?php echo $aP->slug ?>" width=60 height=60>
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $aP->name?></a>
                                            </td>
                                            <td ng-app = "">
                                                <input type="number"  class="form-control" ng-model="value">
                                            </td><span ng-bind="value">
                                            <td>Rs. <?php echo $aP->price ?></td>
                                            <td>Rs. <?php echo $aP->discount ?></td>
                                            <td><?php echo $total= $aP->price - $aP->discount ?></td>
                                            <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$446.00</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                  


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




                </div>
                <!-- /.col-md-3 -->

            </div>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js">
</script>