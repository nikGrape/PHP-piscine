/* Display the total number of movies watched between 10/30/2006 and 07/27/2007
in a column named ’movies’counting also
the number of movies watched on Christmas Eve (December 24th every year).
*/


SELECT COUNT(date), film.title as movies FROM member_history
		LEFT JOIN film ON (film.id_film = member_history.id_film)
		WHERE date(date) >= '2006-10-30'
			AND DATE(date) <= '2007-07-27'
			OR DAY(date) = 24 AND MONTH(date) = 12
		GROUP BY film.title;
