DROP DATABASE IF EXISTS `login`;
CREATE DATABASE IF NOT EXISTS `login`;
USE `login`;
DROP TABLE IF EXISTS `Login`;
CREATE TABLE `Login`.`Credentials` (
`UserID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`Username` VARCHAR( 64 ) NOT NULL ,
`Password` VARCHAR( 64 ) NOT NULL
) ENGINE = MYISAM;

INSERT INTO `Login`.`Credentials` (
`UserID` ,
`Username` ,
`Password`
)
VALUES (
NULL , 'testuser', 'funwebdev'
);
