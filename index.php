<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <div class="container">
        <section class="banniere">
            <h1>
                Accueil
            </h1> 
            <div>
                <button type="button" class="button-presentation">Qui sommes nous ?</button>
            </div>
            <div>
                <p class="text-presentation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, voluptas et doloribus provident at nostrum eveniet suscipit unde qatque.</p>
            </div>
        </section>  
    </div>
    <footer>
        <form method="POST" action="index2.php">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <input type="submit">
        </form>
            <div>
                <button type="button" id="button-carte">Ou sommes nous ?</button>
            </div>
        <iframe id="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d908.7988319206194!2d3.957840829256955!3d43.76983796713947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72b243ce1ac28f7a!2zNDPCsDQ2JzExLjQiTiAzwrA1NyczMC4yIkU!5e1!3m2!1sfr!2sfr!4v1657383465360!5m2!1sfr!2sfr" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    <script src="index.js"></script>
</body>
</html>

