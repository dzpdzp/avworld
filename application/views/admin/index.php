  <?php
  $show_admin_forget_pwd_flag = false;
  ?>
  <body>
    <!-- ログインフォーム ここから -->
    <div class="container">
      <div class="row">
        <div class="login-panel col-md-4 col-md-offset-4 text-center" style="margin-top:20%;margin-bottom:20px;">
            <a href="<?php echo BASE_URL?>">
                <h1>AvWorld</h1>
            </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">请登录</h3>
            </div>
            <div class="panel-body">
              <form role="form" method="post" action="<?php echo base_url('login/index')?>">
                <input type="hidden" name="submit_flag" value="submit_flag">
                <?php if(!$form_vail):?>
                <div class="form-group alert alert-danger" role="alert" style="margin: 0 0 20px 0;">账号密码不正确！</div>
                <?php endif;?>
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="账户名" name="login_id" type="text" value="<?php echo set_value('login_id')?>" maxlength="50" autofocus>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="密码" name="password" type="password" value="<?php echo set_value('password')?>" maxlength="50">
                  </div>
                  <input type="submit" class="btn btn-lg btn-success btn-block" value="登录">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
