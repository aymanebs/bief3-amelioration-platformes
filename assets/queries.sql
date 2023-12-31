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

CREATE TABLE orders(
	id INT PRIMARY KEY AUTO_INCREMENT,
	order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	service_id INT,
	FOREIGN KEY(service_id) REFERENCES services(id) ON DELETE CASCADE,
	team_id INT,
	FOREIGN KEY(team_id) REFERENCES teams(id) ON DELETE CASCADE,
	user_id INT,
	FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE
);


-- insertion of teams table

INSERT INTO teams (leader_id)
VALUES(53) 
SELECT id 
FROM users 
WHERE role = 'Developer';