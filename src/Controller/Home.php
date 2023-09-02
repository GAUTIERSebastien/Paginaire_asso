<?php

namespace Digi\Paginaire\Controller;

use Digi\Paginaire\Kernel\Views;
use Digi\Paginaire\Kernel\AbstractController;
use Digi\Paginaire\Utils\MyFunction;


class Home extends AbstractController
{

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('index.html');
        $view->setFooter('footer.html');


        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Bienvenue chez Paginaire Asso',
        ]);
    }
}
