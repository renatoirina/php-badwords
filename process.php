<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];

    // Calcola la lunghezza del paragrafo
    $length = strlen($paragraph);

    // Censuro la parola
    $censoredParagraph = str_replace($badword, '***', $paragraph);

    // Calcolo le occorrenze della parola da censurare
    $occurrences = substr_count($paragraph, $badword);

    // Visualizzo i risultati
    echo "<h2>Paragrafo Originale:</h2>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: $length caratteri</p>";

    echo "<h2>Paragrafo Censurato:</h2>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Occorrenze della parola '$badword': $occurrences</p>";
} else {
    echo "Richiesta non valida.";
}
?>
