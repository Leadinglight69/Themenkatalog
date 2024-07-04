<?php
$title = 'Bilderhochladen Beispiel | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Formular zum Hinzufügen neuer Angestellter mit allen erforderlichen Feldern und Datenbankverbindung. Ein praktischer Leitfaden für die Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Angestellte hinzufügen, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbankanbindung, PHP, MySQL';
$authorName = 'MoWe, JoJo';
$canonical = '/beispiele/configBeispiel.php';
include '../include/header.php';
?>

<main class="responsive">
    <pre>
        <code class="language-php">
&lt;?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meine_datenbank";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?&gt;
        </code>
    </pre>
</main>

<?php include '../include/footer.php' ?>
