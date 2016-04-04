<?php
function getpagination($table,$nb_par_page = 5) {
    global $bdd;
    if ($table == 'commentaires') {
        $rep = $bdd->prepare('SELECT COUNT(*)AS nb FROM commentaires WHERE id_billet= ? ');
        $rep->execute(array((int)$_GET['billet']));
    } else {
        $rep = $bdd->query('SELECT COUNT(*) as nb FROM ' . $table);
    }
    $total_billet = $rep->fetch();
    $nombre_billets = $total_billet['nb'];
    $nombre_page = ceil($nombre_billets / $nb_par_page);
    
    return $nb_par_page. '-' . $nombre_page.'-'.$nombre_billets;

}