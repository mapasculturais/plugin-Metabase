<?php

use MapasCulturais\ApiQuery;
use MapasCulturais\App;

$app = App::i();
$cards = $this->metabasePlugin->config['cards'];

$app->applyHook('component(home-metabase).data', [&$cards]);

foreach ($cards as &$card) {
    foreach ($card['data'] as &$data) {
        $query = $data['query'];
        $entity = $data['entity'];
        $api_query = new ApiQuery($entity, $query);
        $data['value'] = $api_query->getCountResult();
    }
}

// eval(\psy\sh());
$this->jsObject['config']['homeMetabase'] = $cards;

// $this->jsObject['config']['metabaseDashboard'] = [
//     'links'=> $app->config['plugins']['Metabase']['config']['links'],

//  ];
return;

