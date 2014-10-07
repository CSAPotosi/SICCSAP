/* comando para insertar desde archivo \i ubicacion del archivo ej c:wamp/www/schema.postgres.SICCSAP.sql*/
drop database if exists siccsap;
create database siccsap;
/*
tabla paciente*/
/*create table empresa(
nit varchar(15).
nombre varchar(50),
telefono varchar(30),
celular varchar(30)
)

create table departamento(
id_departamento SERIAL PRIMARY KEY,
nombre varchar(50),
ubicacion varchar(100),
piso varchar(50)
)
create table empleado(
id_empleado SERIAL PRIMARY KEY,
fecha_de_contratacion date,
cargo varchar(50)
id_departamento int foreign key references departamento(id_departamento)
)inherits (persona)
create table paciente(
id_paciente SERIAL PRIMARY KEY,
ocupacion varchar(50),
peso int,
altura float,
tipo_sangre varchar(10),
sexo varchar(20)
)inherits (persona)
create table responsable(
parentesco varchar(50)
id_paciente int foreign key references paciente(id_paciente)
)inherits (persona)
create table historial_clinico(
id_historial SERIAL primary key,
fecha_de_apertura date,
fecha_actualizacion date,
estado varchar(15)
medicamentos_actual varchar(100),
medicamentos_prohibidos varchar(100),
informacion_adicional varchar (300)
id_paciente int foreign key references paciente(id_paciente)
)
*/
/* CRUGE  */
CREATE TABLE cruge_system(
  idsystem serial,
  name VARCHAR(45) NULL ,
  largename VARCHAR(45) NULL ,
  sessionmaxdurationmins integer NULL DEFAULT 30 ,
  sessionmaxsameipconnections integer NULL DEFAULT 10 ,
  sessionreusesessions integer NULL DEFAULT 1,
  sessionmaxsessionsperday integer NULL DEFAULT -1 ,
  sessionmaxsessionsperuser integer NULL DEFAULT -1 ,
  systemnonewsessions integer NULL DEFAULT 0,
  systemdown integer NULL DEFAULT 0 ,
  registerusingcaptcha integer NULL DEFAULT 0 ,
  registerusingterms integer NULL DEFAULT 0 ,
  terms varchar(4096) ,
  registerusingactivation integer NULL DEFAULT 1 ,
  defaultroleforregistration VARCHAR(64) NULL ,
  registerusingtermslabel VARCHAR(100) NULL ,
  registrationonlogin integer NULL DEFAULT 1 ,
  PRIMARY KEY (idsystem) )
;
delete from cruge_system;
INSERT INTO cruge_system (idsystem,name,largename,sessionmaxdurationmins,sessionmaxsameipconnections,sessionreusesessions,sessionmaxsessionsperday,sessionmaxsessionsperuser,systemnonewsessions,systemdown,registerusingcaptcha,registerusingterms,terms,registerusingactivation,defaultroleforregistration,registerusingtermslabel,registrationonlogin) VALUES
  (1,'default',NULL,30,10,1,-1,-1,0,0,0,0,'',0,'','',1);


CREATE TABLE cruge_session (
  idsession serial,
  iduser INT NOT NULL ,
  created BIGINT NULL ,
  expire bigint NULL ,
  status integer NULL DEFAULT 0 ,
  ipaddress VARCHAR(45) NULL ,
  usagecount integer NULL DEFAULT 0 ,
  lastusage bigint NULL ,
  logoutdate bigint NULL ,
  ipaddressout VARCHAR(45) NULL ,
  PRIMARY KEY (idsession)
)
;



CREATE  TABLE cruge_user (
  iduser  serial,
  regdate bigint NULL ,
  actdate bigint NULL ,
  logondate bigint NULL ,
  username VARCHAR(64) NULL ,
  email VARCHAR(45) NULL ,
  password VARCHAR(64) NULL,
  authkey VARCHAR(100) NULL,
  state integer NULL DEFAULT 0 ,
  totalsessioncounter integer NULL DEFAULT 0 ,
  currentsessioncounter integer NULL DEFAULT 0 ,
  PRIMARY KEY (iduser)
)
;

delete from cruge_user;
insert into cruge_user(username, email, password, state) values
  ('admin', 'admin@tucorreo.com','admin',1)
  ,('invitado', 'invitado','nopassword',1)
;


CREATE  TABLE cruge_field (
  idfield  serial,
  fieldname VARCHAR(20) NOT NULL ,
  longname VARCHAR(50) NULL ,
  position integer NULL DEFAULT 0 ,
  required integer NULL DEFAULT 0 ,
  fieldtype integer NULL DEFAULT 0 ,
  fieldsize integer NULL DEFAULT 20 ,
  maxlength integer NULL DEFAULT 45 ,
  showinreports integer NULL DEFAULT 0 ,
  useregexp VARCHAR(512) NULL ,
  useregexpmsg VARCHAR(512) NULL ,
  predetvalue varchar(4096),
  PRIMARY KEY (idfield)
);

