<?php 
@$nom     = $_POST['nom'];
@$prenom  = $_POST['prenom'];
@$adresse = $_POST['adresse'];
@$cp      = $_POST['cp'];
@$ville   = $_POST['ville'];
@$email   = $_POST['email'];
@$tel     = $_POST['tel'];
@$comment = $_POST['comment'];
@$message = $_POST['message'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>découverte de notre dernier produit | sté Eternity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main class="container-fluid">
        <section id="hero">

            <div class="row">
                <div class="col">
                    <figure class="zoom">
                        <img src="./image/tete humanoïde.png" alt="Robot-humanoïde">
                    </figure>
                </div>
                <div class="col align-self-center">
                    <h1 class="zoom">L’androide HZR+ <br> pour une vie éternelle...</h1>
                </div>
                <div class="col-5 align-self-end font-weight-bold">
                    <p>Stockage de votre mémoire et de votre conscience.</p>
                    <p>Pile à la Kryptonite - Eternité.</p>
                    <p>Finis les maladies, les repas, les pbs de qualité de l'air...</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4"></div>
                <div class="col-3"></div>
                <div class="col-4">
<!-- Essai de créer une <div> en récupérant le message d'erreur php... -->
                <?php 
                @$message=$_GET['message'];
                echo $message; 
                ?>
                    <form action="./contact.php" method="POST">
                        <div id="newcontact">
                            <fieldset>
                                <legend>Inscrivez-vous pour recevoir une documentation complète :</legend>
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" value="<?php echo $nom?>" >
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom" value="<?php echo $prenom?>" ><br>
                                <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" id="adresse" maxlength="50" size="50"><br>
                                <label for="cp">CP</label>
                                <input type="number" name="cp" id="cp" maxlength="5" size="5">
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" maxlength="30" size="30"><br>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                                <label for="tel">Tel</label>
                                <input type="tel" name="tel" id="tel"><br>
                                <Label for="comment">Laissez-nous un commentaire...</Label>
                                <br>
                                <textarea name="comment" id="comment" cols="50" rows="5" maxlength="250" size="50"
                                    placeholder="En quelques mots..."></textarea>
                            </fieldset>

                            <fieldset>
                                <input type="submit" name="valider" value="Envoyer" id="button">
                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="col-1"></div>
            </div>

        </section>
    </main>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>