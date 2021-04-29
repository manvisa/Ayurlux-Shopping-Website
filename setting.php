<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <nav class="navbar  navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                <a class="navbar-brand" href="#"><img src="picture/logo.png" width="30" height="30" alt=""></a>
                <a href="#" class="navbar-brand navbar-left"><b>AyurLux</b></a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                    <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                     <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>
            </div>
        </div>
        </nav>
       <div class="container-fluid panel-margin">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2><b>Change Password</b></h2>
                        <form>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="password" required>
                            </div>
                             <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="password" required>
                            </div>
                            <button type="button" name="change" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
         <footer>
            <div class="container">
                Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000   
            </div>
        </footer>
    </body>
</html>
