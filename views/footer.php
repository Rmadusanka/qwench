</div>
<div id="rightpanel">
<div style="text-align:right;"><a href="<?php echo basePath();?>/" style="border-bottom:0px;"><img src="<?php echo basePathNS();?>/img/logo.gif"></a></div>
<div style="clear:both"></div>

<?php if (!empty($_SESSION['userid'])):?>
	<div class="userlogin">
		<div style="float:left"><img src="http://www.gravatar.com/avatar/<?php echo md5(trim(strtolower($_SESSION['email'])));?>?d=monsterid&s=70" style="border:1px solid #ccc"></div><div style="float:left;padding-left:10px;"><h3 style="padding-left:0px"><?php echo $_SESSION['name'];?> | <?php echo $_SESSION['points'];?></h3>
		<a href="<?php echo basePath();?>/users/edit">පැතිකඩ සංස්‌කරණය කරන්න</a><br/>
		<a href="<?php echo basePath();?>/users/logout">ඉවත්වන්න</a></div>
		<div style="clear:both"></div>
	</div>
<?php else:?>
	<?php if (empty($loginpage)):?>
	<div class="userlogin">
		<form action="<?php echo generateLink("users","validate");?>" method="post">
		<h3>විද්යුත් තැපෑල</h3>
		<input type="textbox" class="textbox" name="email" style="width:215px;"/>
		<h3>මුරපදය</h3>
		<input type="password" class="textbox" name="password" style="width:215px;"/>
		<input type="hidden" name="returnurl" value="<?php echo getLink();?>">
		<div style="padding-top:10px"><input type="submit" value="ඇතුල් වන්න" class="button"> හෝ <i><a href="<?php echo basePath();?>/users/register">ලියාපදිංචි වීමට මෙහි ක්ලික් කරන්න  </a></i>
		</form>
	</div>
	<?php endif;?>
<?php endif;?>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both">&nbsp;</div>
<div class="footer">
<!-- Copyright Notice Do Not Remove -->
Powered by e-කවය<br/>Copyright <?php echo date("Y");?> <a href="http://www.inscripts.com" target="_blank">Inscripts</a>
<!-- Copyright Notice Do Not Remove -->
</div>
</body>
</html>
