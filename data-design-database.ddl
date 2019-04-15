-- set the database to use utf8
alter database snelson54 character set utf8 collate utf8_unicode_ci;

-- these statements will drop the tables and re-add them
drop table if exists post;
drop table if exists postComment;
drop table if exists user;


-- creates user entity
create table user (
	userName varchar(32) not null,
	userEmail varchar(32) not null,
	primary key(userName),
	index(userName)
);

-- creates post entity
create table post (
	postTitle varchar(128) not null,
	postMedia longblob null,
	postText varchar(2187) null,
	postDate varchar(32) not null,
	postUserName varchar(32) not null,
	postTag varchar(16) null,
	postCommentCount varchar(16) not null,
	postShare varchar(16) not null,
	postSave varchar(32) not null,
	postHide varchar(32) not null,
	postReport varchar(32) not null,
	postsubredditId varchar(32) not null,
	primary key(postTitle),
	index(postTitle)
);

-- creates comment entity (a weak entity from an m-to-1  post --> commentPost)
create table postComment (
	postCommentText varchar(2187) not null,
	postCommentDate varchar(32) not null,
	postCommentUserName varchar(32) null,
	postCommentCount varchar(16) not null,
	postCommentShare varchar(16) not null,
	postCommentSave varchar(16) null,
	postCommentHide varchar(16) not null,
	postCommentReport varchar(16) not null,
	foreign key(postCommentUserName) references user(userName)
);


