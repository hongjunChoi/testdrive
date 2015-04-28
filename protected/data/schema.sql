drop database if exists testdrive;
CREATE database IF NOT EXISTS testdrive;
USE testdrive;

-- user
create table if not exists user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(128) NOT NULL,
    user_pw VARCHAR(128) NOT NULL,
    user_email VARCHAR(128) NOT NULL
);

create table if not exists department (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dept_name VARCHAR(128) NOT NULL,
	dept_description VARCHAR(128) NOT NULL
);

create table if not exists user_department (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_id INTEGER,
	dept_id INTEGER,
	FOREIGN KEY (user_id) REFERENCES user (id),
	FOREIGN KEY (dept_id) REFERENCES department (id)
);



INSERT INTO department (dept_name, dept_description) VALUES ('cs','cs dept.');
INSERT INTO department (dept_name, dept_description) VALUES ('econ', 'econ dept.');
INSERT INTO department (dept_name, dept_description) VALUES ('math','math dept.');
INSERT INTO department (dept_name, dept_description) VALUES ('biology', 'bio dept.');
INSERT INTO department (dept_name, dept_description) VALUES ('fun','doing fun stuff with friends');
INSERT INTO department (dept_name, dept_description) VALUES ('research', 'reseach activities');
INSERT INTO department (dept_name, dept_description) VALUES ('startup', 'creating awesome startup');



INSERT INTO user (user_name, user_pw, user_email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO user (user_name, user_pw, user_email) VALUES ('test21', 'pass21', 'test21@example.com');


insert into user_department (user_id, dept_id) values ((select id from user where user_name='test1'), (select id from department where dept_name='cs'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test2'), (select id from department where dept_name='cs'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test3'), (select id from department where dept_name='econ'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test4'), (select id from department where dept_name='cs'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test5'), (select id from department where dept_name='cs'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test6'), (select id from department where dept_name='econ'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test7'), (select id from department where dept_name='econ'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test8'), (select id from department where dept_name='econ'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test9'), (select id from department where dept_name='econ'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test10'), (select id from department where dept_name='fun'));	
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test11'), (select id from department where dept_name='fun'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test12'), (select id from department where dept_name='fun'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test13'), (select id from department where dept_name='research'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test14'), (select id from department where dept_name='research'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test15'), (select id from department where dept_name='startup'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test16'), (select id from department where dept_name='startup'));
insert into user_department (user_id, dept_id) values ((select id from user where user_name='test17'), (select id from department where dept_name='biology'));