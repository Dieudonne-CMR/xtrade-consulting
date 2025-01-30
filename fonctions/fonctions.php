<?php
// fonction qui limite le nombre de mots dans un texte
function limiterNombreMots($texte, $limite) {
    $mots = explode(' ', $texte);
    if (count($mots) > $limite) {
        $texte = implode(' ', array_slice($mots, 0, $limite)) . '...';
    }
    return $texte;
}