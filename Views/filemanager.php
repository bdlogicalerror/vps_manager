<?php
/**
 * FileName: filemanager.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 10:16 AM
 */
?>
<h1>File Manager</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <tr>
            <th class='text-left'>Name</th>
            <th>Type</th>
            <th>Size</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
		<?php
		foreach ($dir_list as $list)
		{
			echo '<tr>';
			if($list['type']=="File"){
				echo "<td class='text-left'>" . $list['name'] . "</td>";
            }else{
				echo "<td class='text-left'><a href='?path={$list['path']}'>" . $list['name'] . "</a></td>";
            }
			echo "<td>" . $list['type'] . "</td>";
			echo "<td>" . $list['size'] . "</td>";
			if ($list['type']=="File"){
				echo "<td class='text-center'>
                        <a class='btn btn-info btn-xs' href='Edit?file={$list['path']}' >
                            <span class='glyphicon glyphicon-edit'></span> Edit</a> </td>
                           ";
            }else{
				echo "<td class='text-center'>
                        </td>
                           ";
            }
			echo "</tr>";
		}
		?>
    </table>
</div>