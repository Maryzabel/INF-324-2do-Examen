CREATE TABLE flujo(
  flujo varchar(3),
  proceso varchar(3),
  proceso_siguiente varchar(3),
  tipo varchar(3),
  rol varchar(10),
  pantalla varchar(20)
);

insert into flujo values('F1','P1','P2','I','estudiante','inicio');
insert into flujo values('F1','P2','P3','P','estudiante','documentos');
insert into flujo values('F1','P3',null,'C','kardex','cumple');
insert into flujo values('F1','P4','P2','P','estudiante','causanegativa');
insert into flujo values('F1','P5','P6','P','kardex','asignagrupo');
insert into flujo values('F1','P6',null,'F','estudiante','notificacion');



CREATE TABLE flujocondicion (
  flujo varchar(5),
  proceso varchar(5),
  procesoSI varchar(5),
  procesoNO varchar(5)
)

insert into flujocondicion values ('F1','P4','P5','P4');


CREATE TABLE flujotramite (
  Flujo varchar(5),
  proceso varchar(5),
  nro_tramite varchar(10),
  fechaini datetime,
  fechafin datetime,
  usuario varchar(20)
)



create table usuario(
    id	int,
    usuario	varchar(50),
    pasword	varchar(50),
    id_rol int
);

insert into usuario values(1,'edwintmz','123456',1);
insert into usuario values(2,'veronica','123456',2);
insert into usuario values(2,'veronica','123456',3);




CREATE TABLE inscripcion(
  ci   varchar(30),
  nombre  varchar(30),
  apat  varchar(30),
  amat  varchar(30),
  genero  varchar(30),
  tel  varchar(30),
  usuario  varchar(30),
  foto   varchar(3),
  cnac   varchar(3),
  fci   varchar(3),
  tib   varchar(3),
  grupo  varchar(10)
);


CREATE TABLE rol(
  id  int,
  rol  varchar(50)
);

INSERT INTO  rol VALUES(null, 'Estudiante');
INSERT INTO  rol VALUES(null, 'Kardex');
INSERT INTO  rol VALUES(null, 'Decanato');


