CREATE TABLE users (
users_id int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
users_etu varchar(256) not null,
users_suku varchar(256) not null,
users_osoite varchar(256) not null,
users_postinumero varchar(256) not null,
users_kaupunki varchar(256) not null,
users_uid varchar(256) not null,
users_pwd varchar(256) not null
)