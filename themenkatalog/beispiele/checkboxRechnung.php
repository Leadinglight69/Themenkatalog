<?php
$title = 'Beispiele | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Lernen Sie, wie man eine Rechnung mit ausgewählten Waren in einer Applikation erstellt. Ein praktischer Leitfaden zur Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Rechnung erstellen, IT-Lehrabschlussprüfung, Applikationsentwicklung, Waren auswählen, Coding-Beispiele, PHP, MySQL, Datenbankanbindung';
$canonical = '/beispiele/checkboxRechnung.php';
$authorName = 'MoWe, JoJo';
$datePublished = '2024-06-02';
include '../include/header.php';
?>
<main class="responsive">
    <section class="container">
        <div class="codeContainer">
        <pre class="codeBlock">
            <code class="language-html">
&lt;div class="container mt-5"&gt;
    &lt;h1 class="mb-4"&gt;Waren auswählen und Rechnung erstellen&lt;/h1&gt;
    &lt;?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verbindung zur Datenbank herstellen
        $conn = new mysqli('localhost', 'root', 'root', 'user');
        if ($conn-&gt;connect_error) {
            die("Verbindung fehlgeschlagen: " . $conn-&gt;connect_error);
        }

        // Kunden-ID und ausgewählte Waren aus dem POST-Request abrufen
        $kundeId = $_POST['kunde'];
        $waren = $_POST['waren'];

        if (!empty($waren)) {
            $datetime = date("Y-m-d H:i:s");
            $totalPreis = 0;

            // Gesamtpreis der ausgewählten Waren berechnen
            foreach ($waren as $warenId) {
                $result = $conn-&gt;query("SELECT preis FROM waren WHERE warenId = $warenId");
                if ($result-&gt;num_rows &gt; 0) {
                    $row = $result-&gt;fetch_assoc();
                    $totalPreis += $row['preis'];
                }
            }

            // Neue Rechnung in die Tabelle 'rechnung' einfügen
            $sql = "INSERT INTO rechnung (datetime, preis, kundenId) VALUES ('$datetime', '$totalPreis', '$kundeId')";
            if ($conn-&gt;query($sql) === TRUE) {
                $rechnungId = $conn-&gt;insert_id;

                // Rechnungsdetails in die Tabelle 'rechnungsdetails' einfügen
                foreach ($waren as $warenId) {
                    $sql = "INSERT INTO rechnungsdetails (rechnungId, warenId) VALUES ('$rechnungId', '$warenId')";
                    $conn-&gt;query($sql);
                }

                echo '&lt;div class="alert alert-success" role="alert"&gt;Rechnung erfolgreich hinzugefügt&lt;/div&gt;';
            } else {
                echo '&lt;div class="alert alert-danger" role="alert"&gt;Fehler: ' . $sql . '&lt;br&gt;' . $conn-&gt;error . '&lt;/div&gt;';
            }
        } else {
            echo '&lt;div class="alert alert-warning" role="alert"&gt;Keine Waren ausgewählt&lt;/div&gt;';
        }

        // Verbindung schließen
        $conn-&gt;close();
    }
    ?&gt;

    &lt;form action="" method="POST"&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="kunde"&gt;Kunden ID:&lt;/label&gt;
            &lt;input type="number" class="form-control" id="kunde" name="kunde" required&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="waren"&gt;Wählen Sie die Waren aus:&lt;/label&gt;
            &lt;div class="checkbox"&gt;
                &lt;?php
                // Verbindung zur Datenbank herstellen
                $conn = new mysqli('localhost', 'root', 'root', 'user');
                if ($conn-&gt;connect_error) {
                    die("Verbindung fehlgeschlagen: " . $conn-&gt;connect_error);
                }

                // Waren aus der Datenbank abrufen
                $sql = "SELECT warenId, beschreibung FROM waren";
                $result = $conn-&gt;query($sql);

                // Waren als Checkboxes anzeigen
                if ($result-&gt;num_rows &gt; 0) {
                    while($row = $result-&gt;fetch_assoc()) {
                        echo '&lt;div class="form-check"&gt;
                                &lt;input class="form-check-input" type="checkbox" name="waren[]" value="' . $row['warenId'] . '" id="waren' . $row['warenId'] . '"&gt;
                                &lt;label class="form-check-label" for="waren' . $row['warenId'] . '"&gt;
                                    ' . $row['beschreibung'] . '
                                &lt;/label&gt;
                              &lt;/div&gt;';
                    }
                } else {
                    echo "Keine Waren verfügbar.";
                }

                // Verbindung schließen
                $conn-&gt;close();
                ?&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Einfügen&lt;/button&gt;
    &lt;/form&gt;
&lt;/div&gt;
            </code>
        </pre>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="beispieleUebersicht.php">Zurück zur Übersicht</a>
        <a class="btn" href="datatable.php">Weiter zu Rechnungen Übersicht</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
