/* Display the distributors who have the following id_distrib
42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89 and 90
as well as distibutors with ’y’ or ’Y’ twice in their name.
The final list will be a sample of 5 results starting at the third result.
*/

SELECT name, id_distrib FROM distrib
	WHERE id_distrib = 42 OR 
			(id_distrib >= 62 AND id_distrib <= 69) OR
			id_distrib = 71 OR
			(id_distrib >= 88 AND id_distrib <= 90) OR
			length(name) - length(replace(name, 'y', '')) = 2 OR
			length(name) - length(replace(name, 'Y', '')) = 2;
			LIMIT 2, 5;