

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `A_paterno` varchar(30) NOT NULL,
  `A_materno` varchar(30) NOT NULL,
  `ocupacion` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int(99) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(50) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `A_paterno_alumno` varchar(50) NOT NULL,
  `A_materno_alumno` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `curp` varchar(30) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `Ninterior` varchar(20) NOT NULL,
  `Nexterior` varchar(20) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fotografia` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;


CREATE TABLE IF NOT EXISTS `avisos` (
  `id_avisos` int(11) NOT NULL AUTO_INCREMENT,
  `aviso` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `prioridad` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id_avisos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;



CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(100) NOT NULL AUTO_INCREMENT,
  `tema` varchar(10) NOT NULL,
  `anuncio` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


CREATE TABLE IF NOT EXISTS `calendarios` (
  `id_calendario` int(11) NOT NULL AUTO_INCREMENT,
  `calendario` varchar(200) NOT NULL,
  PRIMARY KEY (`id_calendario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `calificacion` (
  `id_calificacion` int(100) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(100) NOT NULL,
  `id_materia` int(100) NOT NULL,
  `creditos` int(50) NOT NULL,
  `calificacion` varchar(20) NOT NULL,
  `Tipo_evaluacion` varchar(50) NOT NULL,
  `acumulado` varchar(12) NOT NULL,
  PRIMARY KEY (`id_calificacion`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;


CREATE TABLE IF NOT EXISTS `create_grupo` (
  `id_create_grupo` int(20) NOT NULL AUTO_INCREMENT,
  `create_grupo` varchar(10) NOT NULL,
  `create_grado` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_create_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `create_grupo` (`id_create_grupo`, `create_grupo`, `create_grado`, `descripcion`) VALUES
(1, 'A', '1', ''),
(2, 'B', '2', '');



CREATE TABLE IF NOT EXISTS `credito` (
  `id_credito` int(11) NOT NULL AUTO_INCREMENT,
  `credito` varchar(30) NOT NULL,
  PRIMARY KEY (`id_credito`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;



INSERT INTO `credito` (`id_credito`, `credito`) VALUES
(1, '1 credito'),
(2, '2 creditos'),
(4, '3 creditos'),
(5, '4 creditos'),
(6, '5 creditos'),
(7, '6 creditos'),
(8, '7 creditos'),
(9, '8 creditos'),
(10, '9 creditos'),
(11, '10 creditos'),
(12, '11 creditos'),
(13, '12 creditos'),
(14, '13 creditos'),
(15, '14 creditos'),
(16, '15 creditos'),
(17, '16 creditos'),
(18, '17 creditos'),
(19, '18 creditos'),
(20, '20 creditos'),
(21, '21 creditos'),
(22, '22 creditos'),
(23, '23 creditos'),
(24, '24 creditos'),
(25, '25 creditos'),
(26, '26 creditos'),
(27, '27 creditos'),
(28, '28 creditos'),
(29, '29 creditos'),
(30, '30 creditos');



CREATE TABLE IF NOT EXISTS `edad` (
  `id_edad` int(11) NOT NULL AUTO_INCREMENT,
  `edad_create` varchar(10) NOT NULL,
  PRIMARY KEY (`id_edad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;



INSERT INTO `edad` (`id_edad`, `edad_create`) VALUES
(1, '10 años'),
(2, '11 años'),
(3, '12 años'),
(4, '13 años'),
(5, '14 años'),
(6, '15 años'),
(7, '16 años'),
(8, '17 años'),
(9, '18 años'),
(10, '19 años'),
(11, '20 años'),
(12, '21 años'),
(13, '22 años'),
(14, '23 años'),
(15, '24 años'),
(16, '25 años'),
(17, '26 años'),
(18, '27 años'),
(19, '28 años'),
(20, '29 años'),
(21, '30 años'),
(22, '31 años'),
(23, '32 años'),
(24, '33 años'),
(25, '34 años'),
(26, '35 años'),
(27, '36 años'),
(28, '37 años'),
(29, '38 años'),
(30, '39 años'),
(31, '40 años'),
(32, '41 años'),
(33, '42 años'),
(34, '43 años'),
(35, '44 años'),
(36, '45 años'),
(37, '46 años'),
(38, '47 años'),
(39, '48 años'),
(40, '49 años'),
(41, '50 años'),
(42, '51 años'),
(43, '52 años'),
(44, '53 años'),
(45, '54 años'),
(46, '55 años'),
(47, '56 años'),
(48, '57 años'),
(49, '58 años'),
(50, '59 años'),
(51, '60 años');



CREATE TABLE IF NOT EXISTS `estados_mexico` (
  `id_estado` int(32) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;


INSERT INTO `estados_mexico` (`id_estado`, `nombre_estado`, `codigo`) VALUES
(1, 'Aguascalientes', ''),
(2, 'Baja California', ''),
(3, 'Baja California Sur', ''),
(4, 'Campeche', ''),
(5, 'Chiapas', ''),
(6, 'Chihuahua', ''),
(7, 'Coahuila', ''),
(8, 'Colima', ''),
(9, 'Distrito Federal', ''),
(10, 'Durango', ''),
(11, 'Estado de México', ''),
(12, 'Guanajuato', ''),
(13, 'Guerrero', ''),
(14, 'Hidalgo', ''),
(15, 'Jalisco', ''),
(16, 'Michoacán', ''),
(17, 'Morelos', ''),
(18, 'Nayarit', ''),
(19, 'Nuevo León', ''),
(20, 'Oaxaca', ''),
(21, 'Puebla', ''),
(22, 'Querétaro', ''),
(23, 'Quintana Roo', ''),
(24, 'San Luis', ''),
(25, 'Potosí', ''),
(26, 'Sinaloa', ''),
(27, 'Sonora', ''),
(28, 'Tabasco', ''),
(29, 'Tamaulipas', ''),
(30, 'Tlaxcala', ''),
(31, 'Veracruz', ''),
(32, 'Yucatán', ''),
(33, 'Zacatecas', '');



CREATE TABLE IF NOT EXISTS `estado_civil` (
  `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `p_estado_civil` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_estado_civil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `estado_civil` (`id_estado_civil`, `p_estado_civil`, `descripcion`) VALUES
(1, 'soltero', ''),
(2, 'casado', ''),
(3, 'union libre', ''),
(4, 'divorceado', ''),
(5, 'viudo', '');



CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero_persona` int(11) NOT NULL AUTO_INCREMENT,
  `genero_create` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genero_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



INSERT INTO `genero` (`id_genero_persona`, `genero_create`) VALUES
(1, 'masculino'),
(2, 'femenino');



CREATE TABLE IF NOT EXISTS `grupos` (
  `id_grupo` int(50) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(100) NOT NULL,
  `id_materia` int(100) NOT NULL,
  `grupo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `id_materia` (`id_materia`),
  KEY `id_maestro` (`id_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;


CREATE TABLE IF NOT EXISTS `img_admin` (
  `id_img_admin` int(10) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_img_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;



CREATE TABLE IF NOT EXISTS `maestro` (
  `id_maestro` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `A_paterno` varchar(50) NOT NULL,
  `A_materno` varchar(50) NOT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `curp` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `edad` int(100) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `Ninterior` varchar(20) NOT NULL,
  `Nexterior` varchar(20) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;



CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int(100) NOT NULL AUTO_INCREMENT,
  `claveSEP` varchar(50) NOT NULL,
  `nombre_materia` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `credito` int(100) NOT NULL,
  `cal_min` varchar(50) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;




CREATE TABLE IF NOT EXISTS `nacionalidad` (
  `id_nacionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad_create` varchar(50) NOT NULL,
  PRIMARY KEY (`id_nacionalidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



INSERT INTO `nacionalidad` (`id_nacionalidad`, `nacionalidad_create`) VALUES
(1, 'mexicana'),
(2, 'extrangera');



CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status_create` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


INSERT INTO `status` (`id_status`, `status_create`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'baja temporal');


CREATE TABLE IF NOT EXISTS `user_maestro` (
  `id_login_maestro` int(100) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(100) DEFAULT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login_maestro`),
  KEY `id_maestro` (`id_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;




ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);


ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `grupos_ibfk_3` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id_maestro`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `user_maestro`
  ADD CONSTRAINT `user_maestro_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id_maestro`) ON DELETE CASCADE ON UPDATE CASCADE;

