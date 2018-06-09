drop table celestial_body;
drop table comet;
drop table spectral_brightness;
drop table star;
drop table planet;
drop table moon_satellite_of;
drop table galaxy;
drop table publication;
drop table astronomer;
drop table institution;
drop table researcher_fellowship
drop table model;
drop table instrument_location;
drop table authors;
drop table researches;
drop table discovers_used;
drop table refers;
drop table orbiting_around;
drop table passes_by;


create table celestial_body
	(id INTEGER primary key,
	right_ascension REAL not null,
	declination REAL not null,
	name CHAR(20),
	verified BIT DEFAULT 0,
	unique (right_ascension,  declination));

grant select on celestial_body to public;

create table comet
	(id INTEGER primary key,
	velocity REAL,
	foreign key (id) references celestial_body(id));

grant select on comet to public;

create table spectral_brightness
	(spectral_type CHAR(1) primary key, 
	brightness REAL);

grant select on comet to public;

create table star
	(id INTEGER primary key, 
	spectral_type CHAR(1)
	foreign key id references celestial_body(id),
	foreign key spectral_type references spectral_brightness(spectral_type));

grant select on star to public;

create table planet
	(id INTEGER primary key,
	orbital_period REAL,
	planet_type CHAR(20),
	foreign key id references celestial_body(id));

grant select on planet to public;

create table moon_satellite_of
	(cb_id INTEGER primary key, 
	pl_id INTEGER not null, 
	orbital_period REAL, 
	radius REAL,
	foreign key (cb_id) references celestial_body(id),
	foreign key (pl_id) references planet(id));

grant select on moon_satellite_of to public;

create table galaxy
	(id INTEGER primary key, 
	type CHAR(20), 
	brightness REAL, 
	red_shift REAL,
	foreign key(id) references celestial_body(id));

grant select on galaxy to public;

create table publication
	(doi CHAR(11) primary key, 
	date_of_publication date);	

grant select on publication to public;

create table astronomer
	(id INTEGER primary key, 
	username CHAR(20) not null, 
	password CHAR(20), 
	name CHAR(20),
	unique (username));

grant select on astronomer to public;

create table institution
	(name CHAR(40) primary key);

grant select on institution to public;

create table researcher_fellowship
	(id INTEGER primary key, 
	inst_name CHAR(40) not null,
	foreign key (id) references astronomer(id), 
	foreign key(inst_name) references institution(name));

grant select on researcher_fellowship to public;

create table model
	(mid INTEGER primary key,
	type CHAR(20));

grant select on model to public;

create table instrument_location
	(mid INTEGER,
	location CHAR(40),
	primary key (mid, location));

grant select on instrument_location to public;

create table binary_with
	(star1_id INTEGER unique,
	star2_id INTEGER  unique,
	primary key (star1_id, star2_id),
	foreign key (star1_id) references Star(id),
	foreign key (star2_id) references Star(id));

grant select on binary_with to public;

create table authors
	(doi CHAR(11),
	id INTEGER,
	primary key (doi, id),
	foreign key doi references publication(doi),
	foreign key id references researcher_fellowship(id));

grant select on authors to public;

create table researches
	(doi CHAR(11), 
	id INTEGER,
	primary key (doi, id),
	foreign key doi references publication(doi),
	foreign key id references celestial_body(id));

grant select on researches to public;

create table discovers_used
	(cb_id  INTEGER, 
	a_id  INTEGER, 
	mid INTEGER, 
	location CHAR(40), 
	discovery_date INTEGER,
	primary key (cb_id, a_id),
	foreign key cb_id references celestial_body(id),
	foreign key a_id references astronomer(id),
	foreign key (mid, location) references instrument_location(mid, location));

grant select on discovers_used to public;

create table refers
	(doiuses CHAR(11), 
	doireferred CHAR(11),
	primary key (doiuses , doireferred),
	foreign key doiuses references publication(doi),
	foreign key doireferred references publication(doi));

grant select on refers to public;

create table orbiting_around
	(pl_id INTEGER, 
	s_id INTEGER,
	primary key (pl_id, s_id),
	foreign key pl_id references planet(id),
	foreign key s_id references star(id));

grant select on orbiting_around to public;

create table passes_by
	(c_id INTEGER, 
	s_id INTEGER
	primary key (c_id, s_id),
	foreign key c_id references comet(id),
	foreign key s_id references star(id));

grant select on passes_by to public;
