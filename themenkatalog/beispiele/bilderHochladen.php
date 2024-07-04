<?php
$title = 'Bilderhochladen Beispiel | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Formular zum Hinzufügen neuer Angestellter mit allen erforderlichen Feldern und Datenbankverbindung. Ein praktischer Leitfaden für die Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Angestellte hinzufügen, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbankanbindung, PHP, MySQL';
$authorName = 'MoWe, JoJo';
$canonical = '/beispiele/bilderHochladen.php';
include '../include/header.php';
?>

<main class="responsive">
    <pre>
        <code class="language-php">
&lt;?php
// Verzeichnis zum Speichern der hochgeladenen Bilder
$target_dir = "gespeicherteBilder/";
$feedback = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Überprüfen, ob es sich um ein Bild handelt
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $feedback = "Datei ist kein Bild.";
        $uploadOk = 0;
    }

    // Überprüfen, ob die Datei bereits existiert
    if (file_exists($target_file)) {
        $feedback = "Sorry, Datei existiert bereits.";
        $uploadOk = 0;
    }

    // Überprüfen der Dateigröße
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $feedback = "Sorry, Ihre Datei ist zu groß.";
        $uploadOk = 0;
    }

    // Zulässige Dateiformate
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $feedback = "Sorry, nur JPG, JPEG, PNG & GIF Dateien sind erlaubt.";
        $uploadOk = 0;
    }

    // Überprüfen, ob $uploadOk auf 0 gesetzt wurde
    if ($uploadOk == 0) {
        $feedback = "Sorry, Ihre Datei wurde nicht hochgeladen.";
    // Wenn alles in Ordnung ist, versuchen, die Datei hochzuladen
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $feedback = "Die Datei " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " wurde hochgeladen.";
        } else {
            $feedback = "Sorry, es gab einen Fehler beim Hochladen Ihrer Datei.";
        }
    }
}
?&gt;
&lt;div class="container mt-4"&gt;
    &lt;h2&gt;Bild hochladen&lt;/h2&gt;
    &lt;?php if ($feedback): ?&gt;
        &lt;div class="alert alert-info"&gt;
            &lt;?= $feedback; ?&gt;
        &lt;/div&gt;
    &lt;?php endif; ?&gt;
    &lt;form action="upload.php" method="post" enctype="multipart/form-data" class="form-group"&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="fileToUpload" class="form-label"&gt;Wählen Sie ein Bild zum Hochladen:&lt;/label&gt;
            &lt;input type="file" class="form-control" id="fileToUpload" name="fileToUpload"&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Bild hochladen&lt;/button&gt;
    &lt;/form&gt;
&lt;/div&gt;
        </code>
    </pre>
</main>

<?php include '../include/footer.php' ?>
