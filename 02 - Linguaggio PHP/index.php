<?php 
    // Commento in linea
    /*
       Commento su più linee
    */

    /* Stringhe */
    echo "<h1 class='classe' attr=\"qui sono nella stringa\">Hello World!</h1>";
    echo '<h2 class="classe" attr=\'qui sono nella stringa\'>Tipi di Dato:</h2>';

    /* Booleani */
    // Vero -> true
    // Falso -> false

    /* Numeri */
    echo 10;
    echo "\n"; // A capo nel documento di output
    echo 1.15; 
    echo "<br/>"; // A capo nella pagina

    /* Nomi delle variabili */
    $nome_variabile; // OK
    $nomeVariabile; // OK
    $nomevariabile; // Attenzione! 

    /* Array */
    // Array anonimo, si accede ai valori usando l'indice
        $array_1 = [1, 2, 3, 4, 5];
        $array_2 = array(1, 2, 3, 4, 5);

    // Array con chiavi per accedere ai valori
    $array_3 = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta"   => 21
    );

    echo $array_3; // Non posso stampare direttamente un array
    echo "<br/>";
    print_r($array_3);
    echo "<br/>";
    var_dump($array_3);

    // Verifica se Mario Rossi è maggiorenne
    if ($array_3["eta"] >= 18) {
        echo "Utente maggiorenne<br/>";
    } else {
        echo "Utente minorenne<br/>";
    }

    // Verifica se Mario Rossi ha 18 anni
    if ($array_3["eta"] == "18") {
        echo "Utente diciottenne<br/>";
    } else {
        echo "Utente non diciottenne<br/>";
    }

    // Uguaglianza stretta, controlla valore E tipo
    if ($array_3["eta"] == 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] == "21") {} // Questa condizione è VERA!
    if ($array_3["eta"] === 21) {} // Questa condizione è VERA!
    if ($array_3["eta"] === "21") {} // Questa condizione è FALSA!



?>