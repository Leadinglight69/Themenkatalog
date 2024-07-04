<?php
$title = 'Tabledump | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Erklärung und Anzeige von PHP-Code für das Erstellen eines Datenbank-Dumps mit mysqldump. Ein praktischer Leitfaden zur Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Tabledump, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbank, PHP, MySQL, mysqldump';
$canonical = '/beispiele/tableDump.php';
$authorName = 'MoWe, JoJo';
$datePublished = '2024-06-02';
include '../include/header.php';
?>
<main class="responsive">
    <section class="container">
        <h1>Tabledump</h1>
        <div class="container mt-5">
            <div class="row mt-4">
                <div class="col-md-12">
                <pre><code class="language-html">
&lt;?php
$dbName = 'name';
$username = 'user';

$filename = 'Tabledump' . date("Y-m-d_H-i-s") . '.sql';
$command = "mysqldump -u $username $dbName &gt; $filename";

exec($command);
header("Location: Options.php");
exit;
?&gt;
                </code></pre>
                </div>
            </div>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="sqlVerleih.php">Zurück zu SQL Code Beispiel Verleih</a>
        <a class="btn" href="beispieleUebersicht.php">Weiter zur Übersicht</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
