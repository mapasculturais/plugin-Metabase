<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;
$this->import('
    mc-link
    
');
$base_url=$app->createUrl('metabase', 'dashboard');
?>

<div class="metabase-dashboard">
    <div class="metabase-dashboard__header">
        <h2 class="bold"><?php i::_e("Painéis de dados") ?></h2>
        <h4><?php i::_e("Abaixo você confere todos os painéis de disponíveis para serem acessados") ?></h4>
    </div>

    <div class="metabase-dashboard__content">
        <div v-for="name in names" class="metabase-dashboard__card">
            
            <h4 class="bold">{{links[name].title}}</h4>
            <p>{{links[name].text}}</p>
            <div class="metabase-dashboard__btn">
                <a :href="'<?=$base_url ?>?panelId='+name" class="button button--small button--primary"><?php i::_e("conferir painel") ?></a>
            </div>
        </div>
        <!-- <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre oportunidades") ?></h4>
            <p><?php i::_e("Tenha acesso ao número de oportunidades e  editais cadastrados, a quantidade de pessoas participantes inscritas, o perfil demográfico e mais informações.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre entidades em geral") ?></h4>
            <p><?php i::_e("Confira dados relacionados às entidades cadastradas na plataforma, como agentes individuais e coletivos, oportunidades, espaços, eventos e projetos.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre agentes individuais") ?></h4>
            <p><?php i::_e("Saiba os números de agentes individuais cadastrados, quantos são criados mensalmente, por onde estão distribuídos no território e outras informações.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre agentes coletivos") ?></h4>
            <p><?php i::_e("Dados sobre a quantidade de  coletivos e instituições (com ou sem CNPJ) cadastrados, por onde se distribuem pelo estado e outras informações.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre espaços") ?></h4>
            <p><?php i::_e("Conheça, entre outras informações, por onde os espaços estão distribuídos, a quantidade de espaços cadastros na plataforma, os tipos e as áreas de atuação.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre eventos") ?></h4>
            <p><?php i::_e("Indicadores relacionados a quantidade de eventos cadastrados, às linguagens culturais e características, as datas de criação e também eventos agendados.") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div>
        <div class="metabase-dashboard__card">
            <h4 class="bold"><?php i::_e("Painel sobre projetos") ?></h4>
            <p><?php i::_e("Tenah acesso ao número total de projetos cadastrados, projetos certificados, quantidade de projetos com subprojetos, os tipos e outros dados. ") ?> </p>
            <div class="metabase-dashboard__btn">
                <mc-link route="metabase/dashboard" class="button button--small button--primary"><?php i::_e("conferir painel") ?></mc-link>
            </div>
        </div> -->
    </div>

</div>