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

class Movie
{
    //variabili d'istanza
    public $name;
    public $time;

    //costruttore
    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$movie_1 = new Movie('Back to the Future');
$movie_2 = new Movie('Star Wars');



include __DIR__ . '/assets/layout/head.php'

?>


<h3>
    Film 1: <?php echo $movie_1->get_name() ?>
</h3>
<h3>
    Film 2: <?= $movie_2->get_name() ?>
</h3>

<?php
#FOOTER
include __DIR__ . '/assets/layout/footer.php'
?>