<?php


//////////////////trocar!!!!
$servername = "mysql.hostinger.com.br";
$username = "u316943968_admin";
$password = "gamA1978@@";
$dbname = "u316943968_gama";
//////////////////
$timestamp = mktime(date("H")-3, date("i"), date("s"));
$hora = gmdate("H:i:s", $timestamp);
$data = date('Y-m-d');

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ipaddress = getUserIP();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


   if($result = $conn->query("SELECT * FROM gama WHERE email='$_POST[inptemail]'")) {
	   $row_cnt = $result->num_rows;
	   if ($row_cnt > 0) {
		die('Já existe um usuário cadastrado com esse email!');
		echo("<script>
    window.location = 'http://mamaealerta.com';
</script>");
	   } else {
		   $sql = "INSERT INTO gama (nome, email, ipaddress, data, hora)
VALUES ('$_POST[inptnome]', '$_POST[inptemail]', '$ipaddress', '$data', '$hora')";

	   }
   }



if ($conn->query($sql) === TRUE) {
header('Content-type: application/pdf');

header('Content-Disposition: attachment; filename="ebook_cuidados_gestacao.pdf"');

readfile('ebook_cuidados_gestacao.pdf');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

 