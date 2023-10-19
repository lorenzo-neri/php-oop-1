<?php
/* 
Create un file index.php in cui:

- è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

include __DIR__ . '/db/db.php';

include __DIR__ . '/models/BackToTheFutureI.php';
include __DIR__ . '/models/StarWarsI.php';
include __DIR__ . '/models/PulpFiction.php';

include __DIR__ . '/assets/layout/head.php';

array_push($movieList, $backToTheFuture, $starWars, $pulpFiction);

?>

<div style="height: 100vh;" class="bg-dark">
    <div class="container p-5">

        <h1 class="text-danger">Movies</h1>

        <div class="row p-5">

            <?php foreach ($movieList as $movie) : ?>

                <div class="col">

                    <div style="height: 700px" class="card">
                        <img class="card-img-top" src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
                        <div class="card-body">
                            <h3>
                                <?= $movie->title ?>
                            </h3>
                            <div>
                                Durata: <?= $movie->time ?>
                            </div>
                            <div>
                                Genere: <?= $movie->genreList ?>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach ?>
        </div>
    </div>

</div>


<?php
#FOOTER
include __DIR__ . '/assets/layout/footer.php'
?>