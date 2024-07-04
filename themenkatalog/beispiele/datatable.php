<?php
$title = 'Rechnungen Übersicht | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Eine Übersicht aller Rechnungen mit Details zu Datum, Preis und Kunde. Ideal zur Vorbereitung auf die Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Rechnungen Übersicht, IT-Lehrabschlussprüfung, Applikationsentwicklung, Rechnungsdetails, PHP, MySQL, Datenbankanbindung';
$canonical = '/beispiele/datatable.php';
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
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                    &lt;title&gt;Rechnungen Übersicht&lt;/title&gt;
                    &lt;link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet"&gt;
                    &lt;link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;div class="container mt-5"&gt;
                        &lt;h1 class="mb-4"&gt;Rechnungen Übersicht&lt;/h1&gt;
                        &lt;table id="rechnungenTable" class="display" style="width:100%"&gt;
                            &lt;thead&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;RechnungsID&lt;/th&gt;
                                    &lt;th&gt;Rechnungsdatum&lt;/th&gt;
                                    &lt;th&gt;Preis&lt;/th&gt;
                                    &lt;th&gt;Kunde&lt;/th&gt;
                                &lt;/tr&gt;
                            &lt;/thead&gt;
                            &lt;tbody&gt;
                                &lt;?php
                                $conn = new mysqli('localhost', 'root', 'root', 'user');
                                if ($conn-&gt;connect_error) {
                                    die("Verbindung fehlgeschlagen: " . $conn-&gt;connect_error);
                                }

                                $sql = "SELECT rechnung.rechnungId, rechnung.datetime AS Rechnungsdatum, rechnung.preis, CONCAT(kunde.vorname, ' ', kunde.nachname) AS Kunde
                                        FROM rechnung
                                        JOIN kunde ON rechnung.kundenId = kunde.kundenId";
                                $result = $conn-&gt;query($sql);

                                if ($result-&gt;num_rows &gt; 0) {
                                    while($row = $result-&gt;fetch_assoc()) {
                                        echo "&lt;tr&gt;
                                            &lt;td&gt;{$row['rechnungId']}&lt;/td&gt;
                                            &lt;td&gt;{$row['Rechnungsdatum']}&lt;/td&gt;
                                            &lt;td&gt;{$row['preis']}&lt;/td&gt;
                                            &lt;td&gt;{$row['Kunde']}&lt;/td&gt;
                                        &lt;/tr&gt;";
                                    }
                                } else {
                                    echo "&lt;tr&gt;&lt;td colspan='4'&gt;Keine Rechnungen gefunden&lt;/td&gt;&lt;/tr&gt;";
                                }

                                $conn-&gt;close();
                                ?&gt;
                            &lt;/tbody&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;

                    &lt;script src="https://code.jquery.com/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
                    &lt;script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"&gt;&lt;/script&gt;
                    &lt;script&gt;
                    $(document).ready(function() {
                        $('#rechnungenTable').DataTable();
                    });
                    &lt;/script&gt;
                &lt;/body&gt;
                &lt;/html&gt;
            </code>
        </pre>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="checkboxRechnung.php">Zurück zu Waren auswählen und Rechnung erstellen</a>
        <a class="btn" href="insertAngestellte.php">Weiter zu Code Angestellte hinzufügen</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
