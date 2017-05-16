<div class="filter-price">
	<h3>LỌC THEO GIÁ</h3>
		<ul class="dropdown-menu6">
			<li>                
				<div id="slider-range"></div>
				<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" disabled="" />
				<form id="submit_price" action="" method="get" accept-charset="utf-8">				
					<input type="hidden" name="min_price" id="min_price">
					<input type="hidden" name="max_price" id="max_price">
					<?php echo (!empty($hidden_sort)) ? $hidden_sort : "" ?>
					<?php echo (!empty($hidden_limit)) ? $hidden_limit : "" ?>
					<?php echo (!empty($hidden_page)) ? $hidden_page : "" ?>
				</form>	
			</li>			
		</ul>
				<!---->
				<script type='text/javascript'>//<![CDATA[ 
				$(window).load(function(){
				 $( "#slider-range" ).slider({
							range: true,
							min: 0,
							max: 3000000,
							values: [ <?php echo (!empty($min_price)) ? $min_price : 0 ?>, <?php echo (!empty($max_price)) ? $max_price : 1500000 ?> ],
							slide: function( event, ui ) {  $( "#amount" ).val(ui.values[ 0 ] + "đ - " + ui.values[ 1 ] + "đ");
															$("#min_price").val(ui.values[ 0 ]);
															$("#max_price").val(ui.values[ 1 ]);
															 
								
							},
							change: function(event, ui) {
					            $("#submit_price").submit();
					        }
				 });
					$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "đ - " + $( "#slider-range" ).slider( "values", 1 ) + "đ" );
					});//]]>

				</script>
			<script type="text/javascript" src="js/jquery-ui.js"></script>
		 <!---->
</div>