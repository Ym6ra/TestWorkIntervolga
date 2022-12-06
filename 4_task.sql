CREATE database somename
use somename
CREATE TABLE `спортсмены` (
    `id Спортсмена` INT AUTO_INCREMENT NOT NULL UNSIGNED,
    `ФИО` VARCHAR 50 NOT NULL ,
    `е-mail` VARCHAR 50 NOT NULL ,
    `Телефон` VARCHAR 15 NOT NULL ,
    `Дата рождения` DATE NOT NULL ,
    `Возраст` INT(3) NOT NULL UNSIGNED,
    `Дата и время создания записи` TIMESTAMP NOT NULL ,
    `Номер паспорта` VARCHAR 50 NOT NULL ,--С учетом что серия паспорта будет указана здесь же
    --`Номер паспорта` INT NOT NULL ,--С учетом что серия паспорта будет указана отдельно
    `Среднее место на соревнованиях` INT NOT NULL UNSIGNED,
    `Биография` TEXT NOT NULL ,
    `Видео презентация` LONGBLOB ,
    PRIMARY KEY(`id Спортсмена`)
    )

use somename

SELECT `Среднее место на соревнованиях` FROM `спортсмены`
    ORDER BY `Среднее место на соревнованиях` ASC
    LIMIT 5;

