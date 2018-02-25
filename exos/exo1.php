<?php

/*
 * On doit trouver un chiffre aléatoire entre 0 et 1000 qui a été généré en secret !
 * Ce chiffre aléatoire peut être tester grâce à la fonction "isSecretNumber" qui existe
 * déjà et que tu peux utiliser ainsi :
 *
 * ex : $test = isSecretNumber(123);
 *
 * Si le chiffre passé en paramètre est le bon, la fonction retourne "true", sinon
 * elle retourne "false".
 *
 * Une fois que tu as trouvé le bon nombre, tu dois le retourner avec "return"
 * Conseils : Le mieux c'est de tester toutes les possibilités avec une boucle ;)
 */

function searchAndFind() {

  // ex : return isSecretNumber(xxx);
}
$secretNumber = mt_rand(0, 1000);
var_dump($secretNumber);
