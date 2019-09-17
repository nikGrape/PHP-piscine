create table ft_table
(
    id int primary key auto_increment,
    `login` varchar(8) default 'toto' not null,
    `group` enum('staff', 'sudent', 'other'),
    `cteation_date` date not null
);