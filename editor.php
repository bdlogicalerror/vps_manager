<?php
/**
 * FileName: editor.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 10:32 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>File Editor</title>
</head>
<style>
	.container{
		text-align: center;
	}
	.save{
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	textarea {
		outline: none;
		resize: none;
		overflow: auto;
		border: 3px solid #cccccc;
		padding: 5px;
	}
</style>
<body>
	<div>
		<div class="container">
			<div class="file-edit">
				<div class="title">
					<h2>File Editor</h2>
					<h3><?php echo $_GET['file'];?></h3>
				</div>
				<form action="edit_process.php" method="POST">
					<input type="hidden" name="path" value="<?php echo $_GET['file'];?>">
					<div class="form-group">
						<textarea  name="file_content" id="" cols="150" rows="30"><?php echo htmlentities(file_get_contents($_GET['file'])); ?></textarea>
					</div>
					<input class="save" type="submit" value="save">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
