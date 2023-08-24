<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-link
');
?>
<div class="list-dashboard">
    <h2 class="bold"><?php i::_e('Painéis de dados') ?></h2>
    <p class="semibold"><?php i::_e('Abaixo você confere todos os painéis de disponíveis para serem acessados') ?>
    <div class="list-dashboard__cards">

        <div class="list-dashboard__card">
            <button class="button button-primary"><?= i::__("Conferir") ?></button>
        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre entidades em geral') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>
        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre oportunidades') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>
        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre agentes individuais') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>
        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre agentes coletivos') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>
        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre espaços') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>

        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre eventos') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>

        </div>
        <div class="list-dashboard__card">
            <h4 class="bold"><?php i::_e('Painel sobre projetos') ?></h4>
            <button class="button button-primary"><?= i::__("Conferir") ?></button>

        </div>
    </div>

</div>