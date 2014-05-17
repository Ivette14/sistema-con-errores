-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-05-2014 a las 09:55:10
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sys_activofijo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_activo_fijo`
--

CREATE TABLE IF NOT EXISTS `cat_activo_fijo` (
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_cuentacontable` int(10) NOT NULL,
  `id_area` int(6) NOT NULL,
  `id_sucursal` int(10) NOT NULL,
  `id_empleado` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `nombre_activo_fijo` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `descripcion` text COLLATE latin1_general_ci NOT NULL,
  `valor_original` float NOT NULL,
  `tipo_valor` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `estado` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_inicio_uso` date NOT NULL,
  `importe_depreciable` float NOT NULL,
  `vida_util` int(2) NOT NULL,
  `valor_residual` float NOT NULL,
  `cuota_anual` float NOT NULL,
  `cuota_mensual` float NOT NULL,
  `activado` varchar(2) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_activofijo`),
  KEY `id_cuentacontable_idx` (`id_cuentacontable`),
  KEY `id_area_idx` (`id_area`),
  KEY `id_sucursal_idx` (`id_sucursal`),
  KEY `id_empleado_idx` (`id_empleado`),
  KEY `id_proveedor_idx` (`id_proveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcar la base de datos para la tabla `cat_activo_fijo`
--

INSERT INTO `cat_activo_fijo` (`id_activofijo`, `id_cuentacontable`, `id_area`, `id_sucursal`, `id_empleado`, `id_proveedor`, `nombre_activo_fijo`, `descripcion`, `valor_original`, `tipo_valor`, `estado`, `fecha_compra`, `fecha_ingreso`, `fecha_inicio_uso`, `importe_depreciable`, `vida_util`, `valor_residual`, `cuota_anual`, `cuota_mensual`, `activado`) VALUES
('ME01', 3, 2, 2, 'E01', 2, 'Computadora', 'computadora de escritorio Dell', 300, 'estimado', 'nuevo', '2010-05-12', '2014-05-16 18:26:34', '2010-06-01', 500, 2, 100, 200, 16.667, '1'),
('M01', 1, 2, 6, 'E02', 2, 'computadora', 'computadora portátil\r\n', 500, 'real', 'nuevo', '0000-00-00', '0000-00-00 00:00:00', '2012-08-06', 700, 5, 200, 100, 8.33, '1'),
('TR01', 4, 7, 7, 'E04', 4, 'camion de carga', 'trasporte para traslado de activos\r\n', 30000, 'real', 'usado', '2011-06-12', '2014-05-16 21:45:48', '2011-07-12', 50000, 5, 1000, 9800, 816.66, '1'),
('TE01', 4, 1, 6, 'E08', 1, 'Edificio', 'edificación de la empresa', 50000, 'real', 'usado', '2014-05-15', '2014-05-16 21:52:08', '2014-05-29', 70000, 10, 20000, 5000, 41.66, '1'),
('ME02', 3, 6, 5, 'E03', 5, 'Escritorio', 'escritorio para la oficina', 150, 'estimado', 'nuevo', '2014-05-14', '2014-05-16 21:55:07', '2014-05-21', 250, 2, 100, 75, 6.25, '1'),
('ME3', 3, 7, 7, 'E16', 4, 'silla', 'silla giratoria para la oficina\r\n', 75, 'estimado', 'nuevo', '2014-04-17', '2014-05-16 21:56:40', '2014-05-22', 100, 5, 50, 10, 0.83, '1'),
('ME04', 3, 5, 5, 'E18', 2, 'aireacondicionado', 'aireacondicionado para la oficina\r\n', 600, 'estimado', 'nuevo', '2014-05-15', '2014-05-16 23:23:36', '2014-05-22', 800, 3, 200, 66.66, 5.55, '1'),
('ME5', 3, 4, 3, 'E19', 4, 'modulares', 'muebles de oficina\r\n', 1500, 'estimado', 'nuevo', '2014-05-15', '2014-05-16 23:38:18', '2014-05-22', 20000, 4, 18500, 2642.85, 220.24, '1'),
('TE02', 4, 2, 2, 'E06', 4, 'Edificio', 'edificaciones de la empresa\r\n', 100000, 'estimado', 'usado', '2014-05-08', '2014-05-22 23:52:29', '2014-05-29', 100500, 5, 500, 100, 8.33, '1'),
('TE03', 4, 3, 3, 'E07', 5, 'Edificio', 'edificaciones de la empresa', 60000, 'real', 'usado', '2014-05-23', '2014-05-24 23:59:52', '2014-05-23', 80000, 6, 20000, 3333.33, 277.78, '1'),
('TE04', 4, 3, 4, 'E11', 4, 'Edificio', 'edificaciones de la empresa', 75000, 'real', 'usado', '2014-05-23', '2014-05-23 00:06:53', '2014-05-31', 90000, 6, 15000, 2500, 208.33, '1'),
('TE05', 4, 5, 5, 'E13', 1, 'Edificio', 'edificaciones de la empresa', 40000, 'estimado', 'usado', '2014-05-30', '2014-06-10 00:13:46', '2014-06-18', 60000, 5, 20000, 4000, 333.33, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_area`
--

CREATE TABLE IF NOT EXISTS `cat_area` (
  `id_area` int(6) NOT NULL AUTO_INCREMENT,
  `id_sucursal` int(10) NOT NULL,
  `nombre_area` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_area`),
  KEY `id_sucursal_idx` (`id_sucursal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `cat_area`
--

INSERT INTO `cat_area` (`id_area`, `id_sucursal`, `nombre_area`) VALUES
(1, 1, 'Ventas'),
(2, 2, 'Recursos Humanos'),
(3, 3, 'ventas'),
(4, 4, 'Recursos Humanos'),
(5, 5, 'Recursos Humanos'),
(6, 6, 'ventas'),
(7, 7, 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_baja`
--

CREATE TABLE IF NOT EXISTS `cat_baja` (
  `id_baja` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_baja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `motivo_baja` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_baja`),
  KEY `id_activofijo_idx` (`id_activofijo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cat_baja`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_cuentas_contables`
--

CREATE TABLE IF NOT EXISTS `cat_cuentas_contables` (
  `id_cuentacontable` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_cuenta` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `vida_util` int(2) NOT NULL,
  PRIMARY KEY (`id_cuentacontable`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `cat_cuentas_contables`
--

INSERT INTO `cat_cuentas_contables` (`id_cuentacontable`, `nombre_cuenta`, `vida_util`) VALUES
(1, 'Maquinaria', 10),
(3, 'Mobiliario y Equipo', 10),
(4, 'Terrenos Y Edificios', 20),
(5, 'Transporte', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_depreciacion_activo`
--

CREATE TABLE IF NOT EXISTS `cat_depreciacion_activo` (
  `id_depreciacion_activo` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_cuentacontable` int(10) NOT NULL,
  `año_mes` date NOT NULL,
  `depreciacion_acumulada` float NOT NULL,
  PRIMARY KEY (`id_depreciacion_activo`),
  KEY `id_activofijo_idx` (`id_activofijo`),
  KEY `id_cuentacontable_idx` (`id_cuentacontable`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cat_depreciacion_activo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_empleado`
--

CREATE TABLE IF NOT EXISTS `cat_empleado` (
  `id_empleado` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_sucursal` int(10) NOT NULL,
  `nombre_empleado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `direccion_empleado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefono_empleado` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `email_empleado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcar la base de datos para la tabla `cat_empleado`
--

INSERT INTO `cat_empleado` (`id_empleado`, `id_sucursal`, `nombre_empleado`, `direccion_empleado`, `telefono_empleado`, `email_empleado`) VALUES
('E01', 1, 'Patricia E. Quintanilla', 'colonia Flores/Usulutan', '7409-2342', 'patriciaquintanilla@hotmail.com'),
('E02', 1, 'Maria E. Nolazco', 'Canton  Santa Barbara', '7434-3433', 'mari.nolasco@gmail.com'),
('E03', 1, 'Pedro A. Hernandez', 'Usulutan', '7634-5553', 'antonio.hernandez@hotmail.com'),
('E04', 2, 'Ramiro F. Pineda', 'Colonia El Tercio', '7390-2322', 'pinedaramiro@gmail.com'),
('E05', 2, 'Juana F. Robles', 'San Miguel', '7538-3434', 'franciscarobles@gmail.com'),
('E06', 2, 'Maria M. Rodriguez', 'rodriguezmaria@hotmail.com', '7489-3432', 'maria98@hotmail.com'),
('E07', 3, 'Mario E.Rivas', 'Usulutan', '7844-3433', 'ernesto@hotmail.com'),
('E08', 3, 'Ronys J. Avalos', 'Usulutan', '7823-2322', 'j.avalos@gimail.com'),
('E10', 4, 'Maria Alejandra Lopez', 'San Miguel', '2662-3443', 'aleja.92@hotmail.com'),
('E11', 4, 'Eliza Maria Soriano', 'San Miguel', '2662-3423', 'mariely@gmail.com'),
('E13', 5, 'Estefany Arely Pineda', 'La Paz', '2664-2321', 'arepineda@gmail.com'),
('E14', 5, 'Alonzo Eugenio Chicas', 'La paz', '2662-2323', 'eugeniochicas@hotmail.com'),
('E15', 6, 'Ana Berta Solano', 'La Union', '7623-2322', 'solanoberta@gmail.com'),
('E16', 6, 'Isabel del Carmen Bran Flores', 'La Union', '7894-3432', 'isabelbran@hotmail.com'),
('E17', 6, 'Maria Candida Bermuedez', 'La Union ', '7793-2342', 'candybermudez@hotmail.com'),
('E18', 7, 'Alejandro Diaz', 'Usulutan', '7399-2332', 'alediaz@gmail.com'),
('E19', 7, 'Patricia Bermudez', 'Usulutan', '7243-2313', 'patricia91@hotmail.com'),
('E20', 8, 'Kirian Josselyn Quintanilla', 'Usulutan', '7912-1231', 'josselynquintanilla@live.com'),
('E21', 8, 'Cecilia Maravilla Quintanilla', 'Usulutan', '7823-2322', 'cecymaravilla@hotmail.com'),
('E22', 8, 'Manuel Eduardo Guzman', 'Usulutan', '7230-1231', 'eduarguzman@gmail.com'),
('E23', 9, 'Orlando Quintanilla Campos', 'Usulutan', '7633-3443', 'camposorlando@gmail.com'),
('E24', 9, 'Alliza Yassely Quintanilla', 'Usulutan', '7890-0098', 'alizaquin@hotmail.com'),
('E25', 10, 'Antonio de Jesus Fuentes', 'San Miguel', '7866-4544', 'jesusfuentes@hotmail.com'),
('E26', 10, 'Jorge Ernesto Romero ', 'San Miguel', '7765-5655', 'jeraromero@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_mov_interno`
--

CREATE TABLE IF NOT EXISTS `cat_mov_interno` (
  `id_mov_interno` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_empleado` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_mov` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `motivo_mov` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `area_receptor` int(6) NOT NULL,
  `area_emisor` int(6) NOT NULL,
  PRIMARY KEY (`id_mov_interno`),
  KEY `id_activofijo_idx` (`id_activofijo`),
  KEY `id_empleado_idx` (`id_empleado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cat_mov_interno`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_proveedor`
--

CREATE TABLE IF NOT EXISTS `cat_proveedor` (
  `id_proveedor` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_provee` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `direccion_provee` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefono_provee` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `email_provee` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nrc` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `nit` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `cat_proveedor`
--

INSERT INTO `cat_proveedor` (`id_proveedor`, `nombre_provee`, `direccion_provee`, `telefono_provee`, `email_provee`, `nrc`, `nit`) VALUES
(1, 'cesar', 'kjalksdjk', '4524121', 'cesar@gmail.com', 'asdfsaf', '12121'),
(2, 'Los Cedros', 'sexta calle poniente colonia san pedro Usulut', '266-1221', 'loscedros.sa.dcv@hotmail.com', '34355', '1232-123242-123-4'),
(3, 'Panasonic', 'san salvador', '2662-2323', 'panasonic.cor@hotmail.com', '45646', '1232-233221-342-1'),
(4, 'Industrias Mabe', 'san salvador', '2662-4544', 'industriasmabe@gmail.com', '2323', '1233-121331-122-1'),
(5, 'Atlas', 'san salvador', '2662-4433', 'provatlas@hotmail.com', '2323', '1233-342233-442-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_sucursal`
--

CREATE TABLE IF NOT EXISTS `cat_sucursal` (
  `id_sucursal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_sucursal` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefono_sucursal` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `direccion_sucursal` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `departamento` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_sucursal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `cat_sucursal`
--

INSERT INTO `cat_sucursal` (`id_sucursal`, `nombre_sucursal`, `telefono_sucursal`, `direccion_sucursal`, `departamento`) VALUES
(1, 'Comercial Perez', '2662-3064', 'sexta calle oriente col.santa rosa Usulutan', 'Usulutan'),
(2, 'Comercial Rony', '2662-5530', 'octava avenida norte al sur de tienda galo ', 'San Miguel'),
(3, 'Tienda Diaz', '2662-7845', 'Quinta avenida norte frente a peluquería el C', 'Usulutan'),
(4, 'comercial Ivette', '2662-8875', 'colonia los Naranjos ', 'San miguel'),
(5, 'Comercial Hernandez', '2662-9984', 'Colonia Esperanza ', 'La Paz'),
(6, 'Tienda Funes', '2662-9087', 'sexta calle poniente frente a farmacia la Fe', 'La Union'),
(7, 'comercial Gonzalez', '2662-2232', 'frente a Radio YSJY', 'Usulutan'),
(8, 'Tienda Robert', '2624-3423', 'Camino al Centro de Gobierno ', 'Usulutan'),
(9, 'Comercial Camila ', '2624-0099', 'contiguo al Centro Comercial Puerta de Orient', 'Usulutan'),
(10, 'Comercial Dany', '2624-0876', 'Frente A Joyería Evelyn ', 'San Miguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_trasladoaf`
--

CREATE TABLE IF NOT EXISTS `cat_trasladoaf` (
  `id_traslado_activo` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `motivo_traslado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `fecha_traslado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `solicitud_traslado` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `emisor_traslado` int(10) NOT NULL,
  `receptor_traslado` int(10) NOT NULL,
  PRIMARY KEY (`id_traslado_activo`),
  KEY `id_activofijo_idx` (`id_activofijo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cat_trasladoaf`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gu_menu`
--

CREATE TABLE IF NOT EXISTS `gu_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `icono` varchar(350) COLLATE latin1_general_ci DEFAULT NULL,
  `movil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `gu_menu`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gu_opcion`
--

CREATE TABLE IF NOT EXISTS `gu_opcion` (
  `id_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `opcion` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_opcion`),
  KEY `jd_menu_idx` (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `gu_opcion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gu_rol`
--

CREATE TABLE IF NOT EXISTS `gu_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `gu_rol`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gu_rol_menu`
--

CREATE TABLE IF NOT EXISTS `gu_rol_menu` (
  `id_rol` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  PRIMARY KEY (`id_rol`,`id_opcion`),
  UNIQUE KEY `id_rol` (`id_rol`),
  KEY `fk_gu_rol_menu_gu_opcion1` (`id_opcion`),
  KEY `fk_gu_rol_menu_gu_rol1` (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcar la base de datos para la tabla `gu_rol_menu`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id_settings` int(10) NOT NULL,
  `descripcion` text COLLATE latin1_general_ci,
  `valor` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `simbolo` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `comentario` text COLLATE latin1_general_ci NOT NULL,
  `activo` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_settings`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcar la base de datos para la tabla `settings`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombre_usuario` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `clave` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `nombre_completo` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `fecha_creacion` time NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol_idx` (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `nombre_usuario`, `clave`, `nombre_completo`, `fecha_creacion`) VALUES
(1, 2, '@marioabmi', 'eb5a790b34e06e2ce3346fa2ca5d6abb', 'Mario Nelsonm Rivas Gonzalez', '00:00:00'),
(2, 2, '@praticia', 'e10adc3949ba59abbe56e057f20f883e', 'Patricia', '00:00:00'),
(3, 2, '@rony', 'e10adc3949ba59abbe56e057f20f883e', 'Rony', '00:00:00');
