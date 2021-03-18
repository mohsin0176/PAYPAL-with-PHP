<?php 
include "config.php";

?>

<form method="POST" action="<?php echo $config['posturl']; ?>">
	
<input type="hidden" name="upload" value="1" />
<input type="hidden" name="return" value="<?php echo $config['returnurl'] ?>"/>
<input type="hidden" name="cmd" value="_cart"/>
<input type="hidden" name="business"value="<?php echo $config['business'] ?>"/>


<input type="hidden" name="item_name_02" value="Product 2" />
<input type="hidden" name="item_number_02" value="p2"/>
<input type="hidden" name="amount_2" value="3"/>
<input type="hidden" name="quantity_2"value="4"/>

<input type="hidden" name="item_name_03" value="Product 3" />
<input type="hidden" name="item_number_03" value="p3"/>
<input type="hidden" name="amount_3" value="3"/>
<input type="hidden" name="quantity_3"value="2"/>

<input type="image" src="https://www.google.com/search?q=paypal+images&client=firefox-b-d&sxsrf=ALeKk01nAdiQYIjRK6L5QALnjRTpaUZ4Rg:1616080646040&tbm=isch&source=iu&ictx=1&fir=p0PKhDcHYAk7yM%252CjG8r90AXLQLLjM%252C_&vet=1&usg=AI4_-kSndLMofMvCWhTkX5K1kVmlUGluIg&sa=X&ved=2ahUKEwiEkNfGkbrvAhUWeisKHZupA5EQ9QF6BAgBEAE&biw=1024&bih=654#imgrc=p0PKhDcHYAk7yM">

</form>