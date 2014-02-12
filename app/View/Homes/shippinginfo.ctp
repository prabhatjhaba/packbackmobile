<script>
 $(document).ready(function(){	
	$("#isbnSubmit").validate({
        // Specify the validation rules
        rules: {          
            firstname: {
				required: true,
				minlength: 4
			},
			lastname: {
				required: true,
				minlength: 4
			},
			address: {
				required: true
			},
			city: {
				required: true,
			},
			state: {
				required: true
			},
			zip: {
				required: true,
				number: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				number: true,
				minlength:10,
				maxlength:10
			},
        },

			messages: {
			firstname:"Please Enter your firstname",
			lastname: "Please Enter your lastname",
			address: "Please Enter your address",
			city: "Please Enter your city",
			state: "Please Enter your state",
			zip: {
					required: "Please Enter your zip code",
					number: "should be numeric"
				},
			email: {
					required: "Please Enter Your Email address",
					email: "Your email address must be in the format of name@domain.com"
				},
			phone: {
					required: "Please enter your phone number",
				},
			
			}
   });
      });
</script>
<div class="yellowBox innerShadow minPAdding">
    <p>Sell Textbooks > Shipping label</p>
  </div>
  <div class="shippingLabel">
  <form id="isbnSubmit" name="isbnSubmit" action="success.php" method="post">
        <h3>Custom Shipping Label</h3>
		<div class="innerColom  yellowborderBot">
			<h3>Shipping Address</h3>
			<a href="">Free Shipping!</a>
			<div class="clr"></div>
			<input type="hidden" class="textBox" name="price" id="price" value="<?php echo $_POST['price'];?>">
			<input type="hidden" class="textBox" name="shop_id" id="shop_id" value="<?php echo $_POST['shop_id'];?>">
			<input type="hidden" class="textBox" name="book_isbn" id="book_isbn" value="<?php echo $_POST['book_isbn'];?>">
			<div class="errorbox">
				<input type="text" placeholder="First Name" name="firstname" id="firstname">
			</div>
			<div class="errorbox">
				<input type="text" placeholder="Last Name" name="lastname" id="lastname" >
			</div>
			<div class="errorbox">			
				<input type="text" placeholder="Address Line 1" name="address" id="address">
			</div>
			<div class="errorbox">
				<input type="text" placeholder="Address Line 2" name="address2" id="address2">
			</div>
			<div class="errorbox triSml">			
				<input type="text" class="" placeholder="City" name="city" id="city">			
			</div>
			<div class="errorbox triSml minMarginR">
			<select name="state" id="state" class="selectBoxD">
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
			</select>
			</div>
			<div class="errorbox triSml last">
				<input type="text" placeholder="Zip Code" name="zip" id="zip">
			</div>	
			<div class="clr"></div>
			 <p class="line"></p>       
			<div class="errorbox smlError"> 
				<input type="text" placeholder="Valid Email Address" name="email" id="email">
			</div>
			<div class="errorbox">			
				<input type="text" placeholder="Cell Phone Number" name="phone" id="phone">
			</div>	
		</div>
      <input type="submit" value="Continue" class="yellowRealBtn yellowPure">
	</form>
  </div>
  <div class="productDetails innerShadow">
  		<div class="innerBox">
        <h3>Valorebooks.com</h3>
        	<img src="images/product001.png">
           <p><strong> Adaptive Web Design:</strong> Craft
Rich Experiences with
Progressive Enhancement</p>
<p>John Smith</p>
<p>ISBN: 123456789123</p>
            <div class="clr"></div>
           
        </div>
  </div>