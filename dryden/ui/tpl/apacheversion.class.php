<?php

/**
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_apacheversion {

    public function Template() {
        return sys_versions::ShowApacheVersion();
    }

}

?>
