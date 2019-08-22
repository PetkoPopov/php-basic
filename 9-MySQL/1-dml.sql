-- 1-dml.sql

-- Създаване на нова БД:
 CREATE DATABASE `users`;
-- Прави опит за създаване на база и не дава грешка ако съществува:
-- CREATE DATABASE IF NOT EXISTS `users`;

-- Избор на БД. От тук нататък всички заявки ще се отнасят за тази БД:
USE `users`;

-- Заявка за създаване на таблица:
-- След реда за създаване на таблица и името й се дефинират колоните:
CREATE TABLE `users` (
-- Дефиницията съдържа: име тип(размер) (NOT) NULL атрибути
-- име: id, тип: INT, NOT NULL, атрибут: AUTO_INCREMENT
  `id` INT NOT NULL AUTO_INCREMENT,
-- име: email, тип(размер): VARCHAR(255), NOT NULL (няма атрибути)
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `avatar` VARCHAR(127) NULL,
-- атрибут: DEFAULT 'en' -> стойност по подразбиране ако не е дадена при запис
  `language` CHAR(3) NULL DEFAULT 'en',
  `created_on` DATETIME NOT NULL,
  `modified_on` DATETIME NOT NULL,
-- Дефиниране на колона като първичен ключ:
  PRIMARY KEY (`id`),
-- Дефиниране на уникален индекс:
-- При създаване на индекс задаваме неговото име по наш избор и колоната, която е индексирана
-- Името трябва да е уникално в рамките на БД
-- Име: email_UNIQUE, колона: email, при търсене стойностите ще се проверяват във възходящ ред (ASC)
-- Посоката на подреждане не е задължителна, по подразбиране е ASC
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)
)
ENGINE = InnoDB -- задавне на engine (незадължителен - по подразбиране този на БД)
DEFAULT CHARACTER SET = utf8 -- задаване на кодиране (незадължително - по подразбиране това на БД)
COLLATE = utf8_unicode_ci; -- задаване на колация (незадължителна - по подразбиране тази на БД)

-- Заявка за промяна на таблица - ALTER TABLE
-- ALTER TABLE `users`.`users` 
-- CHANGE COLUMN `modified_on` `modified_at` TIMESTAMP NOT NULL ;

-- Заявка за унищожаване на таблица: DROP TABLE table_name;
-- Заявка за унищожаване на БД: DROP DATABASE database_name;
-- Изчистване на таблица (премахване на всичката информация + нулиране на AUTO_INCREMENT):
-- TRUNCATE TABLE table_name;
