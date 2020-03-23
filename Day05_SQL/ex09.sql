/* Display the number of ’short films’ (with a duration smaller or equal to 42)
in a column named ’nb_short-films’.
*/

SELECT COUNT(duration) as 'nb_short-fims' FROM film
			WHERE duration <= 42;