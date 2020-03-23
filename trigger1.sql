

DELIMITER $$ /*просто нужная фигня*/
	CREATE TRIGGER new_profile AFTER INSERT ON ft_table /**/
	FOR EACH ROW /*хз*/
	BEGIN /*просто нужная фигня*/
		INSERT INTO ft_copy(id, ins_date) values (NEW.id, NOW());
		/*NEW.field это то поле которое было только что вставлено в 
		  таблицу ft_table*/
	END $$ /*просто нужная фигня*/
DELIMITER ; /*просто нужная фигня*/
