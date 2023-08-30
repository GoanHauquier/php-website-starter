<?php namespace App\Modules\Error\Controller;

use App\Modules\Error\View\ErrorView;
use App\Lib\Controller;


class ErrorController extends Controller
{
    public function notFound()
    {
        new ErrorView($this->errorViewData());
    }

    protected function errorViewData() : array
    {
        $data = parent::viewData();

        $data['title'] = 'Pagina niet gevonden!';

        return $data;
    }
}
?>