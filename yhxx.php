<?php
require_once '../sql.php';

function _yhxx()
{
	$sql = "SELECT * FROM `user_info`";
	$res = _select_data($sql);
	$v = '';
	while ($rows = mysql_fetch_array($res))
	{
		if ($rows['state'] == 1)
		{
			$state = '在职';
		}
		else
		{
			$state = '其他';
		}
		$v.= $rows['uid'].'';
	}
	return $v;

}
?>