/* Display all the distributors’ phone_number starting with ’05’
by removing the number 0 before the 5 and by reverting the numbers,
in a column named ’rebmunenohp’ (ex : 0542842169 -> 961248245).
*/

SELECT REVERSE(SUBSTRING(phone_number, 2)) AS 'rebmunenohp' 
			FROM distrib
			WHERE phone_number like '05%';
