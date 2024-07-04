<?php
$title = 'Angestellte hinzufügen | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Formular zum Hinzufügen neuer Angestellter mit allen erforderlichen Feldern und Datenbankverbindung. Ein praktischer Leitfaden für die Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Angestellte hinzufügen, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbankanbindung, PHP, MySQL';
$canonical = '/beispiele/insertAngestellte.php';
$authorName = 'MoWe, JoJo';
$datePublished = '2024-06-02';
include '../include/header.php';
?>
<main class="responsive">
    <section class="container">
        <div class="codeContainer">
        <pre class="codeBlock">
            <code class="language-html">
                &lt;!DOCTYPE html&gt;
                &lt;html lang="de"&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;
                    &lt;title&gt;Angestellte hinzufügen&lt;/title&gt;
                    &lt;link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;div class="container"&gt;
                    &lt;h2 class="mt-5"&gt;Neuen Angestellten hinzufügen&lt;/h2&gt;
                    &lt;?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "Angestellte";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Verbindung fehlgeschlagen: " . $conn->connect_error);
                        }

                        $vorname = $_POST['vorname'];
                        $nachname = $_POST['nachname'];
                        $email = $_POST['email'];
                        $einstellungsdatum = $_POST['einstellungsdatum'];
                        $berufsbezeichnung = $_POST['berufsbezeichnung'];
                        $gehalt = $_POST['gehalt'];

                        // SQL-Insert-Statement
                        $sql = "INSERT INTO angestellte (vorname, nachname, email, einstellungsdatum, berufsbezeichnung, gehalt)
                                VALUES ('$vorname', '$nachname', '$email', '$einstellungsdatum', '$berufsbezeichnung', '$gehalt')";

                        if ($conn->query($sql) === TRUE) {
                            echo "&lt;div class='alert alert-success' role='alert'&gt;Neuer Angestellter erfolgreich hinzugefügt!&lt;/div&gt;";
                        } else {
                            echo "&lt;div class='alert alert-danger' role='alert'&gt;Fehler: " . $sql . "&lt;br&gt;" . $conn->error . "&lt;/div&gt;";
                        }

                        $conn->close();
                    }
                    ?&gt;
                    &lt;form method="post" action="insert_Angestellte.php"&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="vorname"&gt;Vorname&lt;/label&gt;
                            &lt;input type="text" class="form-control" id="vorname" name="vorname" required&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="nachname"&gt;Nachname&lt;/label&gt;
                            &lt;input type="text" class="form-control" id="nachname" name="nachname" required&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="email"&gt;Email&lt;/label&gt;
                            &lt;input type="email" class="form-control" id="email" name="email" required&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="einstellungsdatum"&gt;Einstellungsdatum&lt;/label&gt;
                            &lt;input type="date" class="form-control" id="einstellungsdatum" name="einstellungsdatum" required&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="berufsbezeichnung"&gt;Berufsbezeichnung&lt;/label&gt;
                            &lt;input type="text" class="form-control" id="berufsbezeichnung" name="berufsbezeichnung" required&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group"&gt;
                            &lt;label for="gehalt"&gt;Gehalt&lt;/label&gt;
                            &lt;input type="number" class="form-control" id="gehalt" name="gehalt" required&gt;
                        &lt;/div&gt;
                        &lt;button type="submit" class="btn btn-primary"&gt;Hinzufügen&lt;/button&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"&gt;&lt;/script&gt;
                &lt;script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"&gt;&lt;/script&gt;
                &lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"&gt;&lt;/script&gt;
                &lt;/body&gt;
                &lt;/html&gt;
            </code>
        </pre>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="insertAngestellte.php">Zurück zu Rechnungen Übersicht</a>
        <a class="btn" href="navbarBeispiel.php">Weiter zu Nav Example</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
