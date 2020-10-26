<html>
<head>
    <h2>LEMP Stack Test</h2>
</head>
    <body>
    <?php echo '<p>Hello,</p>';

    // Define PHP variables for the MySQL connection.
    $servername = "db";
    $username = "root";
    $password = "mysupersecret";

	$ip = $_SERVER['REMOTE_ADDR'];
	echo "<h2>Client IP Information</h2>";
	echo "Your IP address : " . $ip;
	echo "<br>Your hostname : ". gethostbyaddr($ip) ;

    // Create a MySQL connection.
    $conn = mysqli_connect($servername, $username, $password);

    // Report if the connection fails or is successful.
    if (!$conn) {
        exit('<p>Your connection has failed.<p>' .  mysqli_connect_error());
    }
    echo '<p>You have connected successfully.</p>';
    ?>
</body>
</html>