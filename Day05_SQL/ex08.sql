/* Display the last_name, first_name and birthdate (only the date, not the time)
from the table user_card in a column named ’birthdate’ of everyone born in 1989,
ordered alphabetically by last_name. */

SELECT last_name, first_name, date(birthdate) FROM user_card
		WHERE YEAR(birthdate) = 1989
		ORDER BY last_name;
