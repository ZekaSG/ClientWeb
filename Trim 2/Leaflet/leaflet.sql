drop schema if exists Leaflet;
create schema Leaflet;
use Leaflet;
create table if not exists location (
	id int not null auto_increment primary key,
	name varchar(40) null,
    latitude double not null,
    longitude double not null
);

insert into location (latitude, longitude) 
			values	(2.65594482421875, 39.58452390500424),
					(3.16680908203125, 39.93922484079194),
                    (3.229336738586426, 39.42769495379841),
                    (3.197021484375, 39.56255913734118);
