<?php require 'includes/header.html'; ?>
<body>

	<section id="order">
		<div class="container">				
			<h3>Place Your Order!</h3>

			<h4 id="error">&nbsp;</h4>	
			
			<form id="contactform" name="contact-form" >
				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon width-fix"><i class="fa fa-user"></i></span>
						<input type="text" name="first" class="form-control" placeholder="First Name ...">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon width-fix"><i class="fa fa-user"></i></span>
						<input type="text" name="last" class="form-control" placeholder="First Name ...">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon width-fix"><i class="fa fa-building"></i></span>
						<input type="text"  name="address_1" class="form-control" placeholder="Address ...">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon width-fix"><i class="fa fa-building"></i></span>
						<input type="text" name="address_2" class="form-control" placeholder="Address Cont ...">

					</div>
				</div>
				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon width-fix"><i class="fa fa-building"></i></span>
						<input type="text" name="address_city" class="form-control" placeholder="City Name ...">

					</div>
				</div>
				<div class="form-group">
					<div class="input-group input-group-lg">												
						<span class="input-group-addon width-fix"><i class="fa fa-building"></i></span>
						<select class="form-control" name="address_state" id="address_state" title="State / Province" placeholder="State / Province*">
  							<option value="">State ...</option>		  
  							<optgroup label="U.S. States" title="U.S. States">
						  	<option value="AL">AL - Alabama</option><option value="AK">AK - Alaska</option><option value="AZ">AZ - Arizona</option><option value="AR">AR - Arkansas</option><option value="CA">CA - California</option><option value="CO">CO - Colorado</option><option value="CT">CT - Connecticut</option><option value="DC">DC - DC</option><option value="DE">DE - Delaware</option><option value="FL">FL - Florida</option><option value="GA">GA - Georgia</option><option value="HI">HI - Hawaii</option><option value="ID">ID - Idaho</option><option value="IL">IL - Illinois</option><option value="IN">IN - Indiana</option><option value="IA">IA - Iowa</option><option value="KS">KS - Kansas</option><option value="KY">KY - Kentucky</option><option value="LA">LA - Louisiana</option><option value="ME">ME - Maine</option><option value="MD">MD - Maryland</option><option value="MA">MA - Massachusetts</option><option value="MI">MI - Michigan</option><option value="MN">MN - Minnesota</option><option value="MS">MS - Mississippi</option><option value="MO">MO - Missouri</option><option value="MT">MT - Montana</option><option value="NE">NE - Nebraska</option><option value="NV">NV - Nevada</option><option value="NH">NH - New Hampshire</option><option value="NJ">NJ - New Jersey</option><option value="NM">NM - New Mexico</option><option value="NY">NY - New York</option><option value="NC">NC - North Carolina</option><option value="ND">ND - North Dakota</option><option value="OH">OH - Ohio</option><option value="OK">OK - Oklahoma</option><option value="OR">OR - Oregon</option><option value="PA">PA - Pennsylvania</option><option value="RI">RI - Rhode Island</option><option value="SC">SC - South Carolina</option><option value="SD">SD - South Dakota</option><option value="TN">TN - Tennessee</option><option value="TX">TX - Texas</option><option value="UT">UT - Utah</option><option value="VT">VT - Vermont</option><option value="VA">VA - Virginia</option><option value="WA">WA - Washington</option><option value="WV">WV - West Virginia</option><option value="WI">WI - Wisconsin</option><option value="WY">WY - Wyoming</option>		  
						  	</optgroup>
						  	<optgroup label="U.S. Territories" title="U.S. Territories">
						  	<option value="AS">AS - American Samoa</option><option value="FM">FM - Federated States of Micronesia</option><option value="GU">GU - Guam</option><option value="MH">MH - Marshall Islands</option><option value="MP">MP - Northern Mariana Islands</option><option value="PR">PR - Puerto Rico</option><option value="PW">PW - Palau</option><option value="VI">VI - U.S. Virgin Islands</option>		  
						  	</optgroup>
						  	<optgroup label="U.S. Military" title="U.S. Military">
						  	<option value="AA">AA - Armed Forces Americas</option><option value="AE">AE - Armed Forces Europe</option><option value="AP">AP - Armed Forces Pacific</option>		  
						  	</optgroup>
						  	<optgroup label="Canadian Provinces" title="Canadian Provinces">
						  	<option value="AB">AB - Alberta</option><option value="BC">BC - British Columbia</option><option value="MB">MB - Manitoba</option><option value="NB">NB - New Brunswick</option><option value="NL">NL - Newfoundland and Labrador</option><option value="NS">NS - Nova Scotia</option><option value="NT">NT - Northwest Territories</option><option value="NU">NU - Nunavut</option><option value="ON">ON - Ontario</option><option value="PE">PE - Prince Edward Island</option><option value="QC">QC - Quebec</option><option value="SK">SK - Saskatchewan</option><option value="YT">YT - Yukon</option>		  
						  	</optgroup>        
						</select>

						<span class="input-group-addon"></span>
						<input type="text" name="address_2" class="form-control" placeholder="Zip ...">      
					</div>
				</div>

				<div class="form-group">
					<div class="input-group input-group-lg">						
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="text" name="email" class="form-control" placeholder="Email Address ...">
					</div>
				</div>

				<div class="form-group">
					<div class="input-group input-group-lg">						
						<input type="checkbox" name="address" class="form-control" placeholder="Your Address ...">
					</div>
				</div>


				<div class="form-group">	
					<div class="input-group input-group-lg"> 
						<button  id="submit" class="btn btn-primary btn-lg" >Send</button>
					</div>
				</div>	
			</form>	

		</div>
	</section>

</body>
</html>