create database Persones;
use Persones;

create table Sexe(
	id char primary key,
    nom varchar(10)
);

create table Persona(
	Nom varchar(30),
    Email varchar(40) primary key,
    Edat int,
    Experiencia int,
    sexe char,
    foreign key (sexe) references Sexe(id) on update cascade on delete cascade
);

insert into Sexe values
	("M", "male"),
    ("F", "female");
    
insert into Persona values
	("José Carlos", "akez1999@gmail.com", 20, 3, "M"),
    ("Carlos", "weh_34@gmail.org", 27, 13, "M"),
    ("Maria", "mariaqq@hotmail.com", 32, 12, "F");