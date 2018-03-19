drop table if exists campaign;
drop table if exists survey;
drop table if exists questions;
drop table if exists user;
drop table if exists experimenter;
drop table if exists attrakdiffq;
drop table if exists attrakdiffa;

create table campaign (
    camp_id integer not null primary key auto_increment,
    camp_title varchar(100) not null,
    camp_description varchar(1000) not null,
    camp_experimenter varchar(150) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table survey (
    sur_id integer not null primary key auto_increment,
    sur_camp_id integer not null,
    sur_type varchar(50) not null,
    sur_questions varchar(50) not null,
    sur_invitation varchar(50) not null,
    sur_title varchar(100) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table attrakdiffq (
    quest_id integer not null primary key,
    quest_word1 varchar(20) not null,
    quest_word2 varchar(20) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table attrakdiffa (
    answ_quest_id integer not null primary key auto_increment,    
    answ_value integer not null
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