CREATE  TABLE cruge_fieldvalue (
  idfieldvalue  serial,
  iduser INT NOT NULL ,
  idfield INT NOT NULL ,
  value varchar(4096),
  PRIMARY KEY (idfieldvalue) ,
  CONSTRAINT fk_cruge_fieldvalue_cruge_user1
  FOREIGN KEY (iduser )
  REFERENCES cruge_user (iduser )
  ON DELETE CASCADE
  ON UPDATE NO ACTION,
  CONSTRAINT fk_cruge_fieldvalue_cruge_field1
  FOREIGN KEY (idfield )
  REFERENCES cruge_field (idfield )
  ON DELETE CASCADE
  ON UPDATE NO ACTION)
;

CREATE TABLE cruge_authitem (
  name VARCHAR(64) NOT NULL ,
  type integer NOT NULL ,
  description TEXT NULL DEFAULT NULL ,
  bizrule TEXT NULL DEFAULT NULL ,
  data TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (name) )
;

CREATE TABLE cruge_authassignment (
  userid INT NOT NULL ,
  bizrule TEXT NULL DEFAULT NULL ,
  data TEXT NULL DEFAULT NULL ,
  itemname VARCHAR(64) NOT NULL ,
  PRIMARY KEY (userid, itemname) ,
  CONSTRAINT fk_cruge_authassignment_cruge_authitem1
  FOREIGN KEY (itemname )
  REFERENCES cruge_authitem (name )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT fk_cruge_authassignment_user
  FOREIGN KEY (userid )
  REFERENCES cruge_user (iduser )
  ON DELETE CASCADE
  ON UPDATE NO ACTION)
;


CREATE TABLE cruge_authitemchild (
  parent VARCHAR(64) NOT NULL ,
  child VARCHAR(64) NOT NULL ,
  PRIMARY KEY (parent, child) ,
  CONSTRAINT crugeauthitemchild_ibfk_1
  FOREIGN KEY (parent )
  REFERENCES cruge_authitem (name )
  ON DELETE CASCADE
  ON UPDATE CASCADE,
  CONSTRAINT crugeauthitemchild_ibfk_2
  FOREIGN KEY (child )
  REFERENCES cruge_authitem (name )
  ON DELETE CASCADE
  ON UPDATE CASCADE)
;
/*FIN CRUGE*/


/*tablas de base de datos*/


CREATE TABLE especialidad(
  id_especialidad SERIAL primary key not null,
  nombre_especialidad  varchar(50) not null,
  descripcion varchar(128)
);


create table persona(
  id_persona SERIAL PRIMARY KEY not null,
  dni varchar(20),
  nit varchar(20),
  nombres varchar(100) default 'R/N',
  apellidos varchar(100) not null,
  direccion varchar(100),
  sexo varchar(1) check (sexo in ('M','F')),
  localidad varchar(40),
  pais varchar(40),
  telefono varchar(20),
  celular varchar(20),
  email varchar(100),
  fecha_de_nacimiento timestamp,
  fotografia varchar(128) default 'default.gif',
  estado_civil varchar(20)
);


create table medico(
  id_medico serial not null primary key ,
  matricula varchar(20),
  colegiatura varchar(50),
  estado varchar(1) check (estado in ('A','I','O')),
  motivo_cambio_estado varchar(128)
)inherits (persona);

create table medico_especialidad(
  id_medico int ,
  id_especialidad int,
  foreign key (id_medico)references medico(id_medico),
  foreign key(id_especialidad) references especialidad(id_especialidad)
);
create table departamento(
  id_departamento SERIAL not null PRIMARY KEY,
  nombre varchar(50),
  ubicacion varchar(100),
  piso varchar(50)
);
create table horario(
  id_horario SERIAL not null PRIMARY KEY,
  nombre varchar(50),
  hora_ingreso time,
  hora_salida time
);
create table empleado(
  id_empleado SERIAL not null PRIMARY KEY,
  id_horario int,
  fecha_de_contratacion date,
  cargo varchar(50),
  id_departamento int,
  estado varchar(1) check (estado in ('A','I','O')),
  motivo_cambio_estado varchar(128),
  foreign key (id_horario) references horario(id_horario),
  foreign key (id_departamento) references departamento(id_departamento)
)inherits (persona);
create table registro(
  id_registro SERIAL not null PRIMARY KEY,
  id_empleado int,
  id_horario int,
  id_departamento int,
  fecha_de_registro date,
  hora_ingreso time,
  hora_salida time,
  excepcion varchar(20),
  foreign key (id_empleado) references empleado(id_empleado),
  foreign key (id_horario) references horario(id_horario),
  foreign key (id_empleado) references departamento(id_departamento)
);


create table servicio(
  id_servicio int unique,
  fecha_creacion_servicio date,
  fecha_modificacion_servicio date
);

create table historial_costo(
  id_historial_costo SERIAL NOT NULL primary key ,
  fecha_inicio date not null ,
  fecha_fin date,
  monto float not null,
  id_servicio int
);

create table tipo_sala(
  id_servicio SERIAL not null primary key,
  nombre_tipo_sala varchar(50) not null,
  descripcion_tipo_sala varchar(128)
)inherits (servicio);

create table sala(
  id_sala SERIAL not null primary key,
  numero_sala int,
  ubicacion_sala varchar(128),
  estado_sala varchar(15),
  id_servicio int,
  foreign key (id_servicio) references tipo_sala(id_servicio)
);