-- 4-JOINS.sql
-- селектиране на повече таблици -JOINS
-- -------------------------------------
-- релации между таблици- 
-- външни ключове (foreign keys) -
-- колона със същия тип като колконата на на първичния ключ на таблицата с която е свързана 
-- стойностите в колоната на Външния ключ отгиварят на стойностите на първичния ключ в другата таблица 
-- и оказваат към кой ред на таблицата в релация се отнася. 
-- 
-- типове релации 
-- 1. едно към едно 1:1 един ред от една таблица се отнася към само един ред от друга таблица 
-- Пример: една държава има една столица тоес един ред от кънтри има връзка към един ред от сити 
-- city,country.Capital=city.ID колоната кепитал от кънтри е външен ключ към таблица сити 
-- 
   select 
   c.* ,
   co.Name AS countryName
   from city as c
   JOIN country as co ON co.Capital=C.ID
   where co.name='bulgaria';
    -- 2-релация едно към много 1:N един ред от таблицата е във връзка с мого редове от таблицата с релацията 
    -- съответно примера е обратен 
    -- Пример: Една държава има много градове. За един ред от кънтръи има няколо реда от Сити които съдържат ПК от Кънтри 
    -- country.code=city.CountryCode
    SELECT c.*,co.Name as countryName
    FROM city AS c 
    JOIN country co ON co.Code=c.CountryCode-- AS is not needed 
    where co.NAME='bulgaria';
    
    -- 3-а релация много към много N:M - 
    -- Релация в която множество редове от една таблица има връзка с мнпожество редове от друга таблица 
    -- един ред от таблица едно може да се отнася към много редое от таблица 2 
    -- един ред от две да се отнася към много редове към първата таблица 
    -- нямат ощи колони и ключове изпълнява се с междинна таблица 
    -- трета таблица която съдържа ПК на двете таблици като стойностите оказват от таблица към кой ред от таблица 2 
    -- се отнася 
    -- Пример: в блоговете една статия може да се отнася за много категории и в една категория да има много статии 
    
     SELECT 
     co.Code,
     co.Name,
     c.name AS CapitalName
     FROM country as co
      INNER JOIN city AS c ON c.ID=co.Capital; -- inner join 
     
     SELECT 
     co.Code,
     co.Name,
     c.name AS CapitalName
     FROM country as co
      INNER JOIN city AS c ON c.ID=co.Capital; -- inner join 
    
     SELECT 
     co.Code,
     co.Name,
     c.name AS CapitalName
     FROM country as co
      INNER JOIN city AS c ON c.ID=co.Capital; -- inner join 
    
     SELECT 
     co.Code,
     co.Name,
     c.name AS CapitalName
     FROM country as conew_table
	 JOIN city AS c ON c.ID=co.Capital
      where   continent='europe';
       -- LEFT JOIN дава всички рез т таб 1 като тези кои то удов условието 
       -- на ON-клаузата и се добавят стойностите от таблица 2 
       -- з аостаналите редове се добавя NULL.
    
    SELECT * from country
    
    
    
    

