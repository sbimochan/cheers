   <div class="container">

      <form class="form-signin" action="<?php echo base_url()?>customer/login" method="post">
        <h2 class="form-signin-heading">Please login in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="name" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit">Sign in</button>
      </form>

    </div>
