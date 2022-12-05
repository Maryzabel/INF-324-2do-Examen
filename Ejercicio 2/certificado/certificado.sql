CREATE TABLE flujo(
  flujo varchar(3),
  proceso varchar(3),
  proceso_siguiente varchar(3),
  tipo varchar(3),
  rol varchar(10),
  pantalla varchar(20)
);

insert into flujo values('F1','P1','P2','I','estudiante','inicial');
insert into flujo values('F1','P2','P3','P','decanato','proceso');
insert into flujo values('F1','P3','P4','P','kardex','revision');
insert into flujo values('F1','P4','null','C','Kardex','cumple');
insert into flujo values('F1','P5','null','F','estudiante','negacion');
insert into flujo values('F1','P6','P7','P','decanato','extender');
insert into flujo values('F1','P7','null','F','estudiante','notificacion');





CREATE TABLE flujocondicion (
  flujo varchar(5),
  proceso varchar(5),
  procesoSI varchar(5),
  procesoNO varchar(5)
);

insert into flujocondicion values ('F1','P4','P6','P5');





CREATE TABLE flujotramite (
  Flujo varchar(5),
  proceso varchar(5),
  nro_tramite varchar(10),
  fechaini datetime,
  fechafin datetime,
  usuario varchar(20)
);



create table usuario(
    id	int,
    usuario	varchar(50),
    pasword	varchar(50),
    id_rol int
);

insert into usuario values(1,'edwintmz','123456',1);
insert into usuario values(2,'veronica','123456',2);




CREATE TABLE certificado (
  ci varchar(20),
  nombre varchar(50),
  apat varchar(50),
  amat varchar(50),
  carta varchar(3),
  record varchar(3),
  pensum varchar(3),
  estado varchar(50)
);


CREATE TABLE rol(
  id  int,
  rol  varchar(50)
);

INSERT INTO  rol VALUES(null, 'Estudiante');
INSERT INTO  rol VALUES(null, 'Kardex');