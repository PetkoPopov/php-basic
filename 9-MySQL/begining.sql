INSERT INTO new_table values(null,'poet@abv.bg','password','petko','popov','bg',NOW(),NOW(),'image.pgn');
INSERT INTO new_table (email,`password`,first_name,last_name,create_on,modified_on)
Values('poet@abv.bg','password','petkopetko','popovpopov',NOW(),NOW());
select * from new_table ;

SELECT email, first_name, last_name ,create_on from new_table;
-- промяна и обновяване на данни 
UPDATE new_table 
SET create_on='2019-08-4 12:33:33', avatar='somefile.jpg'
WHERE id=1; 
select * from new_table ;
-- (D)
DELETE from new_table where id=2;
select * from new_table ;
-- клауза за търсене на клатка LIKE
SELECT*from country where region like '%europe';