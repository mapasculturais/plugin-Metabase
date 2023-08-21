<?php

/**
 * @var \MapasCulturais\Themes\BaseV2\Theme $this
 * @var \MapasCulturais\App $app
 */

use MapasCulturais\i;

$this->import('
    mc-breadcrumb
');

$this->breadcrumb = [
    ['label' => i::__('Home'), 'url' => $app->createUrl('site', 'index')],
    ['label' => i::__('Metabase'), 'url' => $app->createUrl('metabase', 'dashboard')],
];
?>

<div class="main-app registration single">
    <mc-breadcrumb></mc-breadcrumb>
</div>