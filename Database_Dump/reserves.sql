create table reserves (
	username VARCHAR(50),
	room_id INT,
	from_date TIMESTAMP null , 
	to_date TIMESTAMP  null,
	price INT,
	has_animal VARCHAR(50),
	has_parking VARCHAR(50),
	has_breakfast VARCHAR(50),
	reserved_on TIMESTAMP  default CURRENT_TIMESTAMP,
	PRIMARY KEY(username, room_id),
	FOREIGN KEY (username) REFERENCES users(username),
	FOREIGN KEY (room_id) REFERENCES rooms(room_id)
);
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('fblann2', 1, '2021-12-01', '2021-12-10', 194, true, false, false, '2021-12-01');
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('jvamplew1', 2, '2022-12-10', '2022-12-20', 226, true, false, false, '2022-12-10');
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('rdu3', 3, '2022-12-25', '2022-12-28', 54, true, false, false, '2022-12-25');
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('eskyrme4', 4, '2023-01-01', '2023-01-10', 157, false, true, true, '2023-01-01');
