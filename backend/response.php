<?php

/* print_r($_FILES['cv']['type']);
print_r($_POST);
die(); */

if (isset($_POST) && !empty($_POST) && isset($_FILES) && !empty($_FILES)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $file_name = $_FILES['cv']['name'];
}

?>

<h1>Ciao <?= $name ?></h1>
<p>Grazie per aver inviato il form, di seguito i dettagli del tuo invio:</p>
<div>
    <ul>
        <li><?= $name ?></li>
        <li><?= $surname ?></li>
        <li><?= $phone ?></li>
        <li><?= $email ?></li>
        <li><?= $age ?></li>
        <li>Il tuo documento caricato è <strong><?= $file_name ?></strong></li>
    </ul>
</div>