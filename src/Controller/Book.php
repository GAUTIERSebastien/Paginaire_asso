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

    public function delete()
    {
        $result = false;

        // Vérifie l'ID et supprime le livre
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = Books::delete($id);
            echo 'je suis dans delete' . $result;
        }

        if ($result) {
            $this->setFlashMessage("L'enrregistrement est bien supprimé", "success");
        } else {
            $this->setFlashMessage('aucun enregistrement ne correspond', 'error');
        }

        // Rediriger l'utilisateur vers la liste des livres après la suppression
        header('Location: index.php?controller=Book&action=index');
        exit;  // Arrêter l'exécution après une redirection
    }
}
