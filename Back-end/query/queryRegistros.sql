--> Busquedas de reguistros por Filtros 

--> Busquedas de reguistros general
SELECT * FROM RegistroCovid19.Registro_Vacunados;

--> Busquedas de reguistros por tipo de vacuna
SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE tipoVacuna LIKE 'Dos Dosis';

--> Busquedas de reguistros por id de usuario
SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE Usuarios_idUsuario LIKE '207460988';

--> Busquedas de reguistros por marca de vacuna
SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE marcaVacuna LIKE 'BioNTech-Pfizer';

--> Busquedas de reguistros por tipo de paciente
SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE tipoPaciente LIKE 'De Riesgo';

--> Busquedas de reguistros por intervalos de fechas
SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE fechaAplicacion >= '2011-12-01 00:00:00' AND fechaAplicacion <= '2011-12-06 00:00:00';

--> Ingresar un nuevo reguistro
INSERT INTO `RegistroCovid19`.`Registro_Vacunados` (`tipoVacuna`, `marcaVacuna`, `tipoPaciente`, `fechaAplicacion`, `Usuarios_idUsuario`) VALUES ('Una Dosis', 'Oxford-Astrazeneca', 'Sin Riesgo', '2021-05-15 13:14:00', '208670234');

--> Modificar la fecha del registro
UPDATE `RegistroCovid19`.`Registro_Vacunados` SET `fechaAplicacion` = '2021-05-15 13:18:00' WHERE (`idRegistro` = '3') and (`Usuarios_idUsuario` = '208670234');