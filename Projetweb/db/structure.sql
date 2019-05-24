drop table if exists campaign;
drop table if exists survey;
drop table if exists questions;
drop table if exists user;
drop table if exists experimenter;

create table campaign (
    camp_id integer not null primary key auto_increment,
    camp_title varchar(100) not null,
    camp_description varchar(1000) not null,
    camp_experimenter varchar(150) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table survey (
    sur_id integer not null primary key auto_increment,
    sur_title varchar(100) not null,
    sur_description varchar(1000) not null,
    sur_experimenter varchar(150) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table questions (
    quest_id integer not null primary key auto_increment,
    quest_title varchar(100) not null,
    quest_description varchar(1000) not null,
    quest_experimenter varchar(150) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table user (
    usr_id integer not null primary key auto_increment,
    usr_login varchar(50) not null,
    usr_password varchar(88) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table experimenter (
    exp_id integer not null primary key auto_increment,
    exp_login varchar(50) not null,
    exp_password varchar(88) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;


