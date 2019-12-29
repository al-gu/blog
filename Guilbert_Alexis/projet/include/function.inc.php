<?php

function pagination($page_courante, $nb_articles_par_page) {
    $index = ($page_courante - 1) * $nb_articles_par_page;
    return $index;
}

function nb_total_articles($bdd) {
    $sth = $bdd->prepare("SELECT COUNT(*) as total_articles "
            . "FROM article WHERE publie = :publie");
    $sth->bindValue('publie', 1, PDO::PARAM_BOOL);
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);

    $total_articles = $result['total_articles'];

    return $total_articles;
}
