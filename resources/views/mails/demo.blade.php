Hello <i>{{ $demo->receiver }}</i>,
<p>This is an automated message, sent because an immigant asked a question relating to your feild of expertise</p>

 
<div>
<p><b>Question Title:</b>&nbsp;{{ $demo->demo_one }}</p>
<p><b>Question:</b>&nbsp;{{ $demo->demo_two }}</p>
</div>
 
<?php /*
<div>
<p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
<p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>
*/
$sitename = 'http://lsapp.build/posts';
$postid= '1';
?>
 
<small>Thank You, if you have a response that you think they will find helpful please respond at&nbsp;<?php echo $sitename . '/' . $postid;?> </small>
<br/>
<i>{{ $demo->sender }}</i>