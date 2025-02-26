<?php 
    file_put_contents('list_data/'.$_POST['title'] , $_POST['description']);
    header('Location: /create.php?title='.$POST['title']);
?>