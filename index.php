<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */
$headers = [
    "From" => "adresse1@mail.com",
    "X-Mailer" => 'PHP/' . phpversion(),
    "Mime-Version" => '1.0',
    "Content-type" => 'text/html; charset=utf-8'
];

$to = [
    "aaa@aaa.aa",
    'adresse2@mail.com',
];


$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                <p>un texte court de newsletter</p>
            </div>
        </body>
    </html>
';

?>
<table style="border-collapse: collapse" border="1px solid black">
    <?php
foreach ($to as $value) {
    if (mail($value, 'exo 168', $html, $headers)) {
        echo "<tr><td>Email envoyé</td><td>$value</td></tr>";
    } else {
        echo "<tr><td>Échec de l'envoi</td><td>$value</td></tr>";
    }
}
?>
</table>

