/*If you paid attention, you used the member’s birthdate as creation_date in your table.
To restore a meaning to all this we’ll now update your user’s creation_date.
Add 20 years to the creation_date, but only for the users that have an id bigger than 5.
*/

UPDATE ft_table 
		SET `creation_date` = date_add(`creation_date`, interval 20 YEAR)
		WHERE id > 5;