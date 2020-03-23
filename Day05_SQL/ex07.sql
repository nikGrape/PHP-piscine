/* Display the title and summary of all movies containing 42
in their title or summary ordered from the shortest film to the longest.
*/

SELECT title, summary FROM film
		WHERE title like '%42%' OR summary like '%42%' ORDER BY duration ASC; 
