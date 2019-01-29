<?php
/**
 * FileName: filemanager.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 10:16 AM
 */
require_once "dmap.php";

$dmap = new dmap();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>File Manager</title>
</head>
<style>
	.main-table {
		width: 960px;
		border-collapse: collapse;
		display: inline-table;
	}

	.main-table td {
		text-align: left;
		border: 1px dashed #010101;
		height: 20px;
		font-size: 21px;
		padding: 2px;
	}

	.main-table th .sl_no {
		width: 80px;
	}

	.main-table th {
		background-color: #D0CECF;
		border: 1px dashed #010101;
		font-size: 18px;
		border-collapse: collapse;
		text-align: left;
		padding: 3px;
		padding-left: 7px;
	}

</style>
<body>
<div style="text-align: center">
	<table class="main-table">
		<thead>
		<th>File</th>
		<th>Type</th>
		<th>Size</th>
		</thead>
		<tbody>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['path'])){

			$back = "";
			$dmap->change_dir($_GET['path']);
			?>

			<?php
			foreach ($dmap->dir_list as $list) {
				?>
				<tr>
					<?php
					if ($list['type'] == "File") {
						$f_path = $dmap->home . "/" . $list['path'];
						echo "<td><a target='_blank' href='index.php?file=$f_path'>" . $list['name'] . "</a></td>";
					} else {
						echo "<td><a href='?path={$list['path']}'>" . $list['name'] . "</a></td>";
					}
					?>

					<td><?php echo $list['type']; ?></td>
					<td><?php echo $list['size']; ?></td>
				</tr>
				<?php
			}

			?>

			<?php

		}elseif (isset($_GET['file'])) {
			echo "munna";
			exit;
		}else{
			$dmap->home_dir();
			foreach ($dmap->dir_list as $list) {
				?>
				<tr>
					<?php
					if ($list['type'] == "File") {
						$f_path = $dmap->home . "/" . $list['path'];
						echo "<td><a target='_blank' href='?file=$f_path'>" . $list['name'] . "</a></td>";
					} else {
						echo "<td><a href='?path={$list['path']}'>" . $list['name'] . "</a></td>";
					}
					?>

					<td><?php echo $list['type']; ?></td>
					<td><?php echo $list['size']; ?></td>
				</tr>
				<?php
			}


		}

		?>
		</tbody>
	</table>
</div>
</body>
</html>
