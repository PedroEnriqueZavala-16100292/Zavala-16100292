drop database Web16100292

create database Web16100292

use Web16100292

create table Doctor(
Id_Doctor int not null,
NombreDoctor varchar(30) not null,
Primary key (Id_Doctor))

insert into Doctor values (1,'Juan Perez')
insert into Doctor values (2,'Pablo Barrea')
insert into Doctor values (3,'Juan Escutia')
insert into Doctor values (4,'Raul Jimenez')
insert into Doctor values (5,'Edson Alvarez')

select * from Doctor

create table Paciente(
Id_Paciente int not null,
Nombre varchar(15) not null,
ApellidoPaterno varchar(15) not null,
ApellidoMaterno varchar(15) not null,
Peso int not null,
Estatura int not null,
Edad int not null,
Alergico varchar(30) not null,
CorreoElectronico varchar(30) not null,
IndicacionesMedicas varchar(60) not null,
Primary key (Id_Paciente))

insert into Paciente values (1,'diego','maradona','Martinez',64,1.78,65,'no','abcd','tomar paracetamol cada 12 horas por 4 dias')
insert into Paciente values (2,'paco','hinojosa','duarte',90,1.50,20,'si','efgh','tomar diclofenaco cada 6 horas por 5 dias')
insert into Paciente values (3,'Pedro','gonzales','huerta',80,1.60,70,'no','ijkl','tomar clonazapam cada 8 horas por 6 dias')
insert into Paciente values (4,'pablo','gutierrez','benavides',80,1.40,25,'si','lmno','tomar ranitidina cada 6 horas por 3 dias')
insert into Paciente values (5,'angel','ortiz','gomez',83,1.55,69,'no','pqrs','tomar omeoprazol cada 12 horas por 7 dias')


select * from Paciente