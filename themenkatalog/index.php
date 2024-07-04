<?php
$title = 'Themenkatalog | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Entdecken Sie unseren umfassenden Themenkatalog zur Vorbereitung auf die Lehrabschlussprüfung in Applikationsentwicklung - Coding. Dieser Leitfaden ist speziell nach den Richtlinien der Wirtschaftskammer Österreich gestaltet, um Ihnen eine zielgerichtete und effiziente Vorbereitung zu ermöglichen. Finden Sie alles von IT-Sicherheit über Netzwerkdienste bis hin zu Softwareentwicklung und mehr.';
$keywords = 'Lehrabschlussprüfung, Applikationsentwicklung, Coding, Themenkatalog, IT-Sicherheit, Netzwerkdienste, Softwareentwicklung';
$canonical = 'https://www.codeabschlussguide.at/index.php';
$authorName = 'JoJo';
$datePublished = '2024-04-8';
include 'include/header.php';
?>
<main class="responsive">
    <section class="container" id="service">
        <h1>THEMENKATALOG</h1>
        <p>Dieser Themenkatalog dient der Vorbereitung auf die Lehrabschlussprüfung in Applikationsentwicklung - Coding und basiert auf den offiziellen Vorgaben der Wirtschaftskammer Österreich.</p>
        <p>Die vollständigen Informationen und Details können im <a class="event" href="https://www.wko.at/ooe/bildung-lehre/themenkatalog-applikationsentwicklung-coding-v1-2020.pdf" style="font-size: 100%; text-decoration: underline" target="_blank" title="Link zuum WKO Themenkatalog">offiziellen Themenkatalog</a> eingesehen werden.</p>
        <h2>für die Vorbereitung auf die Lehrabschlussprüfung </h2>
        <div class="serviceGrid">
            <?php
            $themen = [
                ['title' => '1) Grundlagen in der Informationstechnik', 'link' => 'themenkatalog/grundlagenInformationstechnologie.php'],
                ['title' => '2) Betriebssysteme und Software', 'link' => 'themenkatalog/betriebssystemeUndSoftware.php'],
                ['title' => '3) Betreuung von mobiler Hardware', 'link' => 'themenkatalog/betreuungVonMobilerHardware.php'],
                ['title' => '4) Technische Dokumentationen / Projektarbeit / Schulungen', 'link' => 'themenkatalog/technischeDokumentationenProjektarbeitSchulungen.php'],
                ['title' => '5) Gesetzliche Bestimmungen im Zusammenhang mit Applikations entwicklung – Coding', 'link' => 'themenkatalog/gesetzlicheBestimmungenimZusammenhangMitApplikationsentwicklung.php'],
                ['title' => '6) Netzwerkdienste', 'link' => 'themenkatalog/netzwerkdienste.php'],
                ['title' => '7) IT-Security und Betriebssicherheit', 'link' => 'themenkatalog/itSecurityundBetriebssicherheit.php'],
                ['title' => '8) Informatik und Gesellschaft', 'link' => 'themenkatalog/informatikUndGesellschaft.php'],
                ['title' => '9) Ergonomische Gestaltung eines Arbeitsplatzes', 'link' => 'themenkatalog/ergonomischeGestaltungEinesArbeitsplatzes.php'],
                ['title' => '10) Fachberatung, Planung', 'link' => 'themenkatalog/fachberatungPlanung.php'],
                ['title' => '11) Informatik Teil 1', 'link' => 'themenkatalog/InformatikTeil1.php'],
                ['title' => '11) Informatik Teil 2', 'link' => 'themenkatalog/InformatikTeil2.php'],
                ['title' => '12) Projektmanagement', 'link' => 'themenkatalog/Projektmanagement.php'],
                ['title' => '13) Projektmethoden, Tools', 'link' => 'themenkatalog/ProjektmethodenTools.php'],
                ['title' => '14) Qualitätssicherung', 'link' => 'themenkatalog/qualitätssicherung.php'],
                ['title' => '15) Grundkenntnisse des Programmierens', 'link' => 'themenkatalog/grundkenntnisseDesProgrammierens.php'],
                ['title' => '16) Kenntnis und Verwendung von Datenbanken, Datenmodellen und Datenstrukturen', 'link' => 'themenkatalog/kenntnisundVerwendungvonDatenbankenDatenmodellenUndDatenstrukturen.php'],
                ['title' => '17) Systementwicklung / Testkonzepte', 'link' => 'themenkatalog/systementwicklungTestkonzepte.php']
            ];
            $count = 1;
            foreach ($themen as $thema) {
                echo '<a href="' . htmlspecialchars($thema['link']) . '">
                        <div class="serviceCard">
                            <span>? !</span>
                            <h3>' . htmlspecialchars($thema['title']) . '</h3>
                        </div>
                      </a>';
            }
            ?>
        </div>
    </section>
</main>
<?php include 'include/footer.php' ?>
