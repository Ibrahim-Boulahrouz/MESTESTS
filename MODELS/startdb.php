<?php

    $identifiant = $_POST['identifiant'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];



    $db = new PDO('mysql-ibrahim-boulahrouz.alwaysdata.net;dbname=ibrahim-boulahrouz_db', '189617', 'maximeaidemoistp');

    $recup = $db->query('SELECT * FROM user');
    echo $recup;