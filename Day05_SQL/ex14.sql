/* For each floor, display the floor_number in a ’floor’
column and nb_seats by floor in a ’seats’ column.
Ordered by floor with the highest number of seats to the floor with the least number of seats.
*/

SELECT floor_number as floor, SUM(nb_seats) as seats
			FROM cinema
			GROUP BY floor_number
			ORDER BY SUM(nb_seats) ASC;