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
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('metabase', 'Metabase\Controllers\Metabase');
    }
}
