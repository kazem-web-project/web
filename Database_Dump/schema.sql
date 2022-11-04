drop database if exists hotel;
create database hotel;
use hotel;
create table rooms (
	room_id INT PRIMARY KEY,
	price INT,
	img VARCHAR(50)
);
create table users (
	username VARCHAR(50) PRIMARY KEY NOT NULL,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	email VARCHAR(50),
	gender VARCHAR(50),
	password VARCHAR(50),
	title VARCHAR(50),
	is_admin BOOLEAN,
	is_active  BOOLEAN 
);

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
	is_approved VARCHAR(50),
	PRIMARY KEY(username, room_id),
	FOREIGN KEY (username) REFERENCES users(username),
	FOREIGN KEY (room_id) REFERENCES rooms(room_id)
);
create table news (
	news_id INT primary key,
	image VARCHAR(100),
	title VARCHAR(100),
	text VARCHAR(500),
	date TIMESTAMP  default CURRENT_TIMESTAMP
);

create table posts (
	username VARCHAR(50),
	news_id INT,
	PRIMARY KEY(username, news_id),
	FOREIGN KEY (username) REFERENCES users(username),
    FOREIGN KEY (news_id) REFERENCES news(news_id)
);

insert into rooms (room_id, price, img) values (1, 62,'room1.jpg');
insert into rooms (room_id, price, img) values (2, 38,'room2.jpg');
insert into rooms (room_id, price, img) values (3, 24,'room3.jpg');
insert into rooms (room_id, price, img) values (4, 18,'room4.jpg');
insert into rooms (room_id, price, img) values (5, 74,'room5.jpg');
insert into rooms (room_id, price, img) values (6, 14,'room6.jpg');
insert into rooms (room_id, price, img) values (7, 31,'room7.jpg');
insert into rooms (room_id, price, img) values (8, 36,'room8.jpg');
insert into rooms (room_id, price, img) values (9, 51,'room9.jpg');
insert into rooms (room_id, price, img) values (10, 20,'room10.jpg');

insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('nkernermann0', 'Nixie', 'Kernermann', 'nkernermann0@census.gov', 'Female', 'Y26rCVMO', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('jvamplew1', 'Jozef', 'Vamplew', 'jvamplew1@weebly.com', 'Male', 'H7tjrmfC90', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('fblann2', 'Fons', 'Blann', 'fblann2@ameblo.jp', 'Male', 'FLkgQdCW', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('rdu3', 'Rhona', 'Dusting', 'rdusting3@opensource.org', 'Female', 'fDboGES', 'Honorable', true, true);
insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('eskyrme4', 'Elli', 'Skyrme', 'eskyrme4@mozilla.com', 'Female', 'Esnr7ffuVtUq', 'Mr', false, true);
insert into users (username, first_name, last_name, email, gender, password, title, is_admin, is_active ) values ('hva5', 'Honor', 'Vasyukhichev', 'hvasyukhichev5@acquirethisname.com', 'Female', 'MGesPEl', 'Rev', true, true);

insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('fblann2', 1, '2021-12-01', '2021-12-10', 194, true, false, false, '2021-12-01',1);
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('jvamplew1', 2, '2022-12-10', '2022-12-20', 226, true, false, false, '2022-12-10',0);
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('rdu3', 3, '2022-12-25', '2022-12-28', 54, true, false, false, '2022-12-25',1);
insert into reserves (username, room_id, from_date, to_date, price, has_animal, has_parking, has_breakfast, reserved_on) values ('eskyrme4', 4, '2023-01-01', '2023-01-10', 157, false, true, true, '2023-01-01',0);

insert into news (news_id, image, title, text, date) values (1, 'news1.jpg', 'HEB', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-10-01');
insert into news (news_id, image, title, text, date) values (2, 'news2.jpg', 'Sandoz Inc', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '2022-10-10');
insert into news (news_id, image, title, text, date) values (3, 'news3.jpg', 'Jets, Sets, & Elephants Beauty Corp.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (4, 'news4.jpg', 'New Library in Town', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (5, 'news5.jpg', 'Park in Closer to Ús', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem  reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (6, 'news6.jpg', 'New Trasport System', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem I or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (7, 'news7.jpg', 'Massage Room', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All . It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (8, 'news8.jpg', 'Swimming Pool is Now Open!', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');
insert into news (news_id, image, title, text, date) values (9, 'news9.jpg', 'Cashdispenser is Now Working Again!', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in t over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-10-11');

insert into posts (username, news_id) values ('hva5', 1);
insert into posts (username, news_id) values ('hva5', 2);
insert into posts (username, news_id) values ('rdu3', 3);
