<?php
 function Navigation($satID,$pageId)
{
	if(Get("single") != "single")
	{

	require_once ROOT . "/Utility/Url.php";
	$url = new Url();
	$url->AddPair("sat_id",$satID);
	?>

	</br>
	<ul class="nav nav-tabs" role="tablist">
	  <?php $url->AddPair("page-id","Cubesat-Single"); ?>
	  <li class="<?php if($pageId == "Cubesat-Single")  echo "active"; ?>"><a href="<?php echo $url->Output(); ?>">Single</a></li>
	   <?php $url->AddPair("page-id","Cubesat-Modify"); ?>
	  <li class="<?php if($pageId == "Cubesat-Modify")  echo "active"; ?>"><a href="<?php echo $url->Output(); ?>">Modify</a></li>
	   <?php $url->AddPair("page-id","Cubesat-History"); ?>
	  <li class="<?php if($pageId == "Cubesat-History")  echo "active"; ?>"><a href="<?php echo $url->Output(); ?>">History</a></li>
	</ul>
	<?php
	}
}
?>