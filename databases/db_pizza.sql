CREATE TABLE `pizza`.`meniu` (
     `id_pizza` INT UNSIGNED NOT NULL , 
     `tip_pizza` VARCHAR(255) NOT NULL , 
     `pret` INT(3) NOT NULL ,
     `poza` VARCHAR NOT NULL , UNIQUE `id_pizza` (`id_pizza`)) ENGINE = InnoDB;