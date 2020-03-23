/* Display in an ’uptime’ column the number of absolute days
separating the oldest viewing of a movie with the most recent.
*/

SELECT TO_DAYS(MAX(date)) - TO_DAYS(MIN(date)) AS uptime 
		FROM member_history;
