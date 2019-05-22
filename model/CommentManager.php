<?php 

require_once ("model/Manager.php");

class CommentManager extends Manager {


    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function updateComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->update('UPDATE comments SET id=[value-1], post_id =[value-2], author =[value-3], comment =[value-4], comment_date =[value-5] WHERE 1');
        $comments->execute(array($postId));

        return $comments;
        
    }
}