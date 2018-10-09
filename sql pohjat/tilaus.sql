CREATE TABLE tilaukset (
  tilaus_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
  user_id int (11) NOT NULL,
  kukka_id int (11)NOT NULL,
  tilaus_maara varchar(256) NOT NULL,
  tilaus_yht varchar(256) NOT NULL
);