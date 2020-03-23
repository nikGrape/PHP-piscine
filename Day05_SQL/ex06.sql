/* Display the title and summary of all movies containing ’Vincent’ in their summary.
The research must be case-insensitive. Order the results by ascending id_film.
*/

SELECT title, summary FROM film where lower(summary) like '%vincent%' ORDER BY id_film ASC;