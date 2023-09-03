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

    public function edit()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('book.html');
        $view->setFooter('footer.html');

        // Récupère les données du livre si un ID est fourni dans la chaîne de requête
        $book = null;
        if (isset($_GET['id'])) {
            $book = Books::getById($_GET['id']);
        }

        // Si le formulaire est soumis (méthode POST), traite la mise à jour du livre.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $updatedData = [
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'type' => $_POST['type'],
                'image' => $_POST['image'],
                'description' => $_POST['description']
            ];

            // Méthode update pour mettre à jour le livre dans la base de données.
            $updateResult = Books::update((int)$_GET['id'], $updatedData);

            if ($updateResult) {
                $this->setFlashMessage("L'enrregistrement est bien mis à jour", "success");
                header('Location: index.php?controller=Book&action=index');
                exit;
            } else {
                $this->setFlashMessage('Erreur lors de la mise à jour', 'error');
            }
        }

        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Modifier un livre',
            'book' => $book,
        ]);
    }
}
