<script type="text/javascript" src="script/jQuery_v1_4_2.js"></script>
<script type="text/javascript">
$(function()
{

$("#content").focus(function()
{
$(this).animate({"height": "85px",}, "fast" );
$("#button_block").slideDown("fast");
return false;
});
$("#cancel").click(function()
{
$("#content").animate({"height": "30px",}, "fast" );
$("#button_block").slideUp("fast");
return false;
});

});
</script>
<div>
<html>
<a href="#textboard" onClick="send('newThread.php')" > [New Thread]   </a>
<a href="#" onClick="send('board.php')" > [Threads]</a> </html>
<a >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="#textboard" onClick="send('archive.php')" >[Archive]</a></html>
</div>
<form action="postThread.php" method="post" id="postForm">
<table align="center"  Style="font-size:24;">
<tr>
<td>Name:</td>
<td><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>E-mail:</td>
<td><input name="email" type="text" id="email" value=""></td>
</tr>
<tr>
<td>Subject:</td>
<td><input name="subject" type="text" id="subject"></td>
</tr>
<tr>
<td>text:</td>
<td><textarea name="content" type="text" id="content" style="align:center"></textarea></td>
</tr>
<tr>
<td colspan="2"><input name="submit Thread" type="submit" id="submit_Thread" value="Submit Thread" onClick ="this.value='Submitting ..';this.disabled='disabled'; this.form.submit();"></td>
</tr>
</table>
</form>
<script>document.getElementById('content').focus()</script>
