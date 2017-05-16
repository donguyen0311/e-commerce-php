<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
						<?php  
							include("authentication_register.php");
							include("authentication_login.php");
							include("authentication_clearfix.php");
						?>
					</div>
					<!--<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //login 