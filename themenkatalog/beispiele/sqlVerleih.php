<?php
$title = 'SQL Verleih | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Anzeige und Erklärung von SQL-Code für die Erstellung und Verwaltung einer Datenbank mit Tabellen für Kunden, Genres, DVDs und Ausleihen.';
$keywords = 'SQL Verleih, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbank, PHP, MySQL';
$canonical = '/beispiele/sqlVerleih.php';
$authorName = 'MoWe, JoJo';
$datePublished = '2024-06-02';
include '../include/header.php';
?>
<main class="responsive">
    <section class="container">
        <style>
            pre {
                background-color: #f8f9fa;
                padding: 20px;
                border: 1px solid #e3e3e3;
                border-radius: 5px;
            }
        </style>
        <div class="container mt-5">
            <h1>SQL Code Beispiel Verleih</h1>
            <div class="row mt-4">
                <div class="col-md-12">
                <pre><code>
DROP DATABASE IF EXISTS verleih;
CREATE DATABASE verleih;
USE verleih;

CREATE TABLE IF NOT EXISTS Kunden (
    KundenID INT AUTO_INCREMENT PRIMARY KEY,
    Vorname VARCHAR(50) NOT NULL,
    Nachname VARCHAR(50) NOT NULL,
    Email VARCHAR(100),
    Telefonnummer VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS Genres (
    GenreID INT AUTO_INCREMENT PRIMARY KEY,
    GenreName VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS DVDs (
    DVDID INT AUTO_INCREMENT PRIMARY KEY,
    Titel VARCHAR(100) NOT NULL,
    Regisseur VARCHAR(100),
    Jahr INT,
    GenreID INT,
    Verfügbarkeit BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (GenreID) REFERENCES Genres(GenreID)
);

CREATE TABLE IF NOT EXISTS Ausleihen (
    AusleihID INT AUTO_INCREMENT PRIMARY KEY,
    KundenID INT,
    DVDID INT,
    Ausleihdatum DATE,
    Rückgabedatum DATE,
    FOREIGN KEY (KundenID) REFERENCES Kunden(KundenID),
    FOREIGN KEY (DVDID) REFERENCES DVDs(DVDID)
);

INSERT INTO Kunden (Vorname, Nachname, Email, Telefonnummer) VALUES
('Max', 'Mustermann', 'max.mustermann@example.com', '0123456789'),
('Anna', 'Schmidt', 'anna.schmidt@example.com', '9876543210'),
('Tom', 'Müller', 'tom.mueller@example.com', '5551234567');

INSERT INTO Genres (GenreName) VALUES
('Action'),
('Drama'),
('Komödie'),
('Thriller'),
('Sci-Fi');

INSERT INTO DVDs (Titel, Regisseur, Jahr, GenreID, Verfügbarkeit) VALUES
('Inception', 'Christopher Nolan', 2010, 4, TRUE),
('Interstellar', 'Christopher Nolan', 2014, 5, TRUE),
('Pulp Fiction', 'Quentin Tarantino', 1994, 3, TRUE),
('The Dark Knight', 'Christopher Nolan', 2008, 1, TRUE),
('The Shawshank Redemption', 'Frank Darabont', 1994, 2, TRUE);
                </code></pre>
                </div>
            </div>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="sqlRechnung.php">Zurück zu SQL Code Beispiel Rechnung</a>
        <a class="btn" href="tableDump.php">Weiter zu Code Table Dump</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
