<?php
$title = 'SQL Code Anzeige Rechnung | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Anzeige und Erklärung von SQL-Code für die Erstellung und Verwaltung einer Datenbank mit Tabellen für Waren, Kunden, Firmen und Rechnungen.';
$keywords = 'SQL Code, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbank, PHP, MySQL';
$canonical = '/beispiele/sqlRechnung.php';
$authorName = 'MoWe, JoJo';
$datePublished = '2024-06-02';
include '../include/header.php';

?>
<main class="responsive">
    <section class="container">
        <div class="container mt-5">
            <h1>SQL Code Beispiel Rechnungen</h1>
            <div class="row mt-4">
                <div class="col-md-12">
                <pre><code class="language-sql">
DROP DATABASE IF EXISTS User;
CREATE DATABASE User;
USE User;

CREATE TABLE waren (
    warenId INT AUTO_INCREMENT PRIMARY KEY,
    beschreibung VARCHAR(100),
    preis FLOAT,
    steuersatz FLOAT
);
INSERT INTO waren(beschreibung, preis, steuersatz)
VALUES ('Hammer', 20, 10);

CREATE TABLE kunde (
    kundenId INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(200),
    nachname VARCHAR(50),
    strasse VARCHAR(70),
    plz VARCHAR(10),
    email VARCHAR(100),
    telefon VARCHAR(20),
    geburtsdatum DATE,
    erstellungsdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    notizen TEXT
);
INSERT INTO kunde (vorname, nachname, strasse, plz, email, telefon, geburtsdatum, notizen)
VALUES
    ('John', 'Doe', '123 Main St', '12345', 'john.doe@example.com', '555-1234', '1980-01-01', 'Erster Kunde'),
    ('Jane', 'Smith', '456 Oak Ave', '67890', 'jane.smith@example.com', '555-5678', '1990-02-02', ''),
    ('Alice', 'Johnson', '789 Pine Rd', '54321', 'alice.johnson@example.com', '555-9876', '1985-03-03', '');

CREATE TABLE firmen (
    firmenId INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    strasse VARCHAR(70),
    plz VARCHAR(10)
);

INSERT INTO firmen (name, strasse, plz)
VALUES
    ('companyOne', 'blablastrasse', '1234-a'),
    ('bcompany', 'strasseyMcstrasseface', '6541-b');

CREATE TABLE rechnung (
    rechnungId INT AUTO_INCREMENT PRIMARY KEY,
    datetime DATETIME,
    preis FLOAT,
    kundenId INT,
    FOREIGN KEY (kundenId) REFERENCES kunde(kundenId)
);

INSERT INTO rechnung (datetime, preis, kundenId)
VALUES ('2024-05-22 13:45:00', 12.23, 1);

CREATE TABLE rechnungsdetails (
    rechnungId INT,
    warenId INT,
    FOREIGN KEY (rechnungId) REFERENCES rechnung(rechnungId),
    FOREIGN KEY (warenId) REFERENCES waren(warenId),
    PRIMARY KEY (rechnungId, warenId)
);
INSERT INTO rechnungsdetails (rechnungId, warenId)
VALUES (1, 1);
                </code></pre>
                </div>
            </div>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="sqlAngestellte.php">Zurück zu SQL Code Beispiel Angestellte</a>
        <a class="btn" href="sqlVerleih.php">Weiter zu SQL Code Beispiel Verleih</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
