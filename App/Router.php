<?php namespace App;

require_once 'App/Modules/Home/Controller/HomeController.php';
use App\Modules\Home\Controller\HomeController;

class Router
{
    
    public function initialize() : string
    {
        $requestUri = $this->getRequestUri();

        // if working on local, remove local folder from request uri
        if (getEnvVariable('DEBUG_MODE')) {
            $requestUri = str_replace(getEnvVariable('ROOT_DIRECTORY'), '', $requestUri);
        }
        
        return $this->handleUri($requestUri);
    }

    /**
     * handleUri
     * 
     * In our our available routes we will be checking if the active uri matches with one
     */
    private function handleUri(string $uri) : string
    {
        // our available routes, add as many as you need
        $routes = [
            ''              => 'home/index',
            '/info'         => 'info/index',

            '/json-output'  => 'home/jsonOutput'
        ];

        // check if any of our routes match the given uri
        $out = null;
        foreach ($routes as $key => $route) {
            if ($key == $uri) {
                $out = $route;
                break;
            }
        }

        // if we have an uri that doesn't match any of our routes, return notFound
        if ( ! $out) {
            $out = 'error/notFound';
        }

        return $out;
    }

    /**
     * getRequestUri
     * 
     * Get the active request Uri and remove trailing slash
     */
    private function getRequestUri() : string
    {
        $requestUri = $_SERVER["REQUEST_URI"];
        $requestUri = trim($requestUri, '/');

        return $requestUri;
    }

    public function startPageInitialization(string $path)
    {
        // seperate the path into usable variables
        $data = explode('/', $path);

        $controller = ucfirst($data[0]);
        $function   = $data[1];

        $prefix = "App\Modules\\";

        // get a reference to the controller we want to use
        $controllerClass = $prefix . $controller . '\Controller\\' . $controller . 'Controller';
        // get the path to the controller file and require it
        $controllerPath  = str_replace('\\', '/', $controllerClass) . '.php';
        require_once $controllerPath;

        // get a reference to the view we want to use
        $viewClass = $prefix . $controller . '\View\\' . $controller . 'View';
        // get the path to the view file and require it
        $viewPath  = str_replace('\\', '/', $viewClass) . '.php';
        require_once $viewPath;

        // create an instance of the controller we'd like to use
        $class = new $controllerClass();

        if ( ! $class) {
            throw new \Exception('No controller found for path: ' . $path);
        }

        // finally, call the method we received
        $class->$function();
    }
}
?>