<?php

/**
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_progbarbandwidth {

    public function Template() {
		global $controller;
		$currentuser = ctrl_users::GetUserDetail();
		$bandwidthquota = $currentuser['bandwidthquota'];
		$bandwidth = fs_director::GetQuotaUsages('bandwidth', $currentuser['userid']);		
		if (!fs_director::CheckForEmptyValue($bandwidth)){
			$per = ($bandwidth / $bandwidthquota) * 100;
			$percent = round($per, 0);
			$line = "<img src=\"etc/lib/pChart2/zpanel/zProgress.php?percent=$percent\"/>";
		} else {
			$line = "<img src=\"etc/lib/pChart2/zpanel/zProgress.php?percent=0\"/>";
		}		
		return $line;
    }

}

?>
