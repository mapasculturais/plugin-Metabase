<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-icon
    mc-link
');

?>

<div class="list-dashboard">
    <nav id="sidebar" class="list-dashboard__sidebar">
        <ul class="list-dashboard__nav">
            <label class="semibold list-dashboard__title"><?php i::_e("NAVEGUE ENTRE OS PAINÉIS DE DADOS"); ?></label>
            <li :name="name" v-for="(name, index) in names" :key="index" :class="['list-dashboard__item', name === panelId ? 'selected' : '', 'semibold']">
                <mc-link route="metabase/dashboard" :params="[name]" :class="['list-dashboard__link', name === panelId ? 'textselected' : '', 'semibold']">
                    {{links[name].title}}
                </mc-link>
            </li>
        </ul>
    </nav>
    <main >
        <iframe class="list-dashboard__iframe" ref="dashboardIframe" :src="link"></iframe>
    </main>

</div>