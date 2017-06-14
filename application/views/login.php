<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	.jumbotron{
    		background-color: skyblue;
    	}
    </style>

</head>

<body>

  <div class="row">
    <div class="container">
    <div class="col-md-12 col-sm-12 text-center">
      <br><br><br><br><br>
    </div>
    <div class="row">
    <div class="col-md-4">      
    </div>
      
    <div class="col-md-4">      
          <div class="panel panel-default">
              <div class="panel-heading text-center">LOGIN</div>
              <div class="panel-body">
              <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('login/log_in'); ?>
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="">
              <br>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="">
              <br>
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                <a href="<?php echo base_url(); ?>index.php/signup">Sign Up</a>
                </form>
              </div>
            </div>  
    </div>

    <div class="col-md-4">      
    </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <br><br>
    </div>
    </div>
  </div>

</body>

</html>
