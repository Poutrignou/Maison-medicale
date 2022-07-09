formulaire 

<form method="POST" action="index2.php" enctype="multipart/form-data">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <!-- Ajout champ d'upload ! -->
    <div>
        <label for="screenshot" class="form-label">Votre capture d'écran</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
    <!-- Fin ajout du champ -->
        <input type="submit">
    
</form>


verification du formulaire


    <?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) AND $_FILES['screenshot']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['screenshot']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                var_dump(pathinfo($_FILES['screenshot']['name'])); 
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions))
                {
                
                }
        }
}
?>


    <?php   if (isset($_POST['email']) ||  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) : ?> 
    <!-- <\?= est l'equivalent de ouvrir balise php + echo   -->   
        <p class="card-text"> <?= $_POST['email']; ?> </p>
        <?php endif; ?> 
