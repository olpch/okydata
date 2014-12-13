

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE okydata1;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla users
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS 'users' (
  'id' bigint(20) NOT NULL AUTO_INCREMENT,
  'ud' varchar(20) NOT NULL,
  'created' datetime NOT NULL,
  'first_name' varchar(60) NOT NULL,
  'last_name' varchar(60) NOT NULL,
  'email' varchar(200) NOT NULL,
  'opsw'  varchar(50) NOT NULL,
  'level' tinyint(4) NOT NULL DEFAULT '0',
  'state' tinyint(4) NOT NULL DEFAULT '1',
  'last_login' datetime NOT NULL,
  'sesion' datetime NOT NULL,
  'token' varchar(50) NOT NULL,
  'note' text NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

ALTER TABLE 'users' ADD INDEX ('email');
ALTER TABLE 'users' ADD INDEX ('uid');

-- --------------------------------------------------------
-- Estructura de tabla para la tabla users
-- --------------------------------------------------------

