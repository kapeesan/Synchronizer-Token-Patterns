<?php

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		if (!(($username=='kapeesan') && ($password=='kapeesan')))
		{
			echo "Invalid username and password";
			
			exit();	
		}

	}

?>


<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <title>Details Page</title>
        <link rel='stylesheet' href='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1531597991' />
		
		
    </head>
    <body class="page-template-default page page-id-7 page-parent woocommerce woocommerce-account woocommerce-page dokan-theme-dokan">

		<main id="main" class="site-main main">
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="container container--xs">
							<div class="woocommerce">



								<div id="signup_div_wrapper" style="margin-top:-100px !important">
								
									<h1 class="mb-1 text-center">Kindly fill all fields</h1>
									

    												

										<form method="post" action="submit.php" class="register">

											<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
												<label for="reg_sr_firstname">Name <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="name" value="Kapeesan"  required/>
											</p>

											<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
												<label for="reg_sr_lastname">Nationality <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="nationality" id="nationality" value="Srilankan"  required />
											</p>
			
			
											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_email">contact No <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="contact" id="contact" value="0778956145" />
											</p>

											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_password">Address <span class="required">*</span></label>
												<textarea class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="address">New kandy rd, Kaduwela. </textarea>
											</p>
											
											<p class="woocomerce-FormRow form-row">
												          
												<input type="submit" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;" name="submit" value="Submit" />
											</p>
											
											
											
											<input type="hidden" name="csrf_token" value="" id="csrf_token"/>
    
										</form>
									

                                       
   

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </main>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				var xhttp;
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
					{
						document.getElementById("csrf_token").setAttribute('value', this.responseText) ;
					}
			
				};
			
				xhttp.open("GET", "csrf_generate.php", true);
				xhttp.send();
			});
	   </script>
	   


	</body>
</html>