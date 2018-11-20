<div class="shippingForm">
<h1 class="shipping-title">Shipping Information</h1>
	<form method="post" action="index.php?controller=checkout&action=payment">
		<div class="shipping-holder">
			<label class="required" for="firstName">First Name</label>
			<input class="billingField" type="text" name="firstName" id="billingfirstName" placeholder="Tyler">

			<label class="required" for="lastname">Last Name</label>
			<input class="billingField" type="text" name="lastname" id="billinglastname" placeholder="Smith">

			<label class="required" for="streetAddress">Street Address</label>
			<input class="billingField" type="text" name="streetAdress" id="billingstreetAdress" placeholder="1234 Granville St">

			<label class="required" for="city">City</label>
			<input class="billingField" type="text" name="city" id="billingCity" placeholder="Vancouver">

			<label class="required" for="country">Country</label>
			<input class="billingField" type="text" name="country" id="billingCountry" placeholder="Canada">
			
			<div class="float">
				<label class="required" for="state">State/Province</label>
				<input class="billingField stateZip" type="text" name="stateProvince" id="billingStateProvince" placeholder="BC">
			</div><!--float-->
			
			<div class="float">
				<label class="required zipCode" for="zipCode">Zip Code:</label>
				<input class="billingField stateZip zipCode" type="text" name="zipCode" id="billingzipCode" placeholder="V5R 123">
			</div><!--float-->

			<label class="required" for="email">Email Address</label>
			<input class="billingField" type="text" name="email" id="billingemail" placeholder="tylersmith@gmail.com">
		</div><!--shipping-holder-->
	</form>
</div><!--shippingForm-->
	
<div class="billingForm">
	<h1 class="billing-title">Billing Information</h1>

	<span>
		<input id="autoFill" type="checkbox" name="sameAsShipping" class="autoFill">
		<p>Same as shipping information</p>
	</span>
	
	<!-- <div class="shipping-holder">
		<label class="required" for="firstName">First Name</label>
		<input type="text" name="shippingfirstName" id="shippingfirstName" placeholder="Tyler">

		<label class="required" for="lastname">Last Name</label>
		<input type="text" name="shippinglastname" id="shippinglastname" placeholder="Smith">

		<label class="required" for="streetAdress">Street Address:</label>
		<input type="text" name="shippingstreetAdress" id="shippingstreetAdress" placeholder="1234 Granville St">

		<label class="required" for="zipCode">Zip Code:</label>
		<input type="text" name="shippingzipCode" id="shippingzipCode" placeholder="V5R 123">
	</div><!--shippingHolder-->

	<a href="" class="btn btn-primary continue-to-payment">Continue to payment</a>
</div><!--billingForm-->