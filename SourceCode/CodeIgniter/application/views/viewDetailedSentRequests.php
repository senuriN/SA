<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/img/taro/favicon.ico")?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Index Page</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="<?php echo base_url("assets/css/taro/bootstrap.min.css" )?>" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="<?php echo base_url("assets/css/taro/animate.min.css")?>" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href= "<?php echo base_url("assets/css/taro/light-bootstrap-dashboard.css") ?>" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?php echo base_url("assets/css/taro/demo.css")?>" rel="stylesheet" />

          <!-- Select2 -->
          <link rel="stylesheet" href="<?php echo base_url("assets/plugins/select2/select2.min.css")?>">
	
          <!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url("assets/css/taro/pe-icon-7-stroke.css")?>" rel="stylesheet" />
        
        
<!--         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-color="" data-image="<?php echo base_url("assets/img/taro/sidebar.png") ?>">

		<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


		<div class="sidebar-wrapper">
			<div class="main-header">
				<a href="http://www.creative-tim.com" class="logo">
					<img width="80%" src="<?php echo base_url("assets/img/taro/sliit.png")?>" >
				</a>
			</div>

           <ul class="nav" id="sideBarMenu">
             
                    <li> <a href="<?php echo base_url("/index.php/RequestController/index"); ?>">
                            <i class="fa fa-envelope-o"></i> <span> <small> Create Requests</small></span>
                        </a>
                    </li>
                    <li  class="active"><a href="<?php echo base_url("/index.php/RequestController/sentRequests"); ?>">
                            <i class="fa fa-file-text-o"></i> <span> <small> View Sent Requests </small> </span>
                        </a>
                    </li>
                   
                </ul>


		</div>
	</div>


	<div class="main-panel" style="overflow: hidden;">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" onclick="displayHomePage()">Home</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-dashboard"></i>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-globe"></i>
								<b class="caret">   
                                                                    </b>
                                                                <span class="notification">
                                                                   <?php echo $notifyCount[0]['counts'] ?>
                                                                </span>
							</a>
							<ul class="dropdown-menu">
                                                            
                                                            <?php foreach ($title as $t): ?>
                                                            <li onclick="directToPage(<?php echo $t['id'] ?>)"> <a> <?php echo $t['title'] ?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li>
							<a href="">
								<i class="fa fa-search"></i>
							</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a onclick="displayLoginPage()">
								Log In
							</a>
						</li>
						<li>
							<a onclick="loadUserSidebar()">
								Register
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Dropdown
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		
            <div class="row" style="height:40px;"> </div>             
                            
                            
                            <div class="content" style ='height:700px'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"> Request Details </h4>
                            </div>
                            <div class="content">
                                <form>
                                  <div class="row">
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Request ID</label>
                                                <input type='text' class="form-control" id="recId" name="recId" value="<?php echo $request[0]['rid'] ?>" disabled />     
                                            </div>
                                        </div>
                                     </div>
                                
                                <div class="row">
                                      
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address To</label>
                                                <input type='text' class="form-control" id="sname" name="sname" value="<?php echo $receiver[0]['name'] ?>" disabled/>     
                                            </div>
                                        </div>
                                    
                                    </div>
                                
                                
                                
                                    <div class="row">
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <input type='text' class="form-control" id="type" name="type" value="<?php echo $request[0]['type'] ?>" disabled/>     
                                            </div>
                                        </div>
                                    </div>
                                    
                                   <div class="row">
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Request Status</label>
                                                <input type='text' class="form-control" id="type" name="type" value="<?php echo $request[0]['status'] ?>" disabled/>     
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message </label>
                                                <textarea rows="5" class="form-control" id="txtMsg"  name="txtMsg" disabled style="float:left" > 
                                               
                                                 <?php echo $request[0]['message'] ?>
                                                
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                     
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>


     