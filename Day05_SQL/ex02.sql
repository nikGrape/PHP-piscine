/*
Now that your table has been created, let us proceed with the filling. You will add the five users:
• ’loki’ is ’staff’, created on the ’2013-05-01’
• ’scadoux’ is ’student’, created on the ’2014-01-01’
• ’chap’ is ’staff’, created on the ’2011-04-27’
• ’bambou’ is ’staff’, created on the ’2014-03-01’
• ’fantomet’ is ’staff’, created on the ’2010-04-03’
*/

INSERT INTO ft_table(`login`, `group`, `creation_date`) 
		VALUES
			('loki', 1, '2013-05-01'),
			('scadoux', 2, '2014-01-01'),
			('chap', 1, '2014-03-01'),
			('bambou', 1, '2014-03-01'),
			('fantomet', 1, '2010-04-03');


