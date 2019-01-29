<?php

/**
 * FileName: dmap.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/28/19
 * Time: 8:39 PM
 */
class dmap
{
	public $home = "/var/www";

	public $cur_dir = '';

	public $dir_list = [];

	public $back;

	public function __construct()
	{
		$this->cur_dir = $this->home;
	}

	public function change_dir($dir)
	{
		$this->cur_dir = $this->home . "/" . $dir;
		$this->process_dir($dir);

	}

	public function home_dir()
	{
		$list = array_diff(scandir($this->home), array('..', '.'));
		$all_dir = [];
		foreach ($list as $k => $v) {
			$all_dir[] = [
				'path' => isset($dir) ? $dir . "/" . $v : $v,
				'name' => $v
			];
		}

		$this->dir_list = $all_dir;
	}

	public function process_dir($dir = null)
	{
		$all_dir = [];

		$back = "";

		if (isset($dir)) {
			$all = explode('/', $dir);
			$a = array_pop($all);


			foreach ($all as $k => $v) {
				if ($k == 0) {
					$back .= $v;
				} else {
					$back .= "/" . $v;
				}

			}

			$all_dir[] = [
				'path' => $back,
				'name' => "Back",
				'type' => "action"
			];
		}


		if ($this->cur_dir == $this->home . "/" . "..") {
			$list = array_diff(scandir($this->home), array('..', '.'));
		} else {
			$list = array_diff(scandir($this->cur_dir), array('..', '.'));
		}

		foreach ($list as $k => $v) {
			$cur_file = $this->cur_dir . "/" . $v;
			$all_dir[] = [
				'path' => isset($dir) ? $dir . "/" . $v : $v,
				'name' => $v,
				'size' => is_file($cur_file) ? $this->formatSizeUnits(filesize($cur_file)) : "..",
				'type' => is_file($cur_file) ? "File" : "Folder"
			];
		}

		$this->dir_list = $all_dir;

	}

	public function formatSizeUnits($bytes)
	{
		if ($bytes >= 1073741824) {
			$bytes = number_format($bytes / 1073741824, 2) . ' GB';
		} elseif ($bytes >= 1048576) {
			$bytes = number_format($bytes / 1048576, 2) . ' MB';
		} elseif ($bytes >= 1024) {
			$bytes = number_format($bytes / 1024, 2) . ' KB';
		} elseif ($bytes > 1) {
			$bytes = $bytes . ' bytes';
		} elseif ($bytes == 1) {
			$bytes = $bytes . ' byte';
		} else {
			$bytes = '0 bytes';
		}

		return $bytes;
	}

}