<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class = "row">
  <div class = "container col-xs-1">
    <a class="btn btn-large btn-info" href="main.php" style = "width: 100%">Home</a>
  </div>
  <div class = "container col-xs-1">
    <a class="btn btn-large btn-info" href="phone.php" style = "width: 100%">Calls</a>
  </div>
</div>
<div class = "row" style = "padding-top: 8%;">
  <div class = "container col-xs-12">
    <div class = "container col-xs-8 col-xs-offset-2">
      <input type="text" class="form-control" placeholder="Current call recipient, displayed here" aria-describedby="basic-addon1" style = "text-align:center; width: 100%; height:10%">
    </div>
</div>
</div>
<div class = "row" style = "padding-top: 5%;">
  <div class = "container col-xs-4 col-xs-offset-2">
    <button style= "height: 10%; width: 100%;" type="button" class="btn btn-large btn-info">Hold</button>
  </div>

  <div class = "container col-xs-4">
    <button style= "height: 10%; width: 100%;" type="button" class="btn btn-large btn-info">Mute</button>
  </div>
</div>

<div class = "row" style = "padding-top: 2%;">
  <div class = "container col-xs-4 col-xs-offset-2">
    <button style= "height: 10%; width: 100%;" type="button" class="btn btn-large btn-info">Speaker Phone</button>
  </div>

  <div class = "container col-xs-4">
    <h3 style = "text-align: center;"> Volume </h3>
    <div class="range-slider" style = "padding-top:1%;">
      <input class="range-slider__range" type="range" value="0" min="0" max="100">
    </div>
  </div>
</div>

<div class = "row">
  <div class = "container col-xs-4 col-xs-offset-4" style= "padding-top: 2%;">
    <button style= "height: 10%; width: 100%;" type="button" class="btn btn-large btn-info">Number Pad</button>
  </div>
</div>
