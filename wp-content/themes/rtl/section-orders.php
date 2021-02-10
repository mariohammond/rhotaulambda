<?php
    $soldout = (isset($_GET['soldout']));
    if($soldout == "yes") {
        echo "<div class='soldout' style='background: #cfb53b; padding: 7px; margin-bottom: 20px;'><h1>For Barn Dance ticket inquiries, contact John Purnell at <a style='text-decoration:underline;' href='mailto:purnell_john@yahoo.com'>purnell_john@yahoo.com</a>.</h1></div>";

        echo "<style>form { display: none; }</style>";
    }
?>

<h1>Registration - 10th Annual RTL Barn Dance</h1>
<p>Thank you for supporting the Rho Tau Lambda foundation in partnership with the Rho Tau Lambda Chapter of Alpha Phi Alpha Fraternity, Incorporated seated in Baltimore, Maryland. This year marks the 10th annual Barn Dance foundation fundraiser. The Barn Dance was created in 2008 to pay homage to the Barn Dance fundraiser parties held at Morgan State University in the 1960's. This event funds four college scholarships for Baltimore City High School graduating male senior students. This affair is a jeans and T-Shirt affair. This year tickets will be <strong>$55 dollars</strong>, open bar and open buffet style. There will be door prizes and raffles. Your link to submit payment for this event will follow in the next section.</p>

<form class="order-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="WVC69M9K38BTU">

    <h2>First Name</h2>
    <input type="text" name="first_name" required>

    <h2>Last Name</h2>
    <input type="text" name="last_name" required>

    <h2>Phone Number</h2>
    <input type="text" name="telephone" required>

    <h2>Email Address</h2>
    <input type="email" name="email" required>

    <input type="hidden" name="currency_code" value="USD">

    <input class="button" type="submit" value="Submit">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>