<?php

if (isset($_POST['submit'])) {

    include '../includes/db.inc.html.php';

    $roleName = $_POST['role'];
    $fullName = $_POST['rName'];
    $emailAdr = $_POST['rEmail'];
    $comments = $_POST['content'];

    try {
        $sql = 'INSERT INTO contact SET
          role = :role,
          fname = :fname,          
          email = :email,          
          comment = :comment';
        $s = $pdo->prepare($sql);
        $s->bindValue(':role', $roleName);
        $s->bindValue(':fname', $fullName);
        $s->bindValue(':email', $emailAdr);
        $s->bindValue(':comment', $comments);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted joke: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {

    include 'contact.html.php';
}

?>