-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2025 a las 04:41:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectocomidasrapidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carteraclientes`
--

CREATE TABLE `carteraclientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_factura` bigint(20) UNSIGNED NOT NULL,
  `abono` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carteraclientes`
--

INSERT INTO `carteraclientes` (`id`, `fecha`, `id_factura`, `abono`, `created_at`, `updated_at`) VALUES
(1, '2023-10-28', 1, 20000, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(2, '2024-04-10', 3, 10100, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(3, '2024-05-27', 4, 8350, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(4, '2023-05-21', 5, 11750, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(5, '2024-11-08', 8, 20050, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(6, '2023-06-07', 9, 750, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(7, '2024-12-24', 10, 32150, '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(8, '2025-03-24', 3, 10350, '2025-03-25 03:39:37', '2025-03-25 03:39:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carteracompras`
--

CREATE TABLE `carteracompras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_orden_compra` bigint(20) UNSIGNED NOT NULL,
  `abono` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `numero_telefono` varchar(255) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `correo`, `direccion`, `numero_telefono`, `fecha_nacimiento`, `registrado_por`, `estado_civil`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Elenor Block DVM', '06981309', 'marks.jonathan@example.org', '732 Kiara Lodge Suite 228\nWest Kevenland, TN 76641', '1-571-306-1983', '2021-07-23', '3', 'Casado', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(2, 'Emie Ullrich DVM', '89535003', 'abeatty@example.net', '809 Baumbach Lakes\nJacquesbury, UT 36870-9513', '719-237-3862', '1986-01-18', '1', 'Casado', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(3, 'Garfield Schaefer', '36092795', 'lwilliamson@example.net', '149 Lemke Spurs Apt. 408\nWinonabury, DE 24011', '(325) 254-0685', '2006-12-05', '1', 'Viudo', '2025-03-25 03:38:53', '2025-03-25 03:38:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_factura` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(8,0) NOT NULL,
  `subtotal` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleordencompra`
--

CREATE TABLE `detalleordencompra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_orden_compra` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(8,0) NOT NULL,
  `subtotal` decimal(8,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `monto_total` decimal(8,0) NOT NULL,
  `id_forma_pago` bigint(20) UNSIGNED NOT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `id_cliente`, `fecha`, `estado`, `monto_total`, `id_forma_pago`, `registrado_por`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-10-28', 'Pendiente', 63400, 1, '3', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(2, 1, '2024-02-19', 'Pagada', 42750, 2, '3', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(3, 1, '2024-04-10', 'Pagada', 20450, 3, '2', '2025-03-25 03:38:53', '2025-03-25 03:39:37'),
(4, 2, '2024-05-27', 'Pendiente', 47050, 4, '1', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(5, 2, '2023-05-21', 'Pendiente', 20300, 5, '1', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(6, 1, '2025-02-22', 'Pagada', 22050, 6, '3', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(7, 2, '2025-01-07', 'Pagada', 37650, 7, '1', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(8, 2, '2024-11-08', 'Pendiente', 67150, 8, '3', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(9, 3, '2023-06-07', 'Pendiente', 1300, 9, '1', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(10, 2, '2024-12-24', 'Pendiente', 77550, 10, '2', '2025-03-25 03:38:53', '2025-03-25 03:38:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspago`
--

CREATE TABLE `formaspago` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metodo_pago` varchar(255) NOT NULL,
  `detalles_pago` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formaspago`
--

INSERT INTO `formaspago` (`id`, `metodo_pago`, `detalles_pago`, `created_at`, `updated_at`) VALUES
(1, 'tarjeta_de_credito', '7OXTSFIDBI', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(2, 'efectivo', '4U4VP32TVX', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(3, 'tarjeta_de_credito', 'ADRELYP3B0', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(4, 'tarjeta_de_credito', '5YSFED0Z0R', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(5, 'tarjeta_de_credito', 'F94E9I8YC5', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(6, 'transferencia', 'CDZFUW76W5', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(7, 'efectivo', '1PHUXRPG9B', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(8, 'tarjeta_de_credito', 'U4M4M9ZJDL', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(9, 'efectivo', '5JKIWC4BIR', '2025-03-25 03:38:53', '2025-03-25 03:38:53'),
(10, 'tarjeta_de_credito', 'GZL3YLU64G', '2025-03-25 03:38:53', '2025-03-25 03:38:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_10_070310_create_clientes_table', 1),
(5, '2025_03_16_155806_create_formaspago_table', 1),
(6, '2025_03_16_155848_create_facturas_table', 1),
(7, '2025_03_16_160208_create_carteraclientes_table', 1),
(8, '2025_03_16_160534_create_categorias_table', 1),
(9, '2025_03_16_161016_create_productos_table', 1),
(10, '2025_03_16_162031_create_detallefactura_table', 1),
(11, '2025_03_16_162245_create_proveedores_table', 1),
(12, '2025_03_16_162524_create_ordencompras_table', 1),
(13, '2025_03_16_162727_create_detalleordencompra_table', 1),
(14, '2025_03_16_163446_create_carteracompras_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordencompras`
--

CREATE TABLE `ordencompras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_proveedor` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `monto_total` decimal(8,0) NOT NULL,
  `id_forma_pago` bigint(20) UNSIGNED NOT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio_compra` decimal(8,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_venta` decimal(8,0) NOT NULL,
  `stock_minimo` int(11) NOT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `registrado_por` varchar(255) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `numero_telefono` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Kaycee Gulgowski PhD', 'xrunolfsson@example.net', '2025-03-25 03:38:36', '$2y$12$15G3SJcnNw2ewO1oqpJOpeswq/.qFeQ6hGhcdHDDDAXnJH9P7XVwW', '8qVSLhi3DF', '2025-03-25 03:38:36', '2025-03-25 03:38:36'),
(2, 'Prof. Rocky Greenfelder', 'turcotte.sebastian@example.org', '2025-03-25 03:38:36', '$2y$12$15G3SJcnNw2ewO1oqpJOpeswq/.qFeQ6hGhcdHDDDAXnJH9P7XVwW', '2kIHnF8lrn', '2025-03-25 03:38:36', '2025-03-25 03:38:36'),
(3, 'Benny Dach', 'ora29@example.com', '2025-03-25 03:38:36', '$2y$12$15G3SJcnNw2ewO1oqpJOpeswq/.qFeQ6hGhcdHDDDAXnJH9P7XVwW', 'XhPt5ssQVz', '2025-03-25 03:38:36', '2025-03-25 03:38:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `carteraclientes`
--
ALTER TABLE `carteraclientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carteraclientes_id_factura_foreign` (`id_factura`);

--
-- Indices de la tabla `carteracompras`
--
ALTER TABLE `carteracompras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carteracompras_id_orden_compra_foreign` (`id_orden_compra`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detallefactura_id_factura_foreign` (`id_factura`),
  ADD KEY `detallefactura_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `detalleordencompra`
--
ALTER TABLE `detalleordencompra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalleordencompra_id_orden_compra_foreign` (`id_orden_compra`),
  ADD KEY `detalleordencompra_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facturas_id_cliente_foreign` (`id_cliente`),
  ADD KEY `facturas_id_forma_pago_foreign` (`id_forma_pago`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordencompras`
--
ALTER TABLE `ordencompras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordencompras_id_proveedor_foreign` (`id_proveedor`),
  ADD KEY `ordencompras_id_forma_pago_foreign` (`id_forma_pago`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carteraclientes`
--
ALTER TABLE `carteraclientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carteracompras`
--
ALTER TABLE `carteracompras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleordencompra`
--
ALTER TABLE `detalleordencompra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ordencompras`
--
ALTER TABLE `ordencompras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carteraclientes`
--
ALTER TABLE `carteraclientes`
  ADD CONSTRAINT `carteraclientes_id_factura_foreign` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id`);

--
-- Filtros para la tabla `carteracompras`
--
ALTER TABLE `carteracompras`
  ADD CONSTRAINT `carteracompras_id_orden_compra_foreign` FOREIGN KEY (`id_orden_compra`) REFERENCES `ordencompras` (`id`);

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_id_factura_foreign` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id`),
  ADD CONSTRAINT `detallefactura_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detalleordencompra`
--
ALTER TABLE `detalleordencompra`
  ADD CONSTRAINT `detalleordencompra_id_orden_compra_foreign` FOREIGN KEY (`id_orden_compra`) REFERENCES `ordencompras` (`id`),
  ADD CONSTRAINT `detalleordencompra_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `facturas_id_forma_pago_foreign` FOREIGN KEY (`id_forma_pago`) REFERENCES `formaspago` (`id`);

--
-- Filtros para la tabla `ordencompras`
--
ALTER TABLE `ordencompras`
  ADD CONSTRAINT `ordencompras_id_forma_pago_foreign` FOREIGN KEY (`id_forma_pago`) REFERENCES `formaspago` (`id`),
  ADD CONSTRAINT `ordencompras_id_proveedor_foreign` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
