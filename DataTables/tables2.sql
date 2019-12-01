drop database if exists persones2;
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
    ("Mario", "sdfsd12f@hotmail.com", 43, 12, "F", "4.png"),
    ("Fernando", "akezds1999@gmail.com", 12, 3, "M", "5.png"),
    ("Juliana", "wehssc_34@gmail.org", 33, 0, "M", "6.png"),
    ("Ernesto", "maricvaqq@hotmail.com", 33, 4, "F", "7.png"),
    ("ferreafdas", "sxzvdfsdf@hotmail.com", 56, 21, "F", "8.png"),
    ("Antonio", "akehz1999@gmail.com", 23, 9, "M", "9.png"),
    ("Guillermo", "weh.n_34@gmail.org", 43, 10, "F", "10.png"),
    ("Maria", "maraqq@hotmail.com", 21, 0, "F", "11.png"),
    ("Manolo", "sdfsjgdf@hotmail.com", 17, 2, "F", "12.png"),
    ("Fernando", "adfgh999@gmail.com", 80, 41, "M", "13.png"),
    ("Carlos", "weh_xd34@gmail.org", 30, 15, "M", "14.png"),
    ("Maria", "marfdfqq@hotmail.com", 78, 6, "F", "15.png"),
    ("Ignacio", "stgbf@hotmail.com", 46, 18, "F", "16.png");