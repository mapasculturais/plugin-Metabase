<?php

use MapasCulturais\ApiQuery;
use MapasCulturais\App;
use MapasCulturais\i;
use MapasCulturais\Entities;

$app = App::i();
$cards = [
    [
        'label' => i::__('Oportunidade'),
        'icon' => 'opportunity',
        'iconClass' => 'opportunity__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('oportunidades criadas'),
                'entity' => Entities\Opportunity::class,
                'query' => [],
            ],
            [
                'label' => i::__('oportunidades certificadas'),
                'entity' => Entities\Opportunity::class,
                'query' => [
                    '@verified' => 1,
                ],
            ],
        ],
    ],
    [
        'label' => i::__('Agentes coletivos'),
        'icon' => 'agent-2',
        'iconClass' => 'agent__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('coletivos cadastrados'),
                'entity' => Entities\Agent::class,
                'query' => [
                    'type' => 'EQ(2)',
                ],
            ],
            [
                'label' => i::__('coletivos certificados'),
                'entity' => Entities\Agent::class,
                'query' => [
                    'type' => 'EQ(2)',
                    '@verified' => 1,
                ],
            ],
        ],
    ],
    [
        'label' => i::__('Agentes individuais'),
        'icon' => 'agent-1',
        'iconClass' => 'agent__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('agentes individuais cadastrados'),
                'entity' => Entities\Agent::class,
                'query' => [
                    '@verified' => 1,
                ],
            ],
        ],
    ],
    [
        'label' => i::__('Espaços'),
        'icon' => 'space',
        'iconClass' => 'space__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('Espaços'),
                'entity' => Entities\Space::class,
                'query' => [],
            ],
        ],
    ],
    [
        'label' => i::__('Projetos'),
        'icon' => 'project',
        'iconClass' => 'project__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('Projetos'),
                'entity' => Entities\Project::class,
                'query' => [],
            ],
        ],
    ],
    [
        'label' => i::__('Eventos'),
        'icon' => 'event',
        'iconClass' => 'event__color',
        'panelLink' => '',
        'data' => [
            [
                'label' => i::__('Eventos'),
                'entity' => Entities\Event::class,
                'query' => [],
            ],
        ],
    ],

];

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
return;


$queryParams =  [
    '@select' => 'type, verified',
];
$queryIndividuals =  [
    '@select' => 'id,type',
    'type' => 'EQ(1)',
];
$queryCollective =  [
    '@select' => 'id,type',
    'type' => 'EQ(2)',
];


$queryAgentsIndividual = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Agent::class, $queryIndividuals);
$queryAgentsCollective = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Agent::class, $queryCollective);


$queryIndividuals['@verified'] = 1;
$queryAgentsIndividual = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Agent::class, $queryIndividuals);
$queryCollective['@verified'] = 1;
$queryAgentsCollective = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Agent::class, $queryCollective);

var_dump($queryAgents->getFindResult());

// $queryOpportunities = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Opportunity::class, $queryParams);
// $queryOpportunities = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Opportunity::class, $queryParams);
// $queryOpportunities = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Opportunity::class, $queryParams);
// $queryOpportunities = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Opportunity::class, $queryParams);
// $queryOpportunities = new MapasCulturais\ApiQuery(MapasCulturais\Entities\Opportunity::class, $queryParams);
$this->jsObject['home-metabase'] = [
    'agent' => [
        'individual' => [
            'registered' => 0,
            'verified' => 0,
        ],
        'collective' => [
            'registered' => 0,
            'verified' => 0,
        ],

    ],
    'spaces' => [
        'registered' => 0,
        'verified' => 0,
    ],
    'projects' => [
        'registered' => 0,
        'verified' => 0,
    ],
    'opportunities' => [
        'registered' => 0,
        'verified' => 0,
    ],
    'events' => [
        'registered' => 0,
        'verified' => 0,
    ],
];

// async created() {
//     const opportunityAPI = new API('opportunity');
//     const opportunityQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

//     await opportunityAPI.find(opportunityQuery, null, true).then(response => {
//         this.opportunity.registered = response.length;

//     });

//     opportunityQuery];

//     await opportunityAPI.find(opportunityQuery, null, true).then(response => {
//         this.opportunity.verified = response.length;

//     });

//     const agentAPI = new API('agent');
//     const agentQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

//     agentQuery['type'] = 'EQ(1)';
//     await agentAPI.find(agentQuery, null, true).then(response => {
//         this.agents.individual.registered = response.length;

//     });

//     agentQuery['type'] = 'EQ(2)';
//     await agentAPI.find(agentQuery, null, true).then(response => {
//         this.agents.collective.registered = response.length;

//     });

//     agentQuery['@verified'] = 1;
//     await agentAPI.find(agentQuery, null, true).then(response => {
//         this.agents.collective.verified = response.length;

//     });

//     const spaceAPI = new API('space');
//     const spaceQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

//     await spaceAPI.find(spaceQuery, null, true).then(response => {
//         this.spaces.registered = response.length;

//     });


//     const projectAPI = new API('project');
//     const projectQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);
//     projectQuery['@select'] = 'children';
//     await projectAPI.find(projectQuery, null, true).then(response => {
//         let projectChildren = 0;
//         for (project of response) {
//             if (project.children.length > 0) {
//                 projectChildren++;
//             }
//         }
//         this.projects.registered = response.length;
//         this.projects.subProjects = projectChildren;
//     });

//     const eventAPI = new API('event');
//     const eventQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

//     await eventAPI.find(eventQuery, null, true).then(response => {
//         this.events.registered = response.length;

//     });

// },
