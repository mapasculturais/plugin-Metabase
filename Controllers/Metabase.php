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
        $panel_id = $this->data[0] ?? '';
        if($panel_id) {
            $this->render("single", ['panelId'=>$panel_id]);
        } else {
            $app = App::i();
            $app->pass();
        }
    }

    public function GET_panel()
    {
        $this->render("panel");
    }
    
   
}
