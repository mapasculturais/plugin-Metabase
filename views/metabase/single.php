<?php
/**
 * @var \MapasCulturais\Themes\BaseV2\Theme $this
 * @var \MapasCulturais\App $app
 */

use MapasCulturais\i;
$this->import('
    metabase-dashboard
    list-dashboard
    
');
?>
<div class="main-app registration single">
    <list-dashboard panel-id="<?= $panelId ?>"></list-dashboard>
    <!-- <metabase-dashboard></metabase-dashboard> -->
</div>