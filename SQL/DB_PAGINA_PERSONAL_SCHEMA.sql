#
#   CREAR BASE DE DATOS pagina_personal
#

CREATE DATABASE pagina_personal CHARSET= utf8 COLLATE=utf8_spanish_ci;

USE pagina_personal;


#
#   CREAR TABLA USUARIO
#

CREATE TABLE `USUARIO` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(260) NOT NULL,
  `estado` int(1) NOT NULL,
  `activo` int(1) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `persona_id` int(11),
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (usuario_id)
) ENGINE=InnoDB DEFAULT CHARSET= utf8 COLLATE=utf8_spanish_ci;


#
#   CREAR TABLA USUARIO_GRUPO
#

CREATE TABLE `USUARIO_GRUPO` (
  `grupo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (grupo_id)
) ENGINE=InnoDB DEFAULT CHARSET= utf8 COLLATE=utf8_spanish_ci;


#
#   CREAR TABLA PERSONA
#

CREATE TABLE `PERSONA` (
  `persona_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (persona_id)
) ENGINE=InnoDB DEFAULT CHARSET= utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE USUARIO
ADD FOREIGN KEY grupo_usuario (grupo_id) REFERENCES USUARIO_GRUPO (grupo_id);

ALTER TABLE USUARIO
ADD FOREIGN KEY persona_usuario (persona_id) REFERENCES PERSONA (persona_id);