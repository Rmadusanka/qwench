
<script>
function fanswer() {
	var checked = $('#answercheck').attr('checked')?1:0;

	if (checked == 1) {
		$("#askquestion").val('Contribute');
	} else {
		$("#askquestion").val('Ask Question');
	}
}

function cform() {
	var title = '';
	var description = '';
	title = $("#title").val();
	description = $("#wmd-input").val();
 

	if (title.length < 15) {
		$("#title").addClass('textalert');
		$.fancyalert('Your title must be atleast 15 characters in length');
		$("#title").focus();
		return false;
	} else {
		$("#title").removeClass('textalert');
	}

	if (description.length < 15) {
		$("#wmd-input").addClass('textalert');
		$.fancyalert('Your description must be atleast 15 characters in length');
		$("#wmd-input").focus();
		return false;
	} else {
		$("#wmd-input").removeClass('textalert');
	}

	return true;
}
</script>

<form action="<?php echo generateLink("questions","post");?>" method="post" onsubmit="javascript:return cform();">

<h1>ඔබ ඇසීමට හෝ දායක වීමට කැමති කුමකටද ? </h1>
<input type="textbox" placeholder="ඔබේ ප්‍රශ්නයේ මාතෘකාව" class="textbox" name="title" id="title" tabindex="1"/><br/>
 

<div id="wmd-editor" class="wmd-panel" style="padding-top:10px">
<div id="wmd-button-bar"></div>
<textarea id="wmd-input" name="description" tabindex="2" ></textarea>
</div>
<div id="wmd-preview" class="markdown"></div>
 

<h3 style="padding-top:20px">ලින්ක් එකක් බෙදාහැරීමට</h3>
<input type="textbox" class="textbox" name="link" id="link" tabindex="3"/><br/>

<h3>ටැග්</h3>
<select class="textbox" placeholder="ඔබේ ප්‍රශ්නය ටැග් කිරීමට" name="tags" id="tags" tabindex="4"/></select>
<br/>
<input type="checkbox" id="answercheck" name="answercheck" value="1" onclick="fanswer();" tabindex="4"> Make this a knowledge-base article
<br/><br/>
<input type="submit" value="ප්‍රශ්නය අසන්න" class="button" id="askquestion" tabindex="5">
</form>
