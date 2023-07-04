CREATE DATABASE Voitures;
USE Voitures;

CREATE TABLE Voiture (
    id INT PRIMARY KEY,
    modele VARCHAR(50),
    prix DECIMAL(10, 2),
    annee INT,
    boite_vitesse VARCHAR(20),
    energie VARCHAR(20),
    puissance INT
);

INSERT INTO Voiture (id, modele, prix, annee, boite_vitesse, energie, puissance) VALUES
    (1, 'Aston Martin', 250000.00, 2022, 'Automatique', 'Essence', 300),
    (1, 'Aston Martin2', 250000.00, 2022, 'Automatique', 'Essence', 300),
    (2, 'MBW M3', 122000.00, 2021, 'Manuelle', 'Essence', 240),
    (3, 'BUGATTI verron', 427000.00, 2023, 'Automatique', 'Essence', 470),
    (4, 'BUGATTI_Mansory', 645000.00, 2022, 'Automatique', 'Essence', 600),
    (5, 'BMW 3 Series', 40000.00, 2021, 'Automatique', 'Essence', 250),
    (6, 'LAmborgini aventador', 338000.00, 2023, 'Automatique', 'Essence', 320),
    (6, 'LAmborgini aventador', 320000.00, 2023, 'Automatique', 'Essence', 320),
    (7, 'MAZDA 1', 42000.00, 2022, 'Automatique', 'Essence', 280),
    (8, 'MAZDA2', 55000.00, 2021, 'Automatique', 'Électrique', 250),
    (9, 'MAZDA 3', 35000.00, 2023, 'Automatique', 'Électrique', 200),
    (10, 'MAZDA 4', 32000.00, 2022, 'Automatique', 'Électrique', 170);
    (11, 'MAZDA 5', 42000.00, 2022, 'Automatique', 'Essence', 170);
    (12, 'MAZDA 6', 40000.00, 2022, 'Automatique', 'Électrique', 170);
    (13, 'MAZDA 7', 45000.00, 2022, 'Automatique', 'Diesel', 190);
    (13, 'PORCHE 1', 450000.00, 2022, 'Automatique', 'Essence', 290);
    (13, 'PORCHE 2', 345000.00, 2022, 'Automatique', 'Essence', 290);
    (13, 'PORCHE 3', 450000.00, 2022, 'Automatique', 'Essence', 290);
    (13, 'MERCEDES CLS', 245000.00, 2022, 'Automatique', 'Diesel', 240);
