CREATE SCHEMA `exads` ;

create table tv_series(
id bigint(20) not null primary key auto_increment,
title varchar(50) not null,
channel varchar(50) not null,
gender varchar(50) not null);

create table tv_series_intervals(
id_tv_series bigint(20) not null,
week_day tinyint(4) not null,
show_time time,
constraint tv_series_intervals_fk foreign key (id_tv_series) references tv_series (id) on delete cascade);

insert into tv_series (id, title, channel, gender) values(1,'Game of Thrones','HBO','action adventure drama fantasy');
insert into tv_series (id, title, channel, gender) values(2,'Breaking Bad','AMC','crime drama thriller');
insert into tv_series (id, title, channel, gender) values(3,'Westworld','HBO','drama mystery sci-fi');
insert into tv_series (id, title, channel, gender) values(4,'The Walking Dead','AMC','drama horror thriller');
insert into tv_series (id, title, channel, gender) values(5,'This Is Us','FOX','comedy drama romance');
insert into tv_series (id, title, channel, gender) values(6,'Vikings','AMC','action adventure drama');
insert into tv_series (id, title, channel, gender) values(7,'The Kominsky Method','FOX','comedy drama');

insert into tv_series_intervals (id_tv_series, week_day, show_time) values(1,6,'22:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(2,7,'21:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(3,1,'22:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(4,7,'22:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(5,1,'20:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(6,6,'22:00:00');
insert into tv_series_intervals (id_tv_series, week_day, show_time) values(7,1,'21:00:00');