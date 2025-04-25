<?php

namespace app\controllers;

class SiteController extends ApplicationController
{
    public function index(): string
    {
        return $this->render('sites.index');
    }

}