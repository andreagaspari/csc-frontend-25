<?php

    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;
    
    $somma = $a + $b;
    $differenza = $a - $b;
    $moltiplicazione = $a * $b;
    $divisione = $a / $b;

    ?>
        <div>
            <h2>Esercizio 01</h2>
            <ul>
                <li><strong>Somma:</strong> <?php echo $somma; ?></li>
                <li><strong>Differenza:</strong> <?php echo $differenza; ?></li>
                <li><strong>Moltiplicazione:</strong> <?php echo $moltiplicazione; ?></li>
                <li><strong>Divisione:</strong> <?php echo $divisione; ?></li>
            </ul>
        </div>
    <?php

    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";

    ?> 
        <div>
            <h2>Esercizio 02</h2>
            <p>
                <?php
                    if ($parola == "casa") {
                        echo "La parola è \"Casa\"";
                    } else {
                        echo "La parola è diversa da \"Casa\"";
                    }
                ?>
            </p>
        </div>
    <?php

    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;

    ?>
        <div>
            <h2>Esercizio 03</h2>
            <h3>Uguaglianza per valore</h3>
            <p>
                <?php
                    if ($c == $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
            <h3>Uguaglianza per tipo e valore</h3>
            <p>
                <?php
                    if ($c === $d) {
                        echo "C è uguale a D";
                    } else {
                        echo "C è diverso da D";
                    }
                ?>
            </p>
        </div>
    <?php
    
    /**
     * Es 04
     * Converti il voto in un giudizio:
     * - Da 0 a 5	-> Insufficiente
     * - 6 			-> Sufficiente
     * - 7 o 8		-> Buono
     * - 9 			-> Ottimo
     * - 10			-> Eccellente
     */
    $voto = 6;
