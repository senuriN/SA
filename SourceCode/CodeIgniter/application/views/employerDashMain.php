<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 9/26/2016
 * Time: 8:18 AM
 * Author : Dasuni Kumarapperuma
 * Copyrights : Industry Management SLIIT
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/taro/favicon.ico');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Index Page</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/taro/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/taro/animate.min.css')?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/css/taro/light-bootstrap-dashboard.css')?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/taro/demo.css')?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/taro/pe-icon-7-stroke.css')?>" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="" data-image="<?php echo base_url('assets/img/taro/sidebar.png')?>">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    <img src="<?php echo base_url('assets/img/taro/sliit.png')?>" style="width: 100%; height: 100%; z-index: -1">
                </a>
            </div>

            <ul class="nav" id="sideBarMenu">
                <li><a href="#">Post A Vacancy</a></li>
                <li><a href="#">Feedback</a> </li>
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
                                <b class="caret"></b>
                                <span class="notification">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
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




