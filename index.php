<?php
$months = array(
  "September",
  "October",
  "November",
  "December",
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August"
  );
$dudes = array(
  "Isaac Chan" => 0,
  "Conrad Etzel" => 0,
  "David Fauth" => 0,
  "Zach Fuenning" => 0,
  "John Hougard" => 0,
  "Chris Lovdal" => 0,
  "Nirmal Mekala" => 0,
  "Daniel Schmitter" => 0
  
);

  $total_months = 12;
  $month = 2;
  $last_single_month = 0;
  $last_compound_month = 8
?>


<h2>Welcome to OntarioHub!</h2>
<p> This is the website for the Ontario Guy's House. On this page you can make payments for internet. </p>

<h3>Payment Methods</h3>
<p>In the past, we've used PayPal to transfer payments. 
	The only downside to PayPal is that they take a small fee for every payment 
	(usually less than $1). 
</p>
<p> <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> is a free webservice which works great for transfering money. 
	It's both browser-based and available as a mobile application. 
</p>
<p>Either method works, but <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> saves us a few dollars in the long run. 
	You can take a look at the table below to see how much you owe, and either follow the instructions for a PayPal payment or make the appropriate <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> payment to me (<a href="https://venmo.com/Seth-Johnson-6">Seth Johnson</a>)!
</p>
<p>Always feel free to <a href="mailto:sethalanjohnson@gmail.com?Subject=Ontario%20Payments" target="_top">Contact Me</a> with any questions or difficulties concerning these options!</p>


<h3>Payment Breakdown</h3>
<p>Comcast is charging us on the following schedule:
	<table>
		<thead>
			<tr><th>Month</th><th>Fee</th></tr>
		</thead>
		<tbody>
			<?php 
			  for ($i=0; $i < $total_months; $i++) { 
			    echo "<tr><td>";
			    echo $months[$i];
			    echo "</td><td>";
			    if ($i == 1) {
			    	echo "$51.00";
			    } else if($i <= 9) {
			    	echo "$40.00";
			    } else {
			    	echo "$80.00";
			    }
			    echo "</td></tr>"
			  }
		  	?>
  		</tbody>
	</table>
	




<h3>Order Quantity</h3>
<p>The awesome Internet payments can be made monthly, or once for the entire year. You may notice that you will save about 2 dollars by paying for all your internet up-front: This is because there is a small PayPal Service charge (less than a dollar) per transaction. There is no problem at all with paying monthly; I have simply added the fee to the payment price.</p>
<h3>What You're Paying For</h3>
<p> Your rates come out of three things: <p>
<ul>
    <li>Modem ($85) </li>
    <li>One-time fee (Around $90) </li>
    <li>Monthly Internet Subscription (Around $45) </li>
</ul>
<p> Once again, I've rounded up by a few cents for each transaction to cover various expenses including PayPal transaction fees and ComCast payment service fees. If you have any questions or concerns regarding these payments, do not hesitate to email me at <a href="mailto:sethalanjohnson@gmail.com">sethalanjohnson@gmail.com</a>!</p>
<?php
  echo "<h2>Payment for the month of " . $months[$month-1] . ", 2012</h2>";
?>
<p>Note: To avoid any complications Summer may bring with people being gone, I've split everyones fees for June, July, and August between the months of December - May. This way, no one will owe me any money for internet during the three Summer months. If you have a subleaser, you can certainly ask them to pay <em>you</em> for the Summer internet, but as of May all debts for the year will be paid. If you have any questions about this complication, let me know!</p>  
<!--
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J6YVFVGQ4GY2A">
<table>
<tr><td><input type="hidden" name="on0" value="Number of Payments">Number of Payments</td></tr><tr><td><select name="os0">
	       <option value="1 Month">1 Month $7.25 USD</option>
	       <option value="2 Months">2 Months $14.50 USD</option>
	       <option value="3 Months">3 Months $21.75 USD</option>
	       <option value="4 Months">4 Months $29.00 USD</option>
	       <option value="5 Months">5 Months $36.25 USD</option>
	       <option value="6 Months">6 Months $43.50 USD</option>
	       <option value="7 Months">7 Months $50.75 USD</option>
	       <option value="8 Months">8 Months $58.00 USD</option>
	       <option value="9 Months">9 Months $65.25 USD</option>
	       <option value="10 Months">10 Months $72.50 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Your Name">Your Name</td></tr><tr><td><select name="os1">
	       <option value="Jared Grove">Jared Grove </option>
	       <option value="Jeff Hong">Jeff Hong </option>
	       <option value="Nirmal Mekala">Nirmal Mekala </option>
	       <option value="Will Moon">Will Moon </option>
	       <option value="Matt Reynertson">Matt Reynertson </option>
	       <option value="Reed Schaaf">Reed Schaaf </option>
	       <option value="Nathan Tripp">Nathan Tripp </option>
	       <option value="Scott Walter">Scott Walter </option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
--!>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JFF5NYJVTKDKW">
<table>
<tr><td><input type="hidden" name="on0" value="Number of Payments">Number of Payments</td></tr><tr><td><select name="os0">
	       <option value="1 Month">1 Month $10.88 USD</option>
	       <option value="2 Months">2 Months $21.75 USD</option>
	       <option value="3 Months">3 Months $32.63 USD</option>
	       <option value="4 Months">4 Months $43.50 USD</option>
	       <option value="5 Months">5 Months $54.38 USD</option>
	       <option value="6 Months">6 Months $65.25 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Your Name">Your Name</td></tr><tr><td><select name="os1">
	       <option value="Jared Grove">Jared Grove </option>
	       <option value="Jeff Hong">Jeff Hong </option>
	       <option value="Nirmal Mekala">Nirmal Mekala </option>
	       <option value="Will Moon">Will Moon </option>
	       <option value="Matt Reynertson">Matt Reynertson </option>
	       <option value="Reed Schaaf">Reed Schaaf </option>
	       <option value="Nathan Tripp">Nathan Tripp </option>
	       <option value="Scott Walter">Scott Walter </option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>









<table border="1">
<tr>
  <th style='width:350px'/>
  <?php 
  for ($i=0; $i < $total_months; $i++) { 
    if ($i != $month-1) {
       if ($i <= $last_compound_month) {
       	  echo "<th style='width:100px;'>";
       } else {
       	  echo "<th style='width:100px;background-color:LightGrey'>";
       }
    } else {
     echo "<th style='width:100px;background-color:OrangeRed'>";

    }
    echo $months[$i] . "</th>"; 
  }
  ?>
</tr>

<?php 
  
  foreach ($dudes as $name => $payments) {
    echo "<tr>";
    echo "<th align='right'>" . $name . "</th>";
    for ($i=1; $i <= $total_months; $i++) { 
      if ($i <= $payments) {
        echo "<td align='center' style='background-color:GreenYellow'>PAID</td>";

      } else if ($i > $last_compound_month+1 && $i - ($last_compound_month+1) <= ($payments-$last_single_month-1)/2 ) {
        //Been paid for
        echo "<td align='center' style='background-color:GreenYellow'>(PAID)</td>";

	 

      } else if($i > $last_compound_month+1 && $i - ($last_compound_month+1) <= ($payments-$last_single_month)/2 ){
      	 echo "<td align='center' style='background:-moz-linear-gradient(left center, GreenYellow 50%, LightGrey 50%);
    background:-o-linear-gradient(left center, GreenYellow 50%, LightGrey 50%);
    background:-webkit-gradient(linear, left top, right top, color-stop(50%,GreenYellow), color-stop(50%,LightGrey));
    background:linear-gradient(left center, GreenYellow 50%, LightGrey 50%);'></td>";
      } else {
        //Has not been paid for
        if ($i <= $month) {
          //Due
          echo "<td align='center' style='background-color:OrangeRed'>DUE!</td>";
        } else if ( $i <= $last_compound_month+1 ) {
          //not yet due
          echo "<td style='background-color:White'/>";
        } else {
	  echo "<td style='background-color:LightGrey'/>";
	}
      } 
    }
  }
  ?>

</table>
