insert into ft_table (`login`, `group`, `creation_date`) 
    SELECT last_name, 'other', birthdate 
    from user_card where length(last_name) < 9 && last_name like '%a%' order by last_name ASC limit 10;