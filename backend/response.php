<!-- 
<?php
# print_r($_POST);
# die(); 
?>
-->

<?php if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_FILES['cv'])) : ?>
    <h1>Ciao <?= $_POST['name'] ?></h1>
    <p>Grazie per aver inviato il form, di seguito i dettagli del tuo invio:</p>
    <div>
        <ul>
            <li><?= $_POST['name'] ?></li>
            <li><?= $_POST['surname'] ?></li>
            <li><?= $_POST['phone'] ?></li>
            <li><?= $_POST['email'] ?></li>
            <li><?= $_POST['age'] ?></li>
            <li>Il tuo documento caricato è <strong><?= $_FILES['cv']['name'] ?></strong></li>
        </ul>
    </div>
<?php else : ?>
    <h1>Errore nei campi</h1><a href="../index.html">Torna indietro</a>
<?php endif; ?>