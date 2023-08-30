<?php namespace App\Modules\Home\Controller;

use App\Modules\Home\View\HomeView;
use App\Lib\Controller;


class HomeController extends Controller
{
    /**
     *  Basic example, we just create an instance of a view and feed it some data
     */
    public function index()
    {
        $data = $this->homeViewData();
        new HomeView($data);
    }

    /**
     * Create some data to display on our page, this is method uses the viewData method of our parent as a base to keep things consistent
     */
    protected function homeViewData() : array
    {
        $data = parent::viewData();

        $data['title'] = 'Home page';

        return $data;
    }

    /**
     * We can also add routes here that can be accessed through ajax if needed!
     */
    public function jsonOutput()
    {
        $output = [];

        $output['someData'] = 'a data property';
        $output['aBool'] = true;
        $output['foo'] = 'bar';

        return jsonOutput($output);
    }
}
?>