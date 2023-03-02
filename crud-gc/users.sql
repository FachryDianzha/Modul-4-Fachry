CREATE TABLE `login_gc`.`users` ( `id` INT NOT NULL AUTO_INCREMENT ,  `nama` VARCHAR(100) NULL ,  `username` VARCHAR(25) NOT NULL ,  `password` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES (NULL, 'Herzi Gilacoding', 'gilacoding', '123456');