<html>
<body>

<div>
<h3>You have submitted the following to the server:</h3>
Your name:  <?php echo $_POST["name"];?> <br>
Your email: <?php echo $_POST["email"];?> <br> 
</div>

<div>
<h3>Your result:</h3>
<?php echo $_POST["num1" + "num2"];?> <br>
</div>

</body>       

</html>
