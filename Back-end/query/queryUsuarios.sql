
--> Modificar tabla Usuario
ALTER TABLE `RegistroCovid19`.`Usuarios` 
CHANGE COLUMN `password` `contrasenia` VARCHAR(45) NOT NULL ;

--> Crear un nuevo usuario
INSERT INTO RegistroCovid19.Usuarios (`idUsuario`, `nombre`, `apellido1`, `apellido2`, `email`, `contrasenia`, `tipoUsuario`, `genero`, `telefono`, `edad`,`estadoUsuario` ) VALUES 
('208670234', 'Ruben ', 'Salas', 'Fernandez', 'Ruben@outlook.es', md5('12345'), 'Doctor', 'Masculino', '8888888', '42', 'Activo');


--> Buscar usuarios por filtro


--> Buscar usuarios por filtro
SELECT * FROM  RegistroCovid19.Usuarios WHERE idUsuario LIKE '207460988';

--> Buscar usuarios por estado de usuario
SELECT * FROM  RegistroCovid19.Usuarios WHERE estadoUsuario LIKE 'Activo';

--> Buscar usuarios por correo eletronico
SELECT * FROM  RegistroCovid19.Usuarios WHERE email LIKE 'oscaardanielqc@outlook.es';

--> Buscar usuarios por genero
SELECT * FROM  RegistroCovid19.Usuarios WHERE genero LIKE 'Femenino';

--> Buscar usuarios por tipo de usuario
SELECT * FROM  RegistroCovid19.Usuarios WHERE tipoUsuario LIKE 'Doctor';

--> Buscar usuarios menores de 65
SELECT * FROM  RegistroCovid19.Usuarios WHERE edad BETWEEN 0 AND 65;

--> Buscar usuarios mayores de 65
SELECT * FROM  RegistroCovid19.Usuarios WHERE edad BETWEEN 65 AND 100;

--> Activar o desactivar usuarios
UPDATE `RegistroCovid19`.`Usuarios` SET `estadoUsuario` = 'Inactivo' WHERE (`idUsuario` = '208670234');

--> Modificar datos de usuario
UPDATE `RegistroCovid19`.`Usuarios` SET `email` = 'Ruben@outlook.com', `tipoUsuario` = 'Paciente', `genero` = 'No especifica', `telefono` = '88907345', `edad` = '43' WHERE (`idUsuario` = '208670234');

SELECT COUNT(*) FROM RegistroCovid19.Usuarios WHERE genero = 'Femenino';
SELECT COUNT(*) FROM RegistroCovid19.Usuarios WHERE genero = 'Masculino';


SELECT COUNT(*) FROM RegistroCovid19.Usuarios GROUP BY productVendor HAVING COUNT(*) >= 9 ORDER BY COUNT(*) DESC;