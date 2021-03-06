-- Системи за управление на бази данни (СУБД, RDbMS)

-- Отделен сървър за съхранение и управление на информация
-- Съхранява данните на диска на сървъра
-- Позволява достъп чрез клиент за работа с БД
-- Достъпът става обикновено чрез потребител и парола и се изисква да се
-- знае адреса на сървъра (host, ip, etc...).
-- Адресът на локалния сървър е localhost (127.0.0.1)
-- Съществуват много видове СУБД - MySQL/MariaDB, SQLite, Postgre SQL, etc

-- База данни - Съвкупност от таблици и системна информация. Има уникално
-- име в рамките на своето СУБД. За да се използва трябва да има
-- достъп на потребителя, който е направил връзката към СУБД.
--
-- Таблица - Контейнер на конкретните данни. Има уникално име в рамките на
-- своята БД. Имат колони, чиито имена и брой се дефинират предварително
-- при създаването на таблицата. При създаване на колоните на таблицата
-- трябва да се посочи и техния тип (int, float, strings, bool, etc.).
-- 
-- Редове на таблица (записи) - съдържат конкретната информация, разделена
-- на клетки според колоните на таблицата.

-- Structured Query Language (SQL)
-- Езика, с който комуникират клиента и сървъра. Клиента изпраща заявката,
-- сървъра я обработва и връща резултат според типа на заявка.
-- Основни типове на заявки - за дефиниране и за манипулация на данни

-- "Език" за дефиниране на данни (Data Definition Language, DDL) -
-- служи за дефиниране, промяна и изтриване на БД, таблици и колони.
-- Такъв тип заявки е силно желателно да не присъстват в системите и
-- обикновено се изпълняват предварително при действия, независещи от
-- потребителя на системата (стартиране, обновяване, и т.н.). Те обикновен
-- се изпълняват през клиент за работа с БД.
--
-- "Език" за манипулация на данните (Data Manipulation Language, DML) -
-- служи за работа с конкретните данни. Има четири основни заявки (CRUD)
-- 1. За вмъкване (Create) - добавяне на нови редове с данни в таблици
-- 2. За четене (Retreive) - получаване на записаната информация
-- 3. За промяна (Update) - обновявне на старата информация
-- 4. За изтриване (Delete) - премахване на редове от таблици
-- Това са заявките, които се изпълняват от системите, когато работят с
-- с потребителите.