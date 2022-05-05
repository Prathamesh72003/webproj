
<?php
include '../db.php';
session_start();


header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.



if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		if (isset($_SESSION['cust_id'])) {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//$insert = mysqli_query($conn, "INSERT into cart ");
		$cust_id = $_SESSION["cust_id"];
		$sql = "SELECT * from cart where cust_id = '$cust_id'";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$product_id = $row['product_id'];
				$quantity = $row['quantity'];
				$total = $row['total'];
				echo $quantity+" ";
				 $sql = mysqli_query($conn, "INSERT into orders ( `cust_id`, `product_id`, `quantity`, `amount`) values ('$cust_id', 
				 '$product_id', '$quantity', '$total')");

				

			}
			echo "
			<script>
			window.open('/webproj/checkout/success.php', '_self');
			</script>";
			}
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		else{
			echo "Wrong!";
		}
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "
		<script>
		window.open('/webproj/checkout/error.php', '_self');
		</script>";
		
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
}
?>