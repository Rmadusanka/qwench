<script>
function cform() { 
	var description = '';
 
	description = $("#wmd-input").val();
 
	if (description.length < 15) {
		$("#wmd-input").addClass('textalert');
		$.fancyalert('Your <?php if ($kb):?>comment<?php else:?>answer<?php endif;?> must be atleast 15 characters in length');
		$("#wmd-input").focus();
		return false;
	} else {
		$("#wmd-input").removeClass('textalert');
	}

	return true;
}
</script>

<h1>Maths passpaper</h1>

<div style="clear:both"></div>

<div class="questionsview_userbox">
</div>

<div class="questionsview_details"><span style="color:#999">2 day ago</span></div>

<div class="questionsview_options"><a href="<?php echo basePath();?>/questions/edit/">edit</a></div>
 

<div class="questionsview_question" id="q3">
<div class="questionsview_rating">
<div class="questionsview_box"><div class="questionsview_up">˄</div><div class="questionsview_vote">2</div><div class="questionsview_down">˅</div>

<div class="questionsview_fave">★</div>
</div>
</div>

<div class="questionsview_questiondescription">


<div class="markdown">fdgdf</div>


<p><br/>www.passpaper.com<em><a href="<?php echo basePath();?>/questions/cache/" target="_blank">(view cache)</a></em></p>


<ul class="holder noborder">

<li class="bit-box nopadding"><a href="">අවකලනය</a></li>

</ul>


<div class="comments">
<div id="comments_q1">


<div class="comment">
<div class="comment_text">this is a first comment - <a href="<?php echo basePath();?>/users/">hansika bogahapitiya</a></div>

<div class="commentdel" id="commentdel_"></div>

<div class="commentfave " id="commentfave_">♥</div><div class="commentfavevotes">1</div>
<div style="clear:both;"></div>
</div>

</div>
<div id="comment_q" class="commentsadd">
<span style="float:left"><a href="javascript:void(0)" onclick="javascript:comment('q')">Add comment</a></span>

<span style="float:right" style="display:none" class="viewallcomments"><a href="javascript:void(0)" onclick="javascript:viewallcomments('q')"></a></span>
</div>
</div>
<div style="height:30px;"></div>
</div>



<div style="clear:both"></div>
</div>


<div class="toppagination">
<div style="clear:both"></div>

<div class="pagination" style="margin-left:5px;"></div>

<div class="pagination" style="margin-left:5px;float:right;margin-right:5px;"></div>
<div style="clear:both"></div>
</div>

<div>
<div style="float:left"><h2> Answers</h2></div>

<div style="clear:both"></div>
</div>


<div class="questionsview_userbox">
</div>

<div class="questionsview_details"><span style="color:#999">1day ago</span>
</div>

<div class="questionsview_options"><a href="<?php echo basePath();?>/answers/edit/">edit</a></div>
<div class="questionsview_accepted">
<span>Accepted Answer</span>
</div>

<div class="questionsview_accept">
<a href="<?php echo basePath();?>/answers/accept?id=">Accept this answer</a>
</div>

<div class="questionsview_answer" id="a">
<div class="questionsview_rating">
<div class="questionsview_box"><div class="questionsview_up">˄</div><div class="questionsview_vote">1</div>
<div class="questionsview_down">˅</div>
</div>



</div>
<div class="questionsview_answerdescription">
<div class="markdown">this is also a second answer</div>

<div class="comments">
<div id="comments_a3">

<div class="comment">
<div class="comment_text">displaying comment - <a href="<?php echo basePath();?>/users/2/roshan wijesinghe">Roshan wijesinghe</a></div>

<div class="commentdel" id="commentdel_3"></div>

<div class="commentfave" id="commentfave_1">♥</div><div class="commentfavevotes">1</div>
<div style="clear:both;"></div>
</div>



</div>
<div id="comment_a1" class="commentsadd">

<span style="float:left"><a href="javascript:void(0)" onclick="javascript:comment('a1')">Add comment</a></span>
<span style="float:right" style="display:none" class="viewallcomments"><a href="javascript:void(0)" onclick="javascript:viewallcomments('a1')"></a></span>

</div>
</div>

<div style="height:20px;"></div>
</div>


<div style="clear:both;"></div>
</div>

<div class="bottompagination">
<div style="clear:both"></div>

</div>

<input type="hidden" name="questionid" value="">
<input type="submit" value="Answer Question" class="button">