<?php

include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Word Search</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
      body {
  background-color: lightblue;
}
      .navbar-brand{
        font-size: 1.8em;
      }
      #topContainer {
        background-image: url("background3.jpg");
        height: 400px;
        width: 100%;
        background-size: cover;
      }
      #topRow{
        margin-top: 100px;
        text-align: center;

      }
      #topRow h1{
        font-size: 300%;
      }
      .bold{
        font-weight: bold;
      }
      .marginTop{
        margin-top: 30px;
      }
      .center{
        text-align: center;
      }
      .title{
        margin-top: 100px;
        font-size: 300%;
      }
      #footer{
        background-color:#B0D1FB;
        padding-top: 70px;
        width: 100%; 

      }
      .marginBottom{
        margin-bottom: 30px;
      }
      .appstoreImage{
        width:250px;
      }
      .list{
        color:black;
      }
    </style>

  </head>
  <body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          
        </button>

        <a class="navbar-brand">Parallel Text Search Application</a>
      </div>
        <div class="collapse navbar-collapse">
        
        </div>
    </div>
  </div>

<br>

<br>
  <div class="container contentContainer" id="topContainer">

    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topRow">
          <h1 class="marginTop" style="font-family:courier;font-weight:bold;font-size:80px;">Parallel Text Search</h1>

          
          <form class="marginTop" action="result.php" method="GET">
            
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" placeholder="Search term goes here...." class="form-control" name="query" />
              </div>
              <input type="submit" class="btn btn-success btn-lg marginTop" />
            

          </form>

        </div>
    </div>
    
  </div>

  
  </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(".contentContainer").css("min-height",$(window).height());
    </script>
  </body>
</html>
