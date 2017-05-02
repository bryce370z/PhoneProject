<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class = "row">
  <div class = "container col-xs-12">
    <div class = "container col-xs-1">
      <div class="dropdown">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="main.php">Home</a></li>
      <li><a href="phone.php">Calls</a></li>
      <li><a href="text.php">Texts</a></li>
      <li><a href="directory.php">Directory</a></li>
      <li><a href="manual.php">Manual</a></li>
      <li><a href="settings.php">Settings</a></li>
    </ul>
  </div>
    </div>
  </div>
</div>

<div class = "row">
  <div class = "container col-xs-12" style = "padding-bottom: 3%; padding-top: 5%;">
    <div class = "container col-xs-4">
  <input type="text" class="form-control" placeholder="Block someone from calling you" aria-describedby="basic-addon1" style = "width: 105%; height:8%">
  <div class = "row">
    <div class = "container col-xs-12 col-xs-offset-4">
        <a href="blocked.php">Blocked Recipients</a>
    </div>
  </div>
</div>
<div class = "container col-xs-2">
  <button style= "height: 8%; width: 100%;" type="button" class="btn btn-large btn-info">Block/Unblock</button>
</div>
</div>
</div>

<div class = "row">
  <div class = "container col-xs-12" style = "padding-bottom: 2%;">
    <div class = "container col-xs-4">
  <input type="text" class="form-control" placeholder="Add someone to the directory" aria-describedby="basic-addon1" style = "width: 105%; height:8%">
</div>
<div class = "container col-xs-2">
  <button style= "height: 8%; width: 100%;" type="button" class="btn btn-large btn-info">Add</button>
</div>
</div>
</div>

<div class = "row">
  <div class = "container col-xs-12" style = "padding-left: 2%;">
      <h2>General Settings</h2>
    <div class="checkbox">
      <label><input type="checkbox" value="">Missed Call Notifications</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Recieved Text Notifications</label>
    </div>
      <h4 style = "padding-top: 1%;"> Screen Brightness: </h4>
      <div class="range-slider" style = "width: 18%;">
        <input class="range-slider__range" type="range" value="0" min="0" max="100">
      </div>
    </div>
</div>

<div class = "row">
  <div class = "container col-xs-12" style = "padding-left: 2%;">
      <h2> Text Settings </h2>
    <div class="checkbox">
      <label><input type="checkbox" value="">Speech to Text</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Spell Check</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Read Texts Audibly</label>
    </div>
  </div>
</div>
<div class = "row">
  <div class = "container col-xs-12" style = "padding-left: 2%;">
      <h2> Call Settings </h2>
      <h4 style = "padding-top: 1%;"> Call Volume: </h4>
      <div class="range-slider" style = "width: 18%;">
        <input class="range-slider__range" type="range" value="0" min="0" max="100">
      </div>
      <div class="checkbox" style = "padding-top: 1%;">
        <label><input type="checkbox" value="">Display Incoming Callers Name</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Display Incoming Callers Number</label>
      </div>

    </div>
  </div>
</div>
