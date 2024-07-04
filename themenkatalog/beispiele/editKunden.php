<?php
$title = 'PHP: Kundendaten bearbeiten und anzeigen';
$description = 'Ein Beispiel-Skript zur Bearbeitung und Anzeige von Kundendaten mit PHP und SQL. Lernen Sie, wie man Formulare verarbeitet, Datenbankabfragen durchführt und Daten in HTML-Formularen darstellt.';
$keywords = 'PHP, SQL, Kundendaten, Formularverarbeitung, Datenbank, HTML, Webentwicklung';
$canonical = '/beispiele/editKunden.php';
include '../include/header.php';
?>

<main class="responsive">
    <h2>Kundendaten bearbeiten</h2>
    <pre>
        <code class="language-html">
            &lt;?php
            require 'functions/config.php';

            $kundenId = $_POST['kundenId'] ?? ($_GET['id'] ?? null);
            $kunde = null;
            $feedback = '';

            if ($kundenId) {
                $stmt = $conn->prepare("SELECT * FROM Kunden WHERE KundenId = ?");
                $stmt->execute([$kundenId]);
                $kunde = $stmt->fetch(PDO::FETCH_ASSOC);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['speichern'])) {
                $params = [];
                $sql = "UPDATE Kunden SET ";

                foreach ($_POST as $key => $value) {
                    if ($value !== '' && $key != 'speichern' && $key != 'kundenId') {
                        $sql .= "$key = ?, ";
                        $params[] = $value;
                    }
                }

                if (count($params) > 0) {
                    $sql = rtrim($sql, ', '); // Entferne das letzte Komma
                    $sql .= " WHERE KundenId = ?";
                    $params[] = $kundenId;

                    try {
                        $stmt = $conn->prepare($sql);
                        $stmt->execute($params);
                        $feedback = 'Kundendaten erfolgreich aktualisiert.';
                    } catch (Exception $e) {
                        $feedback = "Fehler: " . $e->getMessage();
                    }
                }
            }
            ?&gt;
            &lt;div class="container mt-4"&gt;
                &lt;h2&gt;Kundendaten bearbeiten&lt;/h2&gt;
                &lt;?php if ($feedback): ?&gt;
                    &lt;div class="alert alert-info"&gt;
                        &lt;?= $feedback; ?&gt;
                    &lt;/div&gt;
                &lt;?php endif; ?&gt;
                &lt;form action="editKunden.php" method="post"&gt;
                    &lt;div class="form-group"&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="kundenId" class="form-label"&gt;Kunden-ID&lt;/label&gt;
                                &lt;input type="number" class="form-control" id="kundenId" name="kundenId" value="&lt;?= htmlspecialchars($kunde['KundenId'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="anrede" class="form-label"&gt;Anrede&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="anrede" name="anrede" value="&lt;?= htmlspecialchars($kunde['Anrede'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="titel" class="form-label"&gt;Titel&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="titel" name="titel" value="&lt;?= htmlspecialchars($kunde['Titel'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="nachname" class="form-label"&gt;Nachname&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="nachname" name="nachname" value="&lt;?= htmlspecialchars($kunde['Nachname'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="vorname" class="form-label"&gt;Vorname&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="vorname" name="vorname" value="&lt;?= htmlspecialchars($kunde['Vorname'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="firma" class="form-label"&gt;Firma&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="firma" name="firma" value="&lt;?= htmlspecialchars($kunde['Firma'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="strasse" class="form-label"&gt;Straße&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="strasse" name="strasse" value="&lt;?= htmlspecialchars($kunde['Strasse'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="plz" class="form-label"&gt;PLZ&lt;/label&gt;
                                &lt;input type="number" class="form-control" id="plz" name="plz" value="&lt;?= htmlspecialchars($kunde['PLZ'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="ort" class="form-label"&gt;Ort&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="ort" name="ort" value="&lt;?= htmlspecialchars($kunde['Ort'] ?? '') ?&gt;" &gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="telefon" class="form-label"&gt;Telefon&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="telefon" name="telefon" value="&lt;?= htmlspecialchars($kunde['Telefon'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="telefon_2" class="form-label"&gt;Zweites Telefon&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="telefon_2" name="telefon_2" value="&lt;?= htmlspecialchars($kunde['Telefon_2'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="mail" class="form-label"&gt;E-Mail&lt;/label&gt;
                                &lt;input type="email" class="form-control" id="mail" name="mail" value="&lt;?= htmlspecialchars($kunde['Mail'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="kundeSeit" class="form-label"&gt;Kunde seit&lt;/label&gt;
                                &lt;input type="date" class="form-control" id="kundeSeit" name="kundeSeit" value="&lt;?= htmlspecialchars($kunde['KundeSeit'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="col"&gt;
                                &lt;label for="fax" class="form-label"&gt;Fax&lt;/label&gt;
                                &lt;input type="text" class="form-control" id="fax" name="fax" value="&lt;?= htmlspecialchars($kunde['Fax'] ?? '') ?&gt;"&gt;
                            &lt;/div&gt;
                            &lt;div class="mb-3"&gt;
                                &lt;label for="kommentar" class="form-label"&gt;Kommentar&lt;/label&gt;
                                &lt;textarea class="form-control" id="kommentar" name="kommentar"&gt;&lt;?= htmlspecialchars($kunde['Kommentar'] ?? '') ?&gt;&lt;/textarea&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" name="speichern" class="btn btn-primary"&gt;Speichern&lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
        </code>
    </pre>

    <h2>Kundenliste</h2>
    <pre>
        <code class="language-html">
            &lt;?php
            try {
                // Abfragen aller Kunden
                $stmtKunden = $conn->prepare("SELECT * FROM Kunden");
                $stmtKunden->execute();
                $kunden = $stmtKunden->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                die("Fehler: " . $e->getMessage());
            }
            ?&gt;
            &lt;div class="container mt-4"&gt;
                &lt;h2&gt;Kundenliste&lt;/h2&gt;
                &lt;table class="table"&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th&gt;Kunden-ID&lt;/th&gt;
                            &lt;th&gt;Anrede&lt;/th&gt;
                            &lt;th&gt;Titel&lt;/th&gt;
                            &lt;th&gt;Nachname&lt;/th&gt;
                            &lt;th&gt;Vorname&lt;/th&gt;
                            &lt;th&gt;Firma&lt;/th&gt;
                            &lt;th&gt;Strasse&lt;/th&gt;
                            &lt;th&gt;PLZ&lt;/th&gt;
                            &lt;th&gt;Ort&lt;/th&gt;
                            &lt;th&gt;Telefon&lt;/th&gt;
                            &lt;th&gt;E-Mail&lt;/th&gt;
                            &lt;th&gt;Kommentar&lt;/th&gt;
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                        &lt;?php foreach ($kunden as $kunde): ?&gt;
                            &lt;tr&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['KundenId']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Anrede']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Titel']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Nachname']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Vorname']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Firma']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Strasse']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['PLZ']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Ort']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Telefon']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Mail']) ?&gt;&lt;/td&gt;
                                &lt;td&gt;&lt;?= htmlspecialchars($kunde['Kommentar']) ?&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                        &lt;?php endforeach; ?&gt;
                    &lt;/tbody&gt;
                &lt;/table&gt;
            &lt;/div&gt;
        </code>
    </pre>
</main>

<?php include '../include/footer.php' ?>
