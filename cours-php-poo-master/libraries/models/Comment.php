<?php

require_once('libraries/database.php');

class Comment {
//Retourne la liste des commentaires d'un article donné
    public function findAllWithArticle(int $article_id) : array
    {
        $pdo = getPdo();
        $query = $pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id");
        $query->execute(['article_id' => $article_id]);
        $commentaires = $query->fetchAll();

        return $commentaires;
    }

//Retourne un commentaire de la base de données grâce à son identifiant
    public function find(int $id)
    {
        $pdo = getPdo();
        $query = $pdo->prepare('SELECT * FROM comments WHERE id = :id');
        $query->execute(['id' => $id]);
        $comment = $query->fetch();
        return $comment;
    }

//Suppprime un commentaire grâce a son identifiant
    public function delete(int $id): void 
    {
        $pdo = getPdo();
        $query = $pdo->prepare('DELETE FROM comments WHERE id = :id');
        $query->execute(['id' => $id]);
    }

//Insérer un commentaire dans la base de données
    public function insert(string $author, string $content, int $article_id) : void 
    {
        $pdo = getPdo();
        $query = $pdo->prepare('INSERT INTO comments SET author = :author, content = :content, article_id = :article_id, created_at = NOW()');
        $query->execute(compact('author', 'content', 'article_id'));
    }
}