<?php

class AdminController extends BackController {

    public function getIndex() {
        //View::addLocation(app('path') . '/views/admin/bluesky');
        //View::addNamespace('theme', app('path') . '/views/admin/bluesky');
        //return View::make('theme::default');
        return View::make('default');
    }

}
