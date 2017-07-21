<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<head>
<title>e-කවය</title>
<link type="text/css" rel="stylesheet" href="<?php echo basePathNS();?>/css/main.css">
<link type="text/css" rel="stylesheet" href="<?php echo basePathNS();?>/css/tagscomplete.css">

<script src="<?php echo basePathNS();?>/js/jquery.js"></script>
<script src="<?php echo basePathNS();?>/js/tagscomplete.js"></script>
<script src="<?php echo basePathNS();?>/js/fancyalert.js"></script>


<script type="text/javascript" src="<?php echo basePathNS();?>/js/prettify/prettify.js"></script>

<link href="<?php echo basePathNS();?>/css/prettify.css" type="text/css" rel="stylesheet" />


<?php if(!empty($js)):?><?php echo $js;?><?php endif;?>
</head>
<body onload="prettyPrint()">
<div id="navigation"><div class="navcenter">

<form action="<?php echo basePath();?>/questions" method="get" style="float:left;width:250px;text-align:left;"><input type="textbox" name="search" style="color: #999; width:350px;" value="<?php if (!empty($searchstring)):?><?php echo $searchstring;?><?php endif?>"></form>

<div style="float:right;border-left: 1px solid #4dba59;border-right: 1px solid #5dba59;"><ol><li><a href="<?php echo basePath();?>/">ප්‍රධාන පිටුව</a></li><li><a href="<?php echo basePath();?>/questions">ප්‍රශ්ණ</a></li><li><a href="<?php echo basePath();?>/passpaper">විභාග ප්‍රශ්ණ</a></li><li><a href="<?php echo basePath();?>/tags">ටැග්</a></li><li><a href="<?php echo basePath();?>/users">පරිශීලකයන්</a></li><li><a href="<?php echo basePath();?>/questions?type=unanswered">නොවිසඳුනු</a></li><li><a href="<?php echo basePath();?>/questions/ask">අසන්න හෝ දායක වන්න</a></li></ol></div>

</div>
<div style="clear:both"></div>
</div>

<div id="container">
	<div id="leftpanel">
