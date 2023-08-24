<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-link
    mc-icon
');
?>
<div class="home-metabase">
    <div class="home-metabase__header">
        <div class="home-metabase__left">
            <h1 class="bold"><?php i::_e('Relatórios') ?></h1>
            <p class="semibold home-metabase__text"><?php i::_e('Acesse painéis de dados ao clicar no botão abaixo para visualizar gráficos e outras infomações importantes para consulta e análise') ?></p>
            <button :class="['button', 'button--primary-noborder', {'button--large': $media('max-width: 500px')}]">Confira todos os painéis</button>

        </div>
        <div class="home-metabase__right">
            <img src="<?php $this->asset('img/business.png') ?>" class="home-metavase__img" />
        </div>
    </div>
    <div class="home-metabase__panel">
        <h4 v-if="!$media('max-width: 500px')" class="semibold home-metabase__subtitle"><?php i::_e('Confira abaixo alguns dados destacados') ?></h4>
        <p v-if="$media('max-width: 500px')" class="semibold home-metabase__subtitle"><?php i::_e('Confira abaixo alguns dados destacados') ?></p>
        <div class="home-metabase__content">
            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon" name="lamp"></mc-icon>
                    <h4 class="bold"><?php i::_e('Oportunidades') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <h1 v-if="!$media('max-width: 500px')" class="bold">785</h1>
                        <h2 v-if="$media('max-width: 500px')" class="bold">785</h2>
                        <h5 class="semibold"><?php i::_e('oportunidades criadas') ?></h5>
                    </div>
                    <div class="home-metabase__vline"></div>
                    <div class="home-metabase__opinfo">

                        <h2 v-if="!$media('max-width: 500px')" class="bold">785</h2>
                        <h3 v-if="$media('max-width: 500px')" class="bold">785</h3>
                        <h5 class="semibold"><?php i::_e('oportunidades
                        certificadas') ?>
                        </h5>
                    </div>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>
            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon" name="agents"></mc-icon>
                    <h4 class="bold"><?php i::_e('Agentes individuais') ?></h4>
                </div>
                <div class="home-metabase__spcinfo">
                    <h1 class="bold">2787</h1>
                    <h5><?php i::_e('agentes individuais cadastrados') ?></h5>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>


            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon" name="agents"></mc-icon>
                    <h4 class="bold"><?php i::_e('Agentes coletivos') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <h2 class="bold">785</h2>
                        <h5><?php i::_e('coletivos
                        cadastrados') ?></h5>

                    </div>
                    <div class="home-metabase__vline"></div>
                    <div class="home-metabase__opinfo">

                        <h2 class="bold">785</h2>
                        <h5><?php i::_e('coletivos certificados') ?></h5>
                    </div>
                </div>
                
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>

            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon" name="spaces"></mc-icon>
                    <h4 class="bold"><?php i::_e('Espaços') ?></h4>
                </div>
                <div class="home-metabase__spcinfo">
                    <h1 class="bold">2787</h1>
                    <h5><?php i::_e('espaços') ?></h5>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>
            <div class="home-metabase__card">
                <div class="home-metabase__cardtitle">
                    <mc-icon class="home-metabase__icon" name="projects"></mc-icon>
                    <h4 class="bold"><?php i::_e('Projetos') ?></h4>
                </div>
                <div class="home-metabase__opcard">
                    <div class="home-metabase__opinfo">
                        <h2 class="bold">785</h2>
                        <h5><?php i::_e('projetos
                        cadastrados') ?></h5>

                    </div>
                    <div class="home-metabase__vline"></div>
                    <div class="home-metabase__opinfo">

                        <h2 class="bold">785</h2>
                        <h5><?php i::_e('projetos com
                        subprojetos') ?></h5>
                    </div>
                </div>
                <button class="button button--primary button--large"><?php i::_e('Conferir painel de dados') ?></button>
            </div>
        </div>
    </div>

</div>