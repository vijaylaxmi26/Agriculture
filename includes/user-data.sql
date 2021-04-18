CREATE TABLE users (
    userid int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	firstName varchar(128) NOT NULL,
    lastName varchar(128),
    email varchar(128) NOT NULL,
    phoneNo varchar(128) NOT NULL,
    password varchar(128) NOT NULL
);

