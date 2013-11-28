<?php

class BackController extends Controller {

    /**
     * Constructor of the class.
     * 
     * Reads default template from configuration and set default layout path to that template.
     */
    public function __construct() {
        $admin_theme = new ThemeController();
        View::addLocation(app('path') . '/views/admin/' . $admin_theme->getAdminTheme());
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {

        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
