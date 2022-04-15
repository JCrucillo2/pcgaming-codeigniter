<div style="width: 40%; margin: 0 auto;">
  <h1 class="signin-text my-3 text-center">Log In</h1>
  <?php echo form_open("auth/login");?>
  
    <div class="form-group">
      <label for="identity">Email/Username</label>
      <input type="text" name="identity" id="identity" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="remember">Remember Me:</label>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </div>

    <div id="infoMessage"><?php echo $message;?></div>

    <div class="form-group">
      <input type="submit" name="submit" id="submit" value="Log In" class="btn btn-success w-100">
    </div>
  
  <?php echo form_close();?>
  
  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  <p class="text-center mb-0 mt-5">Don't have an account yet?</p>
  <div class="text-center">
    <a href="<?php echo base_url() ?>register">Create an Account</a>
  </div>
</div>
