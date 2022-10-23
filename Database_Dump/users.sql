create table users (
	username VARCHAR(50) PRIMARY KEY NOT NULL,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	email VARCHAR(50),
	gender VARCHAR(50),
	passwrord VARCHAR(50),
	title VARCHAR(50),
	is_admin BOOLEAN,
	is_active  BOOLEAN 
);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('nkernermann0', 'Nixie', 'Kernermann', 'nkernermann0@census.gov', 'Female', 'Y26rCVMO', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('jvamplew1', 'Jozef', 'Vamplew', 'jvamplew1@weebly.com', 'Male', 'H7tjrmfC90', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('fblann2', 'Fons', 'Blann', 'fblann2@ameblo.jp', 'Male', 'FLkgQdCW', 'Mrs', false, false);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('rdu3', 'Rhona', 'Dusting', 'rdusting3@opensource.org', 'Female', 'fDboGES', 'Honorable', true, true);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('eskyrme4', 'Elli', 'Skyrme', 'eskyrme4@mozilla.com', 'Female', 'Esnr7ffuVtUq', 'Mr', false, true);
insert into users (username, first_name, last_name, email, gender, passwrord, title, is_admin, is_active ) values ('hva5', 'Honor', 'Vasyukhichev', 'hvasyukhichev5@acquirethisname.com', 'Female', 'MGesPEl', 'Rev', true, true);
