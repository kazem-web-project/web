create table posts (
	username VARCHAR(50),
	news_id INT,
	PRIMARY KEY(username, news_id),
	FOREIGN KEY (username) REFERENCES users(username),
    FOREIGN KEY (news_id) REFERENCES news(news_id)
);
insert into posts (username, news_id) values ('hva5', 1);
insert into posts (username, news_id) values ('hva5', 2);
insert into posts (username, news_id) values ('rdu3', 3);
