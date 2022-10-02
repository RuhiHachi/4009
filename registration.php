<style type="text/css">

	body{
		background: #D0B49F;

	}
	.txt{
		margin-left: 10%;
		margin-right: 10%;
		width: 80%;
		padding: 5px;
	}
	.p{
		margin-left: 25%;
		margin-right: 25%;
		padding: 5px;
		background: #AB6B51;
		color: white;
		text-align: center;
		border-radius: 2px;
	}
	.form{
		border: 2px solid black;
		padding: 20px;
		margin-left: 30%;
		margin-right: 30%;
		margin-top: -6px;
	}
	.btn{
		margin-right: 20%;
		width: 100%;
		background: #AB6B51;
		color: white;
		border-radius: 8px;
		border: none;
		padding: 6px;
		
	}
</style>
<p class="p"> Registration Form</p>
<form action="display.php" Method="POST" class="form">
<input type="text" name="fname"class="txt" placeholder="UserName"><br><br>
<input type="password" name="pass"class="txt" placeholder="password"><br><br>
<input type="submit" name="send"class="btn" value="send"><br><br>
<input type="reset" name="send"class="btn" value="clear">
	
</form>