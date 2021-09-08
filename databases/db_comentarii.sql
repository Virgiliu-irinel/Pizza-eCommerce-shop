CREATE TABLE `pizza`.`comentarii` (
    `id` INT(10) NOT NULL AUTO_INCREMENT ,
    `nume` VARCHAR(20) NOT NULL ,
    `prenume` VARCHAR(20) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `comentariu` VARCHAR(2000) NOT NULL , PRIMARY `id` (`id`)) ENGINE = InnoDB;