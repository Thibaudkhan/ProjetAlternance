<?php
	$page_autorise = array("cv/cv.pdf");
	$page = $_GET['page'];
	if(!empty($page) && file_exists($page) && in_array($page, $page_autorise))
	{
		header("Content-Disposition:attachement;filename=".basename($page ));
		readfile($page);
		exit();
	}
?>