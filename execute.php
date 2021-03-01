<html>
<body>

<div>
<h3>You have submitted the following to the server:</h3>
Your name:  <?php echo $_POST["name"];?> <br>
Your email: <?php echo $_POST["email"];?> <br> 
</div>

<div>
<h3>Your result:</h3>
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $num1 = $_POST['num1'];  
        $num2 = $_POST['num2'];  
        $sum =  $num1 + $num2;     
        echo "The sum of $num1 and $num2 is: ".$sum;   
}  
?>  
</div>

</body>       

</html>
