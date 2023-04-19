use TFG_Grupo15;
DROP DATABASE TFG_Grupo15;
create database if not exists TFG_Grupo15;
use TFG_Grupo15;

create table usuario(
	id_usuario int auto_increment primary key,
    nombre varchar(255),
    pass varchar(255),
    email varchar(255),
    tipo_usuario tinyint); 

create table Medicamentos (
    ID int auto_increment primary key,
    Nombre_Medicamento varchar (255),
    Ingredientes varchar (255),
    Tipo_medicamento varchar (255),
    Dosis_recomendada varchar (255),
    EfectosSecundarios varchar (255),
    Contraindicaciones varchar (255),
    CodigodeBarras int

);

DELIMITER //
CREATE PROCEDURE insertar_numeros_aleatorios()
BEGIN
  DECLARE contador INT DEFAULT 0;
  DECLARE max_filas INT DEFAULT (SELECT COUNT(*) FROM Medicamentos);
  WHILE contador < max_filas DO
    UPDATE Medicamentos SET CodigodeBarras = FLOOR(RAND() * 99999999) WHERE id = contador+1;
    SET contador = contador + 1;
  END WHILE;
END //
DELIMITER ;

INSERT INTO usuario (nombre, email, pass) VALUES
('Juan Perez', 'juanperez@mail.com', '1234'),
('María García', 'mariagarcia@mail.com', '2345'),
('Pedro Rodríguez', 'pedrorodriguez@mail.com', '34562'),
('Laura Fernández', 'laurafernandez@mail.com', '4567'),
('Carlos López', 'carloslopez@mail.com', '5678'),
('Ana Martínez', 'anamartinez@mail.com', '6789'),
('Luisa Sánchez', 'luisasanchez@mail.com', '7890'),
('Javier García', 'javiergarcia@mail.com', '8901');

INSERT INTO Medicamentos (Nombre_Medicamento,Ingredientes, Tipo_medicamento,Dosis_recomendada,EfectosSecundarios, Contraindicaciones ) VALUES
('Amlodipina',	'Amlodipina',	'Bloqueador de los Canales de Calcio',	'5-10mg una vez al día',	'Dolor de cabeza, edema, fatiga'	,'Hipersensibilidad conocida a la amlodipina'),
('Gabapentina',	'Gabapentina',	'Anticonvulsivo y Analgésico',	'300-600mg tres veces al día',	'Mareo, somnolencia, fatiga',	'Hipersensibilidad conocida a la gabapentina'),
('Pregabalina',	'Pregabalina',	'Anticonvulsivo y Analgésico',	'75-300mg dos veces al día',	'Mareo, somnolencia, edema',	'Hipersensibilidad conocida a la pregabalina'),
('Fluoxetina',	'Fluoxetina',	'Antidepresivo',	'20-80mg una vez al día',	'Náuseas, insomnio, ansiedad',	'Hipersensibilidad conocida a la fluoxetina'),
('Sertralina'	,'Sertralina',	'Antidepresivo',	'50-200mg una vez al día'	,'Náuseas, diarrea, dolor de cabeza',	'Hipersensibilidad conocida a la sertralina'),
('Lorazepam'	,'Lorazepam',	'Benzodiazepina',	'0.5-2mg dos o tres veces al día',	'Somnolencia, mareo, confusión',	'Hipersensibilidad conocida al lorazepam'),
('Alprazolam',	'Alprazolam',	'Benzodiazepina',	'0.25-1mg dos o tres veces al día',	'Somnolencia, mareo, confusión',	'Hipersensibilidad conocida al alprazolam'),
('Diazepam',	'Diazepam',	'Benzodiazepina',	'2-10mg dos o tres veces al día',	'Somnolencia, mareo, confusión',	'Hipersensibilidad conocida al diazepam'),
('Levodopa/Carbidopa',	'Levodopa/Carbidopa'	,'Antiparkinsoniano',	'Dosificación variable',	'Náuseas, vómitos, discinesia',	'Glaucoma de ángulo cerrado'),
('Metoclopramida',	'Metoclopramida',	'Antiemético y Procinético',	'10mg tres o cuatro veces al día',	'Somnolencia, mareo, diarrea',	'Hipersensibilidad conocida a la metoclopramida'),
('Ciprofloxacina',	'Ciprofloxacina'	,'Antibiótico','250-500mg dos veces al día','Diarrea, náuseas, dolor abdominal'	,'Hipersensibilidad conocida a la ciprofloxacina'),
('Diclofenaco','Diclofenaco',	'Antiinflamatorio y Analgésico',	'50-100mg dos o tres veces al día',	'Dolor abdominal, náuseas, vómitos',	'Asma, úlceras gástricas'),
('Paracetamol', 'Paracetamol', 'Analgésico y Antipirético', '500-1000mg cada 4-6 horas', 'Náuseas, vómitos, dolor abdominal', 'Hipersensibilidad conocida al paracetamol'),
('Ibuprofeno', 'Ibuprofeno', 'Antiinflamatorio y Analgésico', '200-400mg cada 4-6 horas', 'Dolor abdominal, náuseas, vómitos', 'Asma, úlceras gástricas'),
('Aspirina', 'Ácido Acetilsalicílico', 'Analgésico y Antipirético', '325-650mg cada 4-6 horas', 'Sangrado gastrointestinal, úlceras', 'Alergia al ácido acetilsalicílico'),
('Amoxicilina', 'Amoxicilina', 'Antibiótico', '500-1000mg cada 8 horas', 'Diarrea, náuseas, erupciones cutáneas', 'Alergia a la penicilina'),
('Azitromicina', 'Azitromicina', 'Antibiótico', '500mg una vez al día durante 3 días', 'Diarrea, náuseas, vómitos', 'Alergia a la azitromicina'),
('Omeprazol', 'Omeprazol', 'Inhibidor de la Bomba de Protones', '20-40mg una vez al día', 'Diarrea, dolor abdominal, dolor de cabeza', 'Hipersensibilidad conocida al omeprazol'),
('Ranitidina', 'Ranitidina', 'Antagonista del Receptor H2', '150-300mg dos veces al día', 'Diarrea, náuseas, dolor abdominal', 'Hipersensibilidad conocida a la ranitidina'),
('Simvastatina', 'Simvastatina', 'Estatina', '10-40mg una vez al día', 'Dolor muscular, debilidad, náuseas', 'Embarazo, enfermedad hepática activa'),
('Losartán', 'Losartán', 'Antagonista del Receptor de Angiotensina II', '50mg una vez al día', 'Dolor de cabeza, mareo, fatiga', 'Hipersensibilidad conocida al losartán'),
('Metformina', 'Metformina', 'Biguanida', '500-1000mg dos veces al día', 'Diarrea, náuseas, dolor abdominal', 'Insuficiencia renal, embarazo'),
('Levotiroxina', 'Levotiroxina', 'Hormona Tiroidea', '25-300mcg una vez al día', 'Palpitaciones, sudoración, pérdida de peso', 'Hipersensibilidad conocida a la levotiroxina'),
('Metoprolol', 'Metoprolol', 'Bloqueador Beta', '25-100mg dos veces al día', 'Dolor de cabeza, mareo, fatiga', 'Insuficiencia cardíaca, asma');

CALL insertar_numeros_aleatorios();

use TFG_Grupo15;
select * from usuario;
select * from Medicamentos;