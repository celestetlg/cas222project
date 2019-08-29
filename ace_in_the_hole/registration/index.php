<?php

if (isset($_POST['submit'])) {

    include '../includes/db.inc.html.php';

    $roleName = $_POST['role'];
    $fullName = $_POST['rName'];
    $age = $_POST['rAge'];
    $emailAdr = $_POST['rEmail'];
    $eName = $_POST['rEName'];
    $phoneNum = $_POST['rPhone'];
    $gender = $_POST['gender'];
    $satEvent = $_POST['satEvent'];
    $sunEvent = $_POST['sunEvent'];
    $comments = $_POST['content'];

    try {
        $sql = 'INSERT INTO registration SET
          role = :role,
          fname = :fname,
          age = :age,
          email = :email,
          ename = :ename,
          phone = :phone,
          gender = :gender,
          satevent = :satevent,
          sunevent = :sunevent,
          comment = :comment';
        $s = $pdo->prepare($sql);
        $s->bindValue(':role', $roleName);
        $s->bindValue(':fname', $fullName);
        $s->bindValue(':age', $age);
        $s->bindValue(':email', $emailAdr);
        $s->bindValue(':ename', $eName);
        $s->bindValue(':phone', $phoneNum);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':satevent', $satEvent);
        $s->bindValue(':sunevent', $sunEvent);
        $s->bindValue(':comment', $comments);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted joke: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {

    include 'registration.html.php';
}

?>