<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  text-align:center;
}
.menuitem {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Hello Markers!</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem">Link 1</div>
    <div class="menuitem">Link 2</div>
    <div class="menuitem">Link 3</div>
    <div class="menuitem">Link 4</div>
  </div>

  <div class="main">
    <iframe src='https://webchat.botframework.com/embed/dongmybot?s=GJ14s70Rj8o.cwA.4Oo.vqDtk4rKypOUes-WbOIWraDVMH5eWw9Sy2-1_j47YXM'></iframe>
  </div>

  <div class="right">
    <h2>About</h2>
    <p>This is a responsive web page where you can chat with a bot.</p>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright w3schools.com</div>

</body>
</html>
