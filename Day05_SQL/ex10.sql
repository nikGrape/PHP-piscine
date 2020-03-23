/* Display the title in a ’Title’ column, the summary in a ’Summary’
column and the prod_year of every ’erotic’ movie
ordered by descending production year.
*/

SELECT title as 'Title', summary as 'Summary', prod_year
			FROM film, genre 
			WHERE film.id_genre = genre.id_genre AND genre.name = 'erotic'
			ORDER BY prod_year DESC;



	/* OR BY USING LIFT JOIN */

SELECT title as 'Title', summary as 'Summary', prod_year
			FROM film LEFT JOIN genre
				ON (film.id_genre = genre.id_genre)
			WHERE genre.name = 'erotic'
			ORDER BY prod_year DESC;