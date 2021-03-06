-- set the database to use utf8
alter database snelson54 character set utf8 collate utf8_unicode_ci;

-- these statements will drop the tables and re-add them
drop table if exists postComment;
drop table if exists post;
drop table if exists user;



-- creates user entity
create table user (
	userId binary(16) not null,
	userEmail varchar(32) not null,
	userName varchar(32) not null,
	primary key(userId),
	index(userId)
);

-- creates post entity
create table post (
	postId binary(16) not null,
	postUserId binary(16) not null,
	postCommentCount int(32) not null,
	postDate varchar (32) null,
	postHide varchar(32) not null,
	postMedia longblob null,
	postReport varchar(32) not null,
	postSave varchar(32) not null,
	postShare varchar(16) not null,
	postSubredditId varchar(32) not null,
	postText mediumtext null,
	postTitle varchar(128) not null,
	postTag varchar(16) null,
	postUserName varchar(32) not null,
	primary key(postId),
	foreign key(postUserId) references user(UserId),
	index(postId),
	index(postUserId)
);

-- creates comment entity (a weak entity from an m-to-1  post --> commentPost)
create table postComment (
	postCommentPostId binary(16) not null,
	postCommentUserId binary(16) null,
	postCommentCount int not null,
	postCommentDate datetime not null,
	postCommentHide varchar(16) not null,
	postCommentReport varchar(16) not null,
	postCommentSave varchar(16) null,
	postCommentShare varchar(16) not null,
	postCommentText mediumtext not null,
	foreign key(postCommentPostId) references post(postId),
	foreign key(postCommentUserId) references user(userId),
	index(postCommentPostId),
	index(postCommentUserId)
);


