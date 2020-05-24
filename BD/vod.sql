DROP DATABASE IF EXISTS vod;

CREATE DATABASE IF NOT EXISTS vod;

use vod;

create table Film(
	numFilm int not null auto_increment ,
	titre varchar(30),
	annee int(4),
	realisateur varchar(30),
	primary key(numFilm)
);


insert into Film values(1 , 'Blood Brother' , 2018 , 'John Pogue');
insert into Film values(2 , 'Okja' , 2017 , 'Bong Joon Ho');
insert into Film values(3 , 'Invincible' , 2014 , 'Angelina Jolie');
insert into Film values(4 , 'Colombiana' , 2011 , 'Olivier Megaton');
insert into Film values(5 , 'Inception' , 2010 , 'Christopher Nolan');

