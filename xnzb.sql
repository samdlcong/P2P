create database if not exists `xnzb` default character set utf8 collate utf8_general_ci;
use `xnzb`;

create table if not exists p2p_admin (
	id tinyint unsigned  not null auto_increment,
	username varchar(20) not null default '',
	password varchar(32) not null default '',
	lastloginip varchar(15) default '0',
	lastlogintime int(10) unsigned default '0',
	email varchar(40) default '',
	realname varchar(50) not null default '',
	status tinyint(1) not null default '1',
	primary key (id),
	key username(username)
)engine=myisam default charset=utf8;