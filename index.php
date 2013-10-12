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
  "Conrad Etzel" => 9,
  "David Fauth" => 0,
  "Zach Fuenning" => 0,
  "John Hougard" => 9,
  "Chris Lovdal" => 9,
  "Nirmal Mekala" => 0,
  "Daniel Schmitter" => 0
  
);

  $total_months = 12;
  $month = 2;
  $last_single_month = 0;
  $last_compound_month = 8
?>


<h2>Welcome to OntarioHub!</h2>
<p> This is the website for the Ontario Guy's House. On this page you can make payments for Internet. </p>

<h3>Payment Methods</h3>
<p>In the past, we've used PayPal to transfer payments. 
	The only downside to PayPal is that they take a small fee for every payment 
	(usually less than $1). 
</p>
<p> <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> is a free web-service which works great for transferring money. 
	It's both browser-based and available as a mobile application. 
</p>
<p>Either method works, but <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> saves us a few dollars in the long run. 
	You can take a look at the table below to see how much you owe, and either follow the instructions for a PayPal payment or make the appropriate <a href="https://venmo.com/i/seth-johnson-6">Venmo</a> payment to me (<a href="https://venmo.com/Seth-Johnson-6">Seth Johnson</a>)!
</p>
<p>Always feel free to <a href="mailto:sethalanjohnson@gmail.com?Subject=Ontario%20Payments" target="_top">contact me</a> with any questions or difficulties concerning these options!</p>


<h3>Payment Breakdown</h3>
<p>Comcast is charging us on the following schedule:
	<table>
		<thead>
			<tr><th>Month</th><th>Fee</th></tr>
		</thead>
		<tfoot>
			<tr><th></th><th>$611.00</th></tr>
		</tfoot>
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
			    echo "</td></tr>";
			  }
		  	?>
  		</tbody>
	</table>
</p>
<p> If we divide this number by 9 and 12, we get $5.66 a person per month. 
	However, since there's no telling who will be where this Summer, I've made a policy where all Summer payments are split amongst the school months.
	This way, when May comes, I will have collected all the money for the year. 
	If you don't plan on being here for the Summer, you can make arrangements with your sub-leaser to pay you back whatever you deem appropriate.
</p>
<p> Taking this policy into account, the exact cost for Internet per month for 9 months will be $7.54 a person.
	I'm going to round this up to $10 a month, taking an approximately $2.50 contribution from each inhabitant for use towards paper towels, dish soap, and any other house-related expenses.
	If you've spent money on something that you think your house or your floor needs, talk to me and I can potentially reimburse you accordingly. 
</p>
<p> So in conclusion, we're charging $10 per person per month for 9 months. </p>
	




<h3>Order Quantity</h3>
<p>The Internet payments can be made monthly, or once for the entire year. 
	If you're paying with Venmo, please indicate that you're paying for several months at once.</p>
<p> Once I've received and verified your payment, I'll update the table below manually.</p>

<?php
  echo "<h2>Payment for the month of " . $months[$month-1] . ", 2013</h2>";
?>
<p> <button type="button" onclick="location.href='https://venmo.com/i/seth-johnson-6';">Pay with Venmo!</button></p>
<p>Or, pay with PayPal (But really, you should use Venmo):</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="P94FMRYEL7MWJ">
<table>
<tr><td><input type="hidden" name="on0" value="Number of Payments">Number of Payments</td></tr><tr><td><select name="os0">
	<option value="1 Month">1 Month $10.00 USD</option>
	<option value="2 Months">2 Months $20.00 USD</option>
	<option value="3 Months">3 Months $30.00 USD</option>
	<option value="4 Months">4 Months $40.00 USD</option>
	<option value="5 Months">5 Months $50.00 USD</option>
	<option value="6 Months">6 Months $60.00 USD</option>
	<option value="7 Months">7 Months $70.00 USD</option>
	<option value="8 Months">8 Months $80.00 USD</option>
	<option value="9 Months">9 Months $90.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>









<h2> Payment Status </h2>
<p> Note that this Table will be updated manually by Seth as soon as he sees the dough.</p>
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

	 

      } else if($i > $last_compound_month+1 && $i - ($last_compound_month+1) <= ($payments-$last_single_month)/3 ){
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
