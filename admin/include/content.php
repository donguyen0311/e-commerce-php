<!-- page content -->
<div class="right_col" role="main">
<?php
	if(isset($views))
	{
		foreach($views as $view)
		{
			include("$view"); 
		} 
	}
?>	
</div>
<!-- /page content -->