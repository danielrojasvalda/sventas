-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2017 at 02:08 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.1.5-1+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbSysventas`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NombreCliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoCliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NitCi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DirCliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelCliente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `created_at`, `updated_at`, `NombreCliente`, `TipoCliente`, `NitCi`, `DirCliente`, `TelCliente`) VALUES
(1, '2017-06-12 17:04:27', '2017-07-23 06:30:51', 'MATEO BENITEZ JUAN	', 'Juridico', '68370', 'CALLE AGUSTIN LARA NO. 69-B	', '91-(287)-5-27-81'),
(2, '2017-06-13 19:54:35', '2017-07-23 06:30:54', 'JOSEFINA ENRIQUEZ PEÑA', 'Juridico', '68300', 'AV. INDEPENDENCIA NO. 241', '91-(287 )- 5-00-17'),
(3, '2017-06-23 23:03:26', '2017-07-23 06:30:57', 'AGUSTINA CARRERA NEGRETE	', 'Juridico', '68301', 'AV. INDEPENDENCIA NO. 779	', '91-(287)- 5-42-73 - '),
(4, '2017-06-23 23:04:25', '2017-07-23 06:30:59', '"CIMENTA" SRL.', 'Juridico', '2353288015', 'AV. 20 DE NOVIEMBRE NO.1024	', '91-(287 )-5-14-17'),
(5, '2017-06-23 23:05:03', '2017-07-23 06:31:01', 'VICTORIA EUGENIA CUEVAS JIMENEZ	', 'Juridico', '312312', 'CARRETERA A LOMA ALTA S/N.	', '91-(287)-5-39-32'),
(6, '2017-06-23 23:05:25', '2017-07-23 06:31:04', 'QUIMICA A.B.C..S.A DE C.V.	', 'Juridico', '767576', 'AV. 20 DE NOVIEMBRE NO. 1060	', '91-(287 )- 53188 - 5'),
(7, '2017-06-23 23:05:50', '2017-07-23 06:31:06', 'FERRETERIA LA OAXAQUEÑA SDE.R.L. DE C.V.	', 'Juridico', '44323', 'CALLE MATAMOROS NO. 127	', '91-(287)-50605'),
(8, '2017-07-23 00:09:14', '2017-07-23 06:31:08', 'Victoria Laura Ticona', 'Juridico', '2286486', 'Calle 8 Nro. 16 Z. Kupini', '71574078'),
(9, '2017-07-23 00:12:08', '2017-07-23 06:15:15', 'German Tito Herrera', 'Juridico', '2353288015', 'Calle Gabriel Rene Moreno Nro. 16 Zona Kupini', '70548455'),
(10, '2017-07-23 18:49:25', '2017-07-23 18:49:25', 'Juan Jose Benavidez', 'JURIDICO', '5974531', 'CAlle 8 Nro. 76 Zona Pampahasi', '67409888');

-- --------------------------------------------------------

--
-- Table structure for table `formapago`
--

CREATE TABLE `formapago` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FormaPago` varchar(255) NOT NULL,
  `Observacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formapago`
--

INSERT INTO `formapago` (`id`, `created_at`, `updated_at`, `FormaPago`, `Observacion`) VALUES
(4, '2017-07-01 01:06:06', '2017-07-04 19:26:03', 'PUBLICO GRAL. PP-2', 'Plan de Pago a 2 pagos'),
(5, '2017-07-04 19:26:18', '2017-07-04 19:26:18', 'PUBLICO GRAL. PP-3', 'Plan de Pago a 3 pagos'),
(6, '2017-07-04 19:26:42', '2017-07-04 19:26:42', 'PUBLICO GRAL. PP-4', 'Plan de Pago a 4 pagos');

-- --------------------------------------------------------

--
-- Table structure for table `kardex`
--

CREATE TABLE `kardex` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `KFecha` date NOT NULL,
  `KUsuario` int(10) NOT NULL,
  `KSucursal` int(10) NOT NULL,
  `KMovimiento` int(10) NOT NULL,
  `KReferencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KProducto` int(11) NOT NULL,
  `KCantidad` int(10) NOT NULL,
  `KSerie` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kardex`
--

INSERT INTO `kardex` (`id`, `created_at`, `updated_at`, `KFecha`, `KUsuario`, `KSucursal`, `KMovimiento`, `KReferencia`, `KProducto`, `KCantidad`, `KSerie`) VALUES
(1, '2017-07-24 20:02:57', '2017-07-24 20:02:57', '2017-07-24', 14, 6, 2, 'F001', 3, 100, NULL),
(2, '2017-07-24 20:03:23', '2017-07-24 20:03:23', '2017-07-24', 14, 6, 2, 'F002', 2, 50, NULL),
(3, '2017-07-24 20:05:55', '2017-07-24 20:05:55', '2017-07-24', 14, 1, 3, 'F003', 3, 50, NULL),
(4, '2017-07-24 20:06:20', '2017-07-24 20:06:20', '2017-07-24', 14, 1, 3, 'F004', 2, 25, NULL),
(5, '2017-07-25 02:36:53', '2017-07-25 02:36:53', '2017-07-24', 14, 6, 2, 'F009', 5, 1000, NULL),
(6, '2017-07-25 03:14:56', '2017-07-25 03:14:56', '2017-07-24', 14, 1, 3, 'jjj', 3, 11, NULL),
(7, '2017-07-25 09:08:06', '2017-07-25 09:08:06', '2017-07-25', 14, 6, 2, 'jjjj', 13, 10, NULL),
(8, '2017-07-25 09:10:41', '2017-07-25 09:10:41', '2017-07-25', 14, 6, 2, 'po', 13, 10, NULL),
(9, '2017-07-25 09:13:39', '2017-07-25 09:13:39', '2017-07-25', 14, 6, 2, 'n', 12, 5, NULL),
(10, '2017-07-25 20:23:54', '2017-07-25 20:23:54', '2017-07-25', 14, 6, 2, 'FF90', 3, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73, '2017_04_19_142657_create_producto_table', 1),
(74, '2017_04_19_143102_create_movimiento_table', 1),
(75, '2017_04_19_143114_create_cliente_table', 1),
(76, '2017_04_19_143124_create_sucursal_table', 1),
(77, '2017_04_19_143134_create_usuario_table', 1),
(78, '2017_04_19_143146_create_kardex_table', 1),
(79, '2017_04_19_145911_add_campos_to_producto_table', 1),
(80, '2017_04_19_153557_add_campos_to_sucursal_table', 1),
(81, '2017_04_19_160246_add_campos_to_movimiento_table', 1),
(82, '2017_04_19_161535_add_campos_to_usuario_table', 1),
(83, '2017_04_19_191816_add_campos_to_kardex_table', 1),
(84, '2017_04_20_133344_add_campos2_to_usuario', 1),
(85, '2017_04_20_161053_create_users_table', 2),
(86, '2017_04_20_161204_add_campos_to_users_table', 3),
(87, '2017_04_20_161609_add_campos2_to_users_table', 4),
(88, '2017_04_20_161952_add_campos3_to_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `movimiento`
--

CREATE TABLE `movimiento` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `RazonMovimiento` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ObsMovimiento` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movimiento`
--

INSERT INTO `movimiento` (`id`, `created_at`, `updated_at`, `RazonMovimiento`, `ObsMovimiento`) VALUES
(1, '2017-06-28 18:48:37', '2017-06-28 20:11:07', 'REINGRESO POR GARANTIA', 'INGRESO'),
(2, '2017-06-28 18:50:01', '2017-06-28 20:11:10', 'REABASTECIMIENTO PLANTA', 'INGRESO'),
(3, '2017-06-28 18:56:45', '2017-06-28 20:09:43', 'REABASTECIMIENTO SUCURSALES', 'SALIDA'),
(4, '2017-06-28 20:13:56', '2017-06-28 20:13:56', 'VENTAS MENORES', 'SALIDA'),
(5, '2017-06-28 20:14:11', '2017-06-28 20:14:11', 'VENTAS MAYORES', 'SALIDA'),
(6, '2017-06-28 20:14:29', '2017-06-28 20:14:29', 'PROMOCIONES COMERCIALES', 'SALIDA'),
(7, '2017-06-28 20:14:53', '2017-07-04 17:40:26', 'MUESTRAS PROMOCIONALES', 'SALIDA'),
(8, '2017-06-28 20:15:51', '2017-07-04 17:40:30', 'PRESTAMOS A INSTITUCIONES', 'SALIDA');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ItemProducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrecioProducto` double(8,2) NOT NULL,
  `CostoprodProducto` double(8,2) DEFAULT NULL,
  `StockidealProducto` int(10) DEFAULT NULL,
  `StockminimoProducto` int(10) DEFAULT NULL,
  `ObsProducto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModeloProducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `created_at`, `updated_at`, `ItemProducto`, `PrecioProducto`, `CostoprodProducto`, `StockidealProducto`, `StockminimoProducto`, `ObsProducto`, `ModeloProducto`) VALUES
(2, '2017-05-30 22:11:53', '2017-07-18 21:40:04', 'CELULAR LTE - TINKU', 1114.00, 0.00, 100, 80, 'Celular Lte TinkuCamara 16 mbpxMemoria Ram 2 Mb', 'GENERAL'),
(3, '2017-05-30 22:12:48', '2017-07-18 21:40:09', 'CELULAR 3G - HEKA', 1079.00, 0.00, 100, 80, 'Celular Heka 3GCamara 8 MbpxMemoria RAM 2 Mb', 'GENERAL'),
(4, '2017-05-30 22:14:55', '2017-07-18 21:40:16', 'CLASSMATE KUAA 2014', 3132.00, 0.00, 60, 50, 'Computadora KUAA 2014S.0. Windows 8 / Linux DebianDisco Duro 64 GB', 'GENERAL'),
(5, '2017-05-30 22:16:19', '2017-07-18 21:40:22', 'NOTEBOOK SIWI i5', 4275.00, 0.00, 45, 30, 'Computadora SIWI - IS.O. Windows / GNU Quipus', 'GENERAL'),
(10, '2017-06-23 23:09:47', '2017-06-23 23:09:47', 'CLASSMATE KUAA - CARCASA BASE', 159.00, 0.00, 100, 80, 'CARCASA PARA LA CLASSMATE KUAA 2014 - 2015 - 2016', 'PIEZAS Y PARTES'),
(11, '2017-06-23 23:10:32', '2017-06-23 23:10:38', 'CLASSMATE KUAA - TARJETA MADRE', 661.00, 0.00, 80, 661, '100', 'PIEZAS Y PARTES'),
(12, '2017-06-23 23:11:27', '2017-06-23 23:11:27', 'CLASSMATE KUAA - PANTALLA LCD', 1271.00, 0.00, 120, 89, 'PANTALLA LCD DE LA KUAA', 'PIEZAS Y PARTES'),
(13, '2017-06-23 23:13:04', '2017-06-23 23:13:04', 'CLASSMATE KUAA - TECLADO', 96.00, 0.00, 85, 70, 'TECLADO DE LA KUAA', 'PIEZAS Y PARTES'),
(14, '2017-07-19 19:32:21', '2017-07-19 19:32:21', 'TESTING', 90.00, 0.00, 120, 90, 'Ninguna', 'GENERAL'),
(15, '2017-07-19 19:46:25', '2017-07-19 19:46:25', 'TESTING_HORARIA', 90.00, 0.00, 120, 90, 'Nnguna', 'PIEZAS Y PARTES'),
(16, '2017-07-23 20:40:34', '2017-07-23 20:40:34', 'PRUEBA_DECIMALES', 23.00, 0.00, 120, 90, 'Ninguna', 'PIEZAS Y PARTES'),
(17, '2017-07-23 20:40:59', '2017-07-23 20:40:59', 'KUAAAAAAADECIMAL', 23.90, 0.00, 12, 12, 'asda', 'PIEZAS Y PARTES'),
(18, '2017-07-26 01:03:57', '2017-07-26 01:03:57', '', 0.00, NULL, 0, 0, '', ''),
(19, '2017-07-26 01:32:26', '2017-07-26 01:32:26', 'KUAA 2017', 12.34, NULL, 0, 0, '', ''),
(20, '2017-07-26 01:34:07', '2017-07-26 01:34:07', 'TEST 001', 12.00, NULL, 0, 0, '', ''),
(21, '2017-07-26 01:38:14', '2017-07-26 01:38:14', 'KUAA 2018', 78.00, NULL, 2, 1, 'Ninguna', ''),
(22, '2017-07-26 02:52:10', '2017-07-26 02:52:10', '12312', 12.33, NULL, 0, 0, '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `promocion`
--

CREATE TABLE `promocion` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NombreProm` varchar(255) NOT NULL,
  `ProductoProm` int(10) NOT NULL,
  `PrecioProm` double(10,2) NOT NULL,
  `FechainicioProm` date NOT NULL,
  `FechafinProm` date NOT NULL,
  `SucursalProm` int(10) NOT NULL,
  `RaProm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promocion`
--

INSERT INTO `promocion` (`id`, `created_at`, `updated_at`, `NombreProm`, `ProductoProm`, `PrecioProm`, `FechainicioProm`, `FechafinProm`, `SucursalProm`, `RaProm`) VALUES
(1, '2017-07-20 19:51:20', '2017-07-20 19:51:20', 'DIA DEL MAR', 4, 2080.00, '0000-00-00', '0000-00-00', 1, 'FORM-LOG-09'),
(2, '2017-07-20 19:52:14', '2017-07-20 19:52:14', 'DIA DEL ESTUDIANTE', 2, 9000.00, '0000-00-00', '0000-00-00', 5, '0090'),
(3, '2017-07-20 20:10:31', '2017-07-20 20:10:31', 'TESTING1', 4, 20091.00, '0000-00-00', '0000-00-00', 1, '123'),
(4, '2017-07-20 20:12:15', '2017-07-20 20:12:15', 'NNN', 10, 10091.00, '0000-00-00', '0000-00-00', 3, 'LLO'),
(5, '2017-07-20 20:18:29', '2017-07-20 20:18:29', 'fff', 3, 123123.00, '0000-00-00', '0000-00-00', 4, '12312'),
(6, '2017-07-20 20:19:47', '2017-07-20 20:19:47', 'DIDIDIDI', 2, 12312.00, '2017-07-13', '2017-07-29', 4, 'GGA'),
(8, '2017-07-24 00:11:34', '2017-07-24 00:11:34', 'DIA DEL TESTING 2', 3, 800.00, '2017-07-01', '2017-07-31', 1, 'FORM002'),
(9, '2017-07-24 02:05:26', '2017-07-24 02:05:26', 'DIA DEL TESTING 3', 2, 900.80, '2017-07-02', '2017-07-23', 1, 'FFF');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `SProducto` varchar(255) NOT NULL,
  `SSucursal` int(10) NOT NULL,
  `SMovimiento` int(10) NOT NULL,
  `SDescripcion` varchar(255) NOT NULL,
  `SPrecio` float NOT NULL,
  `SStock` int(10) NOT NULL,
  `SStockmin` int(10) NOT NULL,
  `SStockideal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(10) UNSIGNED NOT NULL,
  `NroSucursal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DptoSucursal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CiudadSucursal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DirSucursal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelSucursal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sucursal`
--

INSERT INTO `sucursal` (`id`, `NroSucursal`, `created_at`, `updated_at`, `DptoSucursal`, `CiudadSucursal`, `DirSucursal`, `TelSucursal`) VALUES
(1, 'LPZ-1', '2017-05-31 20:31:38', '2017-06-12 18:21:57', 'La Paz', 'La Paz', 'Av. 6 de Agosto Edif. Las Dos Torres Nro. 2577 Piso 8', '2125254'),
(2, 'LPZ-2', '2017-05-31 22:25:52', '2017-06-12 18:22:04', 'La Paz', 'La Paz', 'Calle Pedro de la Gasca Nro. 635, Galeria Villaverde, Gran Poder', '2128270'),
(3, 'ORU-1', '2017-06-06 22:05:35', '2017-06-12 18:22:32', 'Oruro', 'Oruro', 'Calle 6 de Octubre Nro. 6243 entre Sucre y Murguia', '800107787'),
(4, 'SCZ-1', '2017-06-06 22:13:25', '2017-06-12 18:22:26', 'Santa Cruz', 'Santa Cruz de la Sierra', '3er. anillo interno Comercial Neval, Segunda planta pasillo 6 local 18 Ref. Al lado del comercial Chiriguano', '800107787'),
(5, 'TJA-1', '2017-06-14 18:59:24', '2017-06-14 18:59:24', 'Tarija', 'Tarija', 'Hotel Segovia, Calle Colon Nro. 766 Barrio las Panosas, entre calle Ingavi y Bolívar', '800107787'),
(6, 'ALMACEN', '2017-06-15 22:54:07', '2017-07-03 21:52:01', 'La Paz', 'La Paz', 'Av. 6 de Agosto Edif. Las Dos Torres Nro. 2577 Piso 8 - ALMACEN LOGISTICA', '800107787');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CargoUsuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CiUsuario` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CelUsuario` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdSucursal` int(10) UNSIGNED NOT NULL,
  `AccesoUsuario` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `password`, `CargoUsuario`, `CiUsuario`, `CelUsuario`, `email`, `IdSucursal`, `AccesoUsuario`, `remember_token`) VALUES
(12, '2017-06-06 22:07:38', '2017-07-26 17:09:44', 'Administrador', '$2y$10$8m/j9w0JVZvGomq8JzPCtuAX8YKS6FneIXCL6zzwf0BYdzPq.ZTsC', 'Cargo Administrador', '0000000', 0, 'admin.admin@quipus.gob.bo', 1, 1, 'VgAh37bb9pUPbInLBezLSgCbW6lknyYAT5WQICgYDEBYT0l4zgTo3NJnAqhA'),
(13, '2017-06-13 07:48:20', '2017-07-31 22:07:47', 'Gerente - Responsable - Jefe', '$2y$10$eU9FjkLWLaBwgt//wNbwpuqn.nLO8tFXd4CVH.RTu.QZepCrmQpi2', 'Cargo Gerente Responsable Jefe', '0000000', 0, 'gerente.gerente@quipus.gob.bo', 1, 2, 'eIkNA97JWL91tHZJ5NlTVL7i78f8XWP25QzZdNIk9hCTRVDEKHNvob0KBhAb'),
(14, '2017-06-13 08:02:34', '2017-07-31 03:37:54', 'Logistica - Almacenes', '$2y$10$nx3mR4JLzBgPQx8bLSA16O0JKVagzDgplZP/eQrRAkLA18DCQHA1a', 'Cargo Logistica Almaneces', '0000000', 0, 'logistica.logistica@quipus.gob.bo', 6, 3, 'eVrzdEmnrYVpLWBrZdmLvKXLC2JOukR4U8E1MiK08pXe52z5HBEin2zU4Qi8'),
(15, '2017-06-13 08:10:18', '2017-07-31 03:38:15', 'Ejecutivo de Venta', '$2y$10$tKdbUX3ZvniRzV4k9TCCROMQLN6B3Loio7UbrZo0QvTft.ETEZCJq', 'Cargo Ejecutivos de Venta', '0000000', 0, 'ejecutivo.ejecutivo@quipus.gob.bo', 1, 4, 'Fud6WnZXI2Mm4m7XNsH7HU4gicBMNDhYaSnblDLZPC6htb4yu0r9rn6vMBmK'),
(19, '2017-07-18 01:10:48', '2017-07-18 03:56:33', 'a1', '$2y$10$ReAq3ilEJ/uZXmh14bX.jeBG4WN1ayks1AIK9//IWNNlbiuuni29i', 'kdasl', '12312', 12321, 'a1@quipus.gob.bo', 1, 4, 'bNAqVSXgLDkNq7XsZBMGmPqKPyYIX5UowmTBT6MN0pRH8hcYQPa5X5PHENUE'),
(20, '2017-07-18 03:58:34', '2017-07-18 04:17:32', 'prueba', '$2y$10$2siR/y4guRAJU84qYLNSfuONS1Dae0Xe77xe8g2mzsfjzx3RDoxyW', 'prueba cargo', '182837129', 1231231, 'prueba@quipus.gob.bo', 6, 4, 'WOVq7rwqsCgydF1IRdNMTqPwruIPn0P2AxIOaxWONeOyCujwHuswmdqGXeOA'),
(21, '2017-07-18 17:09:16', '2017-07-19 06:48:21', 'Usuario Tarija', '$2y$10$6Ui76nCNRigHEPrQWMjuHetOZLEEDdsNxz2Uc6YDd/wsEPuYIhvDq', 'Cargo Tarija', 'C.I. Tarija', 0, 'usuario_tarija@quipus.gob.bo', 5, 4, 'WcOrTilw36IQXMW4cwH1PG496EOFD8xVTNuKo4PnMKF8g3508GKPbA2xm67P'),
(22, '2017-07-19 22:28:54', '2017-07-19 22:28:59', 'Daniel Verastegui Effel', '$2y$10$yaeZ0SqyWfxErzNnU00HIO29B4NhH.hGVyCpV8e1DnsHc.rhSic8.', 'Ejecutivo de Venta', '6726819', 79592086, 'danielv.eiffel@gmail.com', 1, 4, 'jlxvKT2J4vRO8mU3hO1eSAW8bHtS14Y0gf0DSqBT1igXPLcc0V4t24jvJqeI'),
(23, '2017-07-19 22:30:57', '2017-07-19 22:30:59', 'Mauricio Sahonero Landa', '$2y$10$vAyj.8p0PyPPkaCVp94pLu7xlyTqTi53.gXrOl8gAfYKBVrZru2ue', 'Ejecutivo de Venta', '4919706', 70159513, 'mauricio.sahonero@quipus.gob.bo', 1, 4, 'YaooL2RCC2QJatuzCXP3dZVS0xK8BokoyLhGewkUUMn0aW3Gp29rUS1iYSTT'),
(24, '2017-07-19 22:32:13', '2017-07-19 22:32:17', 'Andres Gonzales Beltran', '$2y$10$icKk6dohzoTsTCdG.YfHOeVfTPh3dNMtcqcCCuQJN3mYmnPRUppkW', 'Ejecutivo de Venta', '6948530', 72568627, 'andres.gonzales@quipus.gob.bo', 1, 4, 'CXHwP9YhgoAnBewGmII8riGlTcX7ltyfshmxTX5ozHWhkoJp7IySlWAanQEg'),
(25, '2017-07-19 22:32:48', '2017-07-19 22:43:53', 'Juan Mauricio Cuba Nuñez del Prado', '$2y$10$AOT3o4swzmJ6LXyF2nhK8O80eiB4KdKoxNDhfaQqFoO6M1QTxZohC', 'Encargado de Sucursal Regional L', '4508166', 71294619, 'juan.cuba@quipus.gob.bo', 1, 4, 'mG4QJYTZ60GwnxlHNe4tRFrJJ8cxuufgxunwY9jnfqAXQDplsLhUt6YY7osJ'),
(26, '2017-07-19 22:33:17', '2017-07-19 22:33:19', 'Natali Terceros Delgadillo', '$2y$10$KrijvjrPMvo0TSSE5j51AO1htxatYx1/G1i6HnBIQdkPcZ0nj7YYC', 'Encargada de Sucursal Regional S', '6369505', 73160378, 'natali.terceros@quipus.gob.bo', 1, 4, 'UHN01Nnf1NZ6ZntwItW1xzZ44Nsb1ZFkHoo2LRM7u7IcI6DGepTgGNoHRC5b'),
(27, '2017-07-19 22:33:47', '2017-07-19 22:33:51', 'Lilian Patricia Mejia Michel', '$2y$10$/xhnctNly12DzmeUqlgYB.W6/5pf3mvAT.fcqiv4mxQSDilQGmSDq', 'Encargada de Sucursal Regional O', '5283307', 68353698, 'lilian.mejia@quipus.gob.bo', 1, 4, 'OtmdKw1sy3r5ytfcZlDXllU2z5VmWTAna2rG6DQomuEpLS6k3j3c3ZtwHcpV'),
(28, '2017-07-19 22:35:00', '2017-07-20 01:00:29', 'Carla Maria Vargas Lopez', '$2y$10$TMytDGNnp1Uw60nHZfm0/./vBuXL5PaASNHfyjWWxVREeIT2Mwlby', 'Encargada de Sucursal Regional T', '5799543', 71863022, 'carla.vargas@quipus.gob.bo', 5, 4, 'TD0RLTXwXhGFc3eNjdSfFZEBhVjpHE8AsKRfSZ6S8OjknfNCJ2SWgUzGhqpx'),
(29, '2017-07-19 22:36:00', '2017-07-19 22:36:04', 'Gunar Huascar Zambrana Duran', '$2y$10$xebC7NAxHQOY7tCKfR6YKeHG3Q.nPkFMXfG3tNW13go8pQgjTXgfy', 'Analista de Base de Datos', '6847638', 65101422, 'gunar.zambrana@quipus.gob.bo', 1, 2, 'dhi3SlOfi1Ry7PMFRvl1FsWfVn1lkd0cNMzfRDCHjUDzW8YD65pMipSVTau2'),
(30, '2017-07-19 22:37:04', '2017-07-19 22:37:07', 'Mayra Calatayud Montoya', '$2y$10$YDnP7ZjQf/uzQSgLPRJr7.Ro8uBf1hwOZm4i27JyL/JaqiSrGnMJ.', 'Asistente de Gerencia General', '5993784', 77532857, 'mayra.calatayud@quipus.gob.bo', 1, 2, 'kXXxvlbi83uBeyX4Whn1H4aTmFIM23kr2aNQNCUtPrnH50KUjro137vft4DE'),
(31, '2017-07-19 22:38:03', '2017-07-19 22:38:04', 'Victor Hugo Sanabria Nava', '$2y$10$xyj0XSQtwF7PvAwkdSVr4OdKT9j37alasIAit/zLapD5IlNTDuvZ2', 'Jefe del Departamento Comercial', '3450635', 77794143, 'victor.sanabria@quipus.gob.bo', 1, 2, 'S1MlSaH1rfWF6SEhry7LoJbK4Zv8IUzd0uVO8ojGtKpipeK7tBviR0ZKGg7s'),
(32, '2017-07-19 22:38:35', '2017-07-19 22:38:37', 'Julia Claudia Ramos Suarez', '$2y$10$4cYwQGgZBlabD6cd./j0LOOx5dLZz5LeAJYFOIMgIQ8T1wqqrCvQy', 'Diseño y Procesamiento de Datos', '7008344', 71963874, 'julia.ramos@quipus.gob.bo', 1, 2, 'EvQwzfcOrFkDRa051hBKnBcHv9D83wqFci9baS9tGEYlBsxL7on140RjwSNm'),
(33, '2017-07-19 22:39:33', '2017-07-19 22:39:46', 'Pablo Andres Gonzales Camberos', '$2y$10$xISz3pOU6LFw3voiBaeTyORQBQ/nv7tqaoh9TsDqWnu/8gLljIprm', 'Responsable de Planificacion Log', '3384002', 70694073, 'pablo.gonzales@quipus.gob.bo', 1, 2, 'ofhBk5IdpvK3DeREzU7X6jaWg0m4PXq6cgh2YsRwixMAwfyv9ksmvQ0qAHXK'),
(34, '2017-07-19 22:40:22', '2017-07-19 22:40:25', 'Fernando Rafael Oliva Sandoval', '$2y$10$YhhEfnl6ZMCKQpv6XYFTJebNdMzIFC.vHt/RoPU5562eTLWFMSu0G', 'Responsable de Soporte Logistico', '4954255', 77718488, 'fernando.oliva@quipus.gob.bo', 1, 2, 'fTUNg841bZV2vEoZ8n0yVnfdUbg17gqxFmG0RJDLmoTucpFvTweG4PfgNrOx'),
(35, '2017-07-19 22:40:59', '2017-07-19 22:41:02', 'Carlos Eduardo Humérez Bocangel', '$2y$10$KTI3uJ8zHJs/nHJTSCxehuA.SzJHnYByx.bFIEpivmEX8/JB1odt.', 'Jefe del Departamento Logistico', '4760755', 78757720, 'carlos.humerez@quipus.gob.bo', 1, 2, 'IqxQoaXbDFm3E78569j84k3yDkaX6jG6CXcLhLQQnraNAXjbDAsuOVLm7ean'),
(36, '2017-07-19 22:41:46', '2017-07-19 22:41:49', 'Carol Ivania Vargas Vucsanovich', '$2y$10$uflDbODjaCR5yhfo4hPJKe27RfFPhRI7d/MSmj31ZjQkll4RYw0te', 'Gerente Comercial', '4302951', 72002512, 'ivania.vargas@quipus.gob.bo', 1, 2, 'ezgaUq0V40bAoZuSxmJytCwJjj3IAqwK7sw5c1ELdIxUs83rChQZCuJDBmtI'),
(37, '2017-07-19 22:42:13', '2017-07-19 22:43:15', 'Freddy Murillo Rojas', '$2y$10$waV6xJ5LBfZndif1MfMjdu8jdG7mjUDPLF5nHwarAI9V0anKTSXeO', 'Gerente General', '2445876', 72064953, 'freddy.murillo@quipus.gob.bo', 1, 2, 'B65DFWWzL5TpbLi8j7mqQNmRALdOoFz0OW5wwzirEJY9QDu6HkMov3VMwhWW'),
(38, '2017-07-28 22:56:37', '2017-07-28 23:13:21', 'Prueba Reporte', '$2y$10$H39OwLG5JYXeDUzp4Fv5EuqfA/BQ2zJwttuFYU0hqqWMONYoWCcmy', 'Ejecutivo de Ventas', '192836127', 123123, 'reporte.ejecutivo@quipus.gob.bo', 2, 4, 'Rea3E0OGuFcoLPfXtSQO1tnIP2U1Z1GDfgJ0sCisLmJdbxZYog65CjWpVy7E');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `VUsuario` int(10) NOT NULL,
  `VSucursal` int(10) NOT NULL,
  `FechaVenta` date NOT NULL,
  `NroFactura` varchar(32) NOT NULL,
  `VTipoventa` varchar(255) NOT NULL,
  `VFormapago` int(10) DEFAULT NULL,
  `VMediodepago` varchar(255) NOT NULL,
  `VProducto` int(10) NOT NULL,
  `VCantidad` int(10) NOT NULL,
  `VCliente` int(10) NOT NULL,
  `Importe` decimal(10,2) NOT NULL,
  `Obs` varchar(255) DEFAULT NULL,
  `VSerie` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id`, `created_at`, `updated_at`, `VUsuario`, `VSucursal`, `FechaVenta`, `NroFactura`, `VTipoventa`, `VFormapago`, `VMediodepago`, `VProducto`, `VCantidad`, `VCliente`, `Importe`, `Obs`, `VSerie`) VALUES
(1, '2017-07-24 20:09:21', '2017-07-24 20:09:21', 15, 1, '2017-07-24', '001', 'CREDITO', 6, 'CHEQUE', 3, 25, 1, '26975.00', 'Ninguna', NULL),
(2, '2017-07-24 20:10:28', '2017-07-24 20:10:28', 15, 1, '2017-07-24', '002', 'CONTADO', NULL, 'EFECTIVO', 2, 12, 6, '13368.00', '', NULL),
(3, '2017-07-24 23:34:35', '2017-07-24 23:34:35', 15, 1, '2017-07-24', '001', 'CONTADO', NULL, 'EFECTIVO', 3, 1, 1, '3025.00', '', NULL),
(4, '2017-07-25 03:13:54', '2017-07-25 03:13:54', 15, 1, '2017-07-24', '090', 'CONTADO', NULL, 'CHEQUE', 3, 20, 2, '21580.00', '', NULL),
(5, '2017-07-25 03:31:30', '2017-07-25 03:31:30', 15, 1, '2017-07-24', '998', 'CONTADO', NULL, 'CHEQUE', 3, 183, 1, '197457.00', '', NULL),
(6, '2017-07-28 22:58:08', '2017-07-28 22:58:08', 38, 2, '2017-07-28', '123', 'CREDITO', 5, 'CHEQUE', 0, 0, 3, '10790.00', '', ''),
(7, '2017-07-28 23:13:14', '2017-07-28 23:13:14', 38, 2, '2017-07-28', '456', 'CONTADO', NULL, 'DEPOSITO', 10, 23, 5, '3657.00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `click` int(11) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `created_at`, `updated_at`, `click`, `viewer`) VALUES
(7, NULL, NULL, 23, 3),
(8, NULL, NULL, 2, 3),
(9, NULL, NULL, 5, 5),
(10, NULL, NULL, 5, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_idsucursal_foreign` (`IdSucursal`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `formapago`
--
ALTER TABLE `formapago`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kardex`
--
ALTER TABLE `kardex`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
