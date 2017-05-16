<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
	<div class="bootstrap-tab-text-grids">
		<!--<div class="bootstrap-tab-text-grid">
			<div class="bootstrap-tab-text-grid-left">
				<img src="images/men3.jpg" alt=" " class="img-responsive">
			</div>
			<div class="bootstrap-tab-text-grid-right">
				<ul>
					<li><a href="#">Admin</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
				</ul>
				<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
					suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		
		<div class="add-review">
			<h4>add a review</h4>
			<form>
				<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				
				<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
				<input type="submit" value="SEND">
			</form>
		</div>-->
		
		<div class="fb-comments" data-href="http://localhost:10000/smart_shop/product.php?id=<?php echo $san_pham->ma_san_pham ?>" data-numposts="5"></div>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</div>
</div>