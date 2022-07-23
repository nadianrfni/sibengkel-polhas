<?php
if($this->session->has_userdata('username')) {
  redirect('main');
}
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Area</title>
    <meta name="description" content="Login" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/DateTimePicker.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" /> 
    <link href="<?php echo base_url();?>assets/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
 
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
 <style type="text/css">
   .login-layout{
    background-color:#E6E6FA}.login-layout .main-container:before{display:none}.login-layout .main-content{margin-left:0!important;margin-right:0!important;min-height:100%;padding-left:15px;padding-right:15px}.login-layout label{margin-bottom:11px}.login-layout .widget-box{visibility:hidden;position:fixed;z-index:-5;border-bottom:none;box-shadow:none;padding:6px;background-color:#394557;-moz-transform:scale(0,1) translate(-150px);-webkit-transform:scale(0,1) translate(-150px);-o-transform:scale(0,1) translate(-150px);-ms-transform:scale(0,1) translate(-150px);transform:scale(0,1) translate(-150px)}.login-layout .widget-box.visible{visibility:visible;position:relative;z-index:auto;-moz-transform:scale(1,1) translate(0);-webkit-transform:scale(1,1) translate(0);-o-transform:scale(1,1) translate(0);-ms-transform:scale(1,1) translate(0);transform:scale(1,1) translate(0);transition:transform .3s ease;-moz-transition:-moz-transform .3s ease;-webkit-transition:-webkit-transform .3s ease;-o-transition:-o-transform .2s ease}.login-layout .widget-box .widget-main{padding:16px 36px 36px;background:#F7F7F7}.login-layout .widget-box .widget-main form{margin:0}.login-layout .widget-box .widget-body .toolbar>div>a{font-size:15px;font-weight:400;text-shadow:1px 0 1px rgba(0,0,0,.25)}.login-box .forgot-password-link{color:#FE9}.login-box .user-signup-link{color:#CF7}.login-box .toolbar{background:#5090C1;border-top:2px solid #597597}.login-box .toolbar>div{width:50%;display:inline-block;padding:9px 0 11px}.login-box .toolbar>div:first-child{float:left;text-align:left}
    .kiri{
      align-items: left;
    }
    .kanan{
      align-items: right;
    }
    .lengkung{
      border-radius: 22px;
    }

 </style>
  </head>

  <body class="login-layout">
    
    <div class="kiri">
        <img width="18%" src="<?php echo base_url(); ?>assets/images/yhc.png">
        <img width="22%" src="<?php echo base_url(); ?>assets/images/polhas.png">
       </div>
     

       </div>
       <div>
      

    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
            <div class="center">
               <h3>
              <i class="ace-icon fa fa-gears green"></i>
                 <span class="red"><b>Sistem Management Inventaris</b></span> <br>
                  <span id="id-text2"><b>Bengkel Polhas</b></span></center>
                </h3>
                
               <!-- <h4 class="blue" id="id-company-text">&copy; 2022</h4>-->
              </div>
            <br>
              <div class="space-8"></div>

              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-key green"></i>
                        Login Area
                      </h4>

                      <div class="space-6"></div>

                      <form method="post" action="<?php echo base_url();?>main/login">
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>
                          
                          <div class="space"></div>
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <div class="clearfix">

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary " name="login">
                               
                              <span class="bigger-110"><b>Login</b></span>
                            </button>
                            <small>Lupa Password ??? <a href="<?php echo base_url();?>admin1">Ganti Password</a></small>
                          </div>

                          <div class="space-4"></div>
                        </fieldset>
                      </form>
                    </div><!-- /.widget-main -->
                  </div><!-- /.widget-body -->
                </div><!-- /.login-box -->
                </div>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div><!-- /.main-container -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-latest.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/DateTimePicker.js"></script>
    <script src="<?php echo base_url();?>assets/fileinput/js/fileinput.js" type="text/javascript"></script>
  </body>
  </body>
</form>

