<?php

namespace Metabase\Controllers;

use MapasCulturais\App;
use MapasCulturais\Controller;

class Metabase extends Controller
{
    function __construct()
    {
    }

    public function GET_dashboard()
    {
        $app = App::i();
        // $app->view->enqueueStyle('app-v2', 'metabase', 'css/app.css');
        $this->render("single");
    }
}
