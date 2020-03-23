/* Display the last_name in uppercase in a ’NAME’ column,
the first_name and the price of the users having a subscription higher than 42 euros.
Order result by ascending last_name and by ascending first_name
*/

select UPPER(last_name) as NAME, first_name, subscription.price FROM user_card 
		LEFT JOIN `member` ON user_card.id_user = member.id_user_card
		LEFT JOIN subscription ON subscription.id_sub = member.id_sub
		WHERE subscription.price > 42
		ORDER BY last_name ASC, first_name ASC;
