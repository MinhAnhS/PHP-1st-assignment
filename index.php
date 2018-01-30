<?php




/* These codes below, I've found it when reading a tutorial about MVC in PHP
These codes can be found here in this link: https://r.je/mvc-in-php.html
*/


class Model {

    public $text;

    public function __construct() {

        $this->text = 'Hello world!';

    }

}


class View {

    private $model;

    public function __construct(Model $model) {

        $this->model = $model;

    }

    public function output() {

        return '<a href="mvc.php?action=textclicked">' . $this->model->text . '</a>';

    }

}

class Controller {

    private $model;

    public function __construct(Model $model) {

        $this->model = $model;

    }

    public function textClicked() {

        $this->model->text = 'Updated Hello World!';

    }

}


$model = new Model();

$controller = new Controller($model);

$view = new View($model);

if (isset($_GET['action'])) $controller->{$_GET['action']}();

echo $view->output();




 ?>
