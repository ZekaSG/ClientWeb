create database persones2;
use persones2;

create table Sexe(
	id char primary key,
    Nom varchar(10)
);

create table Persona(
	Nom varchar(30),
    Email varchar(40) primary key,
    Edat int,
    Experiencia int,
    Sexe char,
    Foto varchar(50) not null,
    foreign key (sexe) references Sexe(id) on update cascade on delete cascade
);

insert into Sexe values
	("M", "male"),
    ("F", "female");
    
insert into Persona values
	("José Carlos", "akez1999@gmail.com", 20, 3, "M", "1.png"),
    ("Carlos", "weh_34@gmail.org", 27, 13, "M", "2.png"),
    ("Maria", "mariaqq@hotmail.com", 32, 12, "F", "3.png"),
    ("Carla", "sdfsdf@hotmail.com", 43, 21, "F", "4.png");