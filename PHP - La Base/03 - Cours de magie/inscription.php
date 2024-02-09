<?php
    require_once("action/inscriptionAction.php");
    
    $data = execute();
    //var_dump($data);

    $pageTitle = "Inscription";
    require_once("partial/header.php");
?>

<div class="register-section">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
    </p>
    <?php
        if ($data["showSuccessMessage"]) {
            ?>
            <div style="color:green;padding:3px;margin-bottom:5px;border:1px solid green;">
                Votre message a été envoyé avec succès.
            </div>
            <?php
        }
    ?>
    <form action="" method="post">
        <div>
            <input type="text" name="name" placeholder="Nom" required>
        </div>
        <div>
            <select name="course" required>
                <option>L'art des cartes</option>
                <option>La triche</option>
                <option>L'hypnose</option>
            </select>
        </div>
        <div>
            <textarea name="message" required cols="30" rows="10" placeholder="Informations complémentaires"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>
<?php
    require_once("partial/footer.php");
