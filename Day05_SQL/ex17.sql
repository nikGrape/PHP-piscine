/* Display the number of offered suscribtion in a column named ’nb_susc’,
as well as the average subscription price,
rounded to the unit (below) in a column named ’av_susc’.
There must be a third colum named ’ft’ displaying the sum of modulo(%) 42 subscribtion lengths(duration_sub).
												
*/

SELECT	COUNT(name) as nb_susc, 
		AVG(price) as av_susc,
		(SUM(duration_sub) % 42) as ft
	FROM subscription; 
