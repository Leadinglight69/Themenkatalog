<?php
$title = 'Navbar Example | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Eine Navbar-Vorlage mit Home, Angestellte hinzufügen, Teams und Manager Links. Perfekt für die IT-Lehrabschlussprüfung in Applikationsentwicklung.';
$keywords = 'Navbar, IT-Lehrabschlussprüfung, Applikationsentwicklung, Bootstrap, PHP';
$canonical = '/beispiele/navbarBeispiel.php';
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
                    &lt;title&gt;Navbar&lt;/title&gt;
                    &lt;!-- Bootstrap CSS --&gt;
                    &lt;link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;nav class="navbar navbar-expand-lg navbar-light bg-light"&gt;
                        &lt;a class="navbar-brand" href="#"&gt;Firma&lt;/a&gt;
                        &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"&gt;
                            &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                        &lt;/button&gt;
                        &lt;div class="collapse navbar-collapse" id="navbarNav"&gt;
                            &lt;ul class="navbar-nav"&gt;
                                &lt;li class="nav-item active"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Home &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Angestellte hinzufügen&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Teams&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="#"&gt;Manager&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/nav&gt;
                &lt;/body&gt;
                &lt;/html&gt;
            </code>
        </pre>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="insertAngestellte.php">Zurück zu Code Angestellte hinzufügen</a>
        <a class="btn" href="sqlAngestellte.php">Weiter zu SQL Code Beispiel Angestellte</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
