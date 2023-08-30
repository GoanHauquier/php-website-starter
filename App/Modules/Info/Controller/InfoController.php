<?php namespace App\Modules\Info\Controller;

use App\Modules\Info\View\InfoView;
use App\Lib\Controller;


class InfoController extends Controller
{
    public function index()
    {
        new InfoView($this->homeViewData());
    }

    protected function homeViewData() : array
    {
        $data = parent::viewData();

        $data['title'] = 'Info page';

        return $data;
    }
}
?>