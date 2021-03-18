<?php

error_reporting(0);
include"paypal.php";
$result=verifyWithPaypal($_REQUEST['tx']);

?>

First Name:<?php echo $result['first_name'];?>
<br>
Last Name:<?php echo $result['last_name'];?>
<br>
Payment Status:<?php echo $result['payment_status'];?>
<br>
Business:<?php echo $result['business'];?>
<br>
Payer Email:<?php echo $result['payer_email'];?>
<br>
Payment Gross:<?php echo $result['payment_gross'];?>
<br>
Currency:<?php echo $result['mc_currency'];?>
<br>
Address Street:<?php echo $result['address_street'];?>
<br>
Address City:<?php echo $result['address_city'];?>
<br>
Address State:<?php echo $result['address_state'];?>
<br>
Address Country:<?php echo $result['address_country'];?>
<br>
Transaction ID:<?php echo $result['transaction_id'];?>
<br>
Payment Fee:<?php echo $result['payment_fee'];?>
<br>
<b>List Products</b>

<?php

foreach ($result['listProducts'] as $product)
{
 
echo '<br> Product ID'.$product['item_number'];
echo '<br> Product Name'.$product['item_name'];
echo '<br> Quantity:'.$product['quantity'];
echo '<br> Gross:'.$product['mc_gross']; 
echo '<br> ==========================';	
}

?>
