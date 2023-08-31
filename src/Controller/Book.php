<?php

namespace Digi\Paginaire\Controller;

use Digi\Paginaire\Kernel\AbstractController;
use Digi\Paginaire\Entity\Books;
use Digi\Paginaire\Kernel\Views;


class Book extends AbstractController
{
    public function index()
    {

        $view = new Views();
        $tabBooks = Books::getAll();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('book.html');
        $view->setFooter('footer.html');

        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Page BookController',
            'tabBooks' => $tabBooks,
        ]);
    }
}
