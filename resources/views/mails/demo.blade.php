Hello <i>{{ $demo->receiver }}</i>,
<p>This is an automated message, sent because an immigant asked a question relating to your feild of expertise</p>
 
<p><u>Demo object values:</u></p>
 
<div>
<p><b>Question Title:</b>&nbsp;{{ $demo->demo_one }}</p>
<p><b>Question:</b>&nbsp;{{ $demo->demo_two }}</p>
<p><b>Name:</b>&nbsp;placeholder</p>
</div>
 
<p><u>Values passed by With method:</u></p>
 
<?php /*
<div>
<p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
<p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>
*/
$sitename = 'test';
$postid= 1;
?>
 
<small>Thank You, if you have a response that you think they will find helpful please respond at<?php echo $sitename . '/' . $postid;?> </small>
<br/>
<i>{{ $demo->sender }}</i>