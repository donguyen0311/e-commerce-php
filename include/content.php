<!-- content -->
<div id="_content"> 
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
<!-- //content -->