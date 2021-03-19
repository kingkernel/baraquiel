CREATE TABLE users
(
	id bigint unsigned NOT NULL AUTO_INCREMENT,
	'name' varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	'password' varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	active tinyint(1) DEFAULT 0,
	type_user varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
	remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	created_at timestamp NULL DEFAULT NULL,
	updated_at timestamp NULL DEFAULT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY users_email_unique (email)
)	ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table member_characters
(
	id bigint(255) unsigned primary key,
	character_owner bigint unsigned references users
	c_name varchar(100),
	c_class varchar(30),
	c_level int,
	c_exp_point bigint,
	c_strong,
	c_destreza,
	constituição,
	inteligencia,
	força,
	sabedoria, 
	carisma,
	nivel
)
ENGINE=InnoDB CHARSET=utf8mb4;


create table worlds
(
	id int unsigned auto_increment primary key,
	wordcategory varchar(30),
	created datetime default CURRENT_TIMESTAMP,
	wordname varchar(30),
	ownerword bigint,
	price double(7,2)
)
engine=innodb charset=utf8mb4;
create table continent
(
	id int unsigned auto_increment primary key,
	continentname varchar(50),
	word int
)
engine=innodb charset=utf8mb4;

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
	id bigint unsigned auto_increment primary key,
	itemname varchar(200),
	itemrealvalue double(7,2),
	itemimage varchar(255),
	itematributes mediumtext
)
engine=innodb charset=utf8mb4;

create table NPC_characters
(
	id bigint unsigned auto_increment primary key,
	type_NPC varchar(100) default "site_NPC",
	master_owner bigint references users(id),
	salable boolean default 0,
	NPC_name varchar(200),
	NPC_category varchar(200),
	NPC_wordcategory varchar(200)
)
engine=innodb charset=utf8mb4;

create table NPC_Items
(
	id bigint auto_increment primary,
	NPC bigint references NPC_characters (id),
	item bigint references items (id)
)
engine=innodb charset=utf8mb4;

create table players_characters
(
	id bigint unsigned auto_increment primary key,
	
)
engine=innodb charset=utf8mb4;

create table post
