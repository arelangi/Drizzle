create table user(username varchar(30), email varchar(140), pwd varchar(160), Primary Key(username));

create table images(id bigint auto_increment, time timestamp, imagepath varchar(500), thumbnailpath varchar(500), username varchar(30), lat decimal(10,8), lng decimal (11,8), title varchar(240), primetag varchar(12), tags varchar(150), hascontent tinyint, likecount int, content mediumtext, islive tinyint, contenttitle varchar(140),  Primary Key(id) ,Foreign Key(username) references user(username));

create table followers(followerid varchar(30) , userid varchar(30), Primary Key(followerid,userid),Foreign Key(followerid) references user(username), Foreign Key(userid) references user(username));
