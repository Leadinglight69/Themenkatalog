<?php
$title = 'SQL Code Anzeige Angestellte | Codeabschlussguide zur Lehrabschlussprüfung in Applikationsentwicklung - Coding';
$description = 'Anzeige und Erklärung von SQL-Code für die Erstellung und Verwaltung einer Datenbank mit Tabellen für Angestellte, Manager und Teams.';
$keywords = 'SQL Code, IT-Lehrabschlussprüfung, Applikationsentwicklung, Datenbank, PHP, MySQL';
$canonical = '/beispiele/sqlAngestellte.php';
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
            <h1 class="text-center">SQL Beispiel Code Angestellte</h1>
            <div class="row mt-4">
                <div class="col-md-12">
                <pre><code>
DROP DATABASE IF EXISTS Angestellte;
CREATE DATABASE Angestellte;
USE Angestellte;

CREATE TABLE angestellte (
    angestellten_id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50),
    nachname VARCHAR(50),
    email VARCHAR(100),
    einstellungsdatum DATE,
    berufsbezeichnung VARCHAR(50),
    gehalt DECIMAL(10, 2)
);

CREATE TABLE manager (
    manager_id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50),
    nachname VARCHAR(50),
    email VARCHAR(100),
    einstellungsdatum DATE,
    berufsbezeichnung VARCHAR(50),
    gehalt DECIMAL(10, 2)
);

CREATE TABLE teams (
    team_id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(50)
);

CREATE TABLE team_mitglieder (
    team_mitglied_id INT AUTO_INCREMENT PRIMARY KEY,
    angestellten_id INT,
    team_id INT,
    FOREIGN KEY (angestellten_id) REFERENCES angestellte(angestellten_id),
    FOREIGN KEY (team_id) REFERENCES teams(team_id)
);

CREATE TABLE team_manager (
    team_manager_id INT AUTO_INCREMENT PRIMARY KEY,
    manager_id INT,
    team_id INT,
    FOREIGN KEY (manager_id) REFERENCES manager(manager_id),
    FOREIGN KEY (team_id) REFERENCES teams(team_id)
);

INSERT INTO angestellte (vorname, nachname, email, einstellungsdatum, berufsbezeichnung, gehalt)
VALUES
('Max', 'Mustermann', 'max.mustermann@example.com', '2020-01-15', 'Softwareentwickler', 60000.00),
('Erika', 'Musterfrau', 'erika.musterfrau@example.com', '2019-03-20', 'Systemadministratorin', 55000.00),
('Hans', 'Müller', 'hans.mueller@example.com', '2021-07-30', 'Datenanalyst', 50000.00);

INSERT INTO manager (vorname, nachname, email, einstellungsdatum, berufsbezeichnung, gehalt)
VALUES
('Anna', 'Schmidt', 'anna.schmidt@example.com', '2018-02-10', 'IT-Managerin', 75000.00),
('Peter', 'Weber', 'peter.weber@example.com', '2017-05-25', 'Projektmanager', 70000.00);

INSERT INTO teams (team_name)
VALUES
('Entwicklungsteam'),
('Infrastrukturteam'),
('Analyseteam');

INSERT INTO team_mitglieder (angestellten_id, team_id)
VALUES
(1, 1),
(2, 2),
(3, 3);

INSERT INTO team_manager (manager_id, team_id)
VALUES
(1, 1),
(2, 2);                </code></pre>
                </div>
            </div>
        </div>
    </section>
    <div class="center">
        <a class="btn" href="navbarBeispiel.php">Zurück zu Navbar Example</a>
        <a class="btn" href="sqlRechnung.php">Weiter zu SQL Code Beispiel Rechnung</a>
    </div>
</main>
<?php include '../include/footer.php'; ?>
