CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100),
    password VARCHAR(100),
	name VARCHAR(100) NOT NULL,
	email VARCHAR(100),
	phone VARCHAR(100),
	adress VARCHAR(100),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services(
	id INT PRIMARY KEY AUTO_INCREMENT,
	libel VARCHAR(100),
	category VARCHAR(100),
	price FLOAT
);

CREATE TABLE teams(
	id INT PRIMARY KEY AUTO_INCREMENT,
	leader_id INT,
	FOREIGN KEY(leader_id) REFERENCES users(id) ON DELETE CASCADE

);

ALTER TABLE users
ADD COLUMN role VARCHAR(100);