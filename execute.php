<html>
<body>

<div>
<h3>You have submitted the following to the server:</h3>
Your name:  <?php echo $_POST["name"];?> <br>
Your email: <?php echo $_POST["email"];?> <br> 
</div>

<?php
$host = "ec2-34-192-58-41.compute-1.amazonaws.com";
$db = "de7ic3hku7a7jf";
$port = "5432";
$user = "msklsjfnqbydjb";
$pass = "d0788f073d46f029bd5ef53450d31329ef669b416d7b063182cbbbef0789c74d";
$ssl = "require";

$con = pg_connect("dbname=$db host=$host port=$port user=$user password=$pass sslmode=$ssl");

if (!$con) {
    echo "Database connection failed.";
} else {
     echo "Database connection success.";
}



?>

</body>       

</html>
