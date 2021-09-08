CREATE TABLE `pizza`.`comenzi` ( 
    `id` INT UNSIGNED NOT NULL , 
    `nume` VARCHAR(255) NOT NULL , 
    `prenume` VARCHAR(255) NOT NULL ,
    `numar_de_telefon` INT(10) NOT NULL ,
    `email` VARCHAR(50) NOT NULL ,
    `adresa` VARCHAR(500) NOT NULL ,
    `pizza` VARCHAR(1000) NOT NULL ,
    `preferinte` VARCHAR(1000) NOT NULL ,
    `pret_total` INT(10) NOT NULL , PRIMARY KEY (`id`), UNIQUE `email` (`email`)) ENGINE = InnoDB;