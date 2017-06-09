   <div class="container">

      <form class="form-signin" action="<?php echo base_url() ?>customer/register" method="post">
        <h2 class="form-signin-heading">Please register</h2>
        <label for="inputusername" class="sr-only">Name</label>
        <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Full Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="" class="sr-only">Address</label>
        <input type="text"  name="address" class="form-control" placeholder="Address" required autofocus>
        <label for="" class="sr-only">Shipping address</label>
        <input type="text" name="shipping_address" class="form-control" placeholder="shipping address" autofocus>
        <label for="" class="sr-only">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone" required autofocus>
        <label for="" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>


        <button class="btn btn-lg btn-success btn-block" name="btnRegister" type="submit">Sign up</button>
      </form>

    </div>
