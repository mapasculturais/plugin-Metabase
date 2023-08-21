<?php

namespace Metabase\Controllers;

use MapasCulturais\Controller;

class Metabase extends Controller
{
    function __construct()
    {
    }

    public function GET_dashboard()
    {
        $this->render("single");
    }
}
