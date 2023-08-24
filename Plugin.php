<?php

namespace Metabase;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [];

        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();
        //load css
        $app->hook('<<GET|POST>>(<<metabase|site>>.<<*>>)', function() use ($app) {
            $app->view->enqueueStyle('app-v2', 'metabase', 'css/app.css');
        });
            // $app->view->enqueueStyle('app-v2', 'metabase', 'css/app.css');
        $app->hook("component(home-feature):after", function() {
            /** @var \MapasCulturais\Theme $this */
            $this->part('home-metabase');
        });
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('metabase', 'Metabase\Controllers\Metabase');
    }
}
