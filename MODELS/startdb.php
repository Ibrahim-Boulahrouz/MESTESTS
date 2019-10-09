<?php

    $identifiant = $_POST['identifiant'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];



    $db = new PDO('mysql:host=mysql-ibrahim-boulahrouz.alwaysdata.net;dbname=ibrahim-boulahrouz_db', '189617', 'maximeaidemoistp');

    $recup = $db->query('SELECT * FROM user');

    while($row = $recup->fetch()) {
        echo $row['identifiant'];
    }