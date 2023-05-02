<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel= "stylesheet" href="style.css">
</head>
<body>
<div class = "container"> 
<h1 class="top-heading">ToDo List Application</h1>
<form action="handleAction.php" method="post">
<div class="input-container">
<input type="text" name="inputBox" id="inputBox">
<button type="submit"  name = "add" id = "add">ADD</button>
</div>
<ul class="list" >
<li class="item">
    <p class="it">Item1</p>
    <div class="buttons">
    <button type="submit" name=" checked" id="check">Check</button>
    <button type="submit" name=" deleted" id="delete">Delete</button>
    </div>
</li>
</ul>
<hr>
<ul class="list" >
<li class="item">
    <p class="it">Item1</p>
   
    <div class="buttons">
    <button type="submit" name="checked " id="check">Check</button>
    <button type="submit" name=" deleted" id="delete">Delete</button>
    </div>
</li>
</ul>
</form>
</body>
</html>


