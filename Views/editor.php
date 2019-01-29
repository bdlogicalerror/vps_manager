<?php
/**
 * FileName: editor.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 10:32 AM
 */

?>

<h1>File Editor</h1>
<div class="row col-md-12 centered">
    <span style="text-align: center"><b>File Name: </b><?php echo $path; ?></span>
    <form method="POST">
        <input type="hidden" name="path" value="<?php echo $path; ?>">
        <div class="form-group">
            <textarea class="form-control" name="file_content" id="" cols="150" rows="30"><?php echo $file_data; ?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="save">
    </form>
</div>

