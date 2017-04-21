<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}


.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}


.closebtn:hover {
    color: black;
}
</style>

<div class ="row">
  <div class = "container col-xs-12">
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Missed call from John Doe at 8:25pm. <a href="phone.php" class="alert-link">Click here</a> to make a call.
    </div>
  </div>
</div>
<div class ="row">
  <div class = "container col-xs-12">
    <div class="alert" style="background-color: #000000;">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Missed text from Bob Smith at 9:00am. <a href="text.php" class="alert-link">Click here</a> to send a text.
    </div>
  </div>
</div>
<div class = "row">
  <div class = "container col-lg-12">
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3" style ="text-align:center">Phone System</h1>
    <p style="text-align:center; padding-top:1%; padding-bottom:1%;">Welcome to the Phone System!</p>
    <p class="lead">To make a call, select the "call" button. To send a text,
      select the "text" button. To see further instructions on how to use this system, select the "manual button." </p>
  </div>
</div>

  </div>
</div>
<div class = "row">
<div class = "col-lg-12 text-center">
  <div class = "container col-lg-4" style = "padding-top: 5%;">
  <a class="btn btn-large btn-info" href="phone.php" style= "height: 20%; width: 100%;" >Call</a>
</div>
<div class = "container col-lg-4" style = "padding-top: 5%;">
  <a class="btn btn-large btn-info" href="text.php" style= "height: 20%; width: 100%;" >Text</a>
</div>
<div class = "container col-lg-4" style = "padding-top: 5%;">
  <a class="btn btn-large btn-info" href="settings.php" style= "height: 20%; width: 100%;" >Settings</a>
</div>
</div>
</div>
<div class = "row">
  <div class = "container col-lg-12" style = "padding-top: 3%;">
  <a class="btn btn-large btn-info" href="manual.php" style= "height: 5%; width: 100%;" >Manual</a>
  </div>
</div>
