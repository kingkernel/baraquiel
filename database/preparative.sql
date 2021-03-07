create table campain
(
id bigint auto_increment primary key,
campain_name varchar(255),
creator bigint references users(id),
datacreation date,
active boolean default 1
)
engine=innodb charset=utf8mb4;

create table items
(
id bigint unsigned primary key,
itemname varchar(200),
itemrealvalue double(7,2),
itemimage varchar(255),
itematributes mediumtext
)
engine=innodb charset=utf8mb4;

create table NPC_characters
(
)
engine=innodb charset=utf8mb4;

create table players_characters
(
)
engine=innodb charset=utf8mb4;
