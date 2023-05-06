/*use TFG_Grupo15;
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
    CodigodeBarrasMed BIGINT

);

create table Parafarmacia (
    ID int auto_increment primary key,
    Nombre varchar (500),
    Funcion varchar (500),
    Dosis_recomendada varchar (500),
    EfectosSecundarios varchar (500),
    Contraindicaciones varchar (500),
    CodigodeBarrasPar BIGINT
);

create table Pacientes (
    ID int auto_increment primary key,
    Nombre varchar (500),
    DNI varchar (9),
    FechaNacimiento varchar (500)
);



CREATE TABLE Recetas (
    ID int auto_increment primary key,
    Nombre varchar(255),
    DNIPaciente Varchar(9),
	Nombre_Medicamento varchar (255),
	CodigodeBarrasMed BIGINT ,
    Dosis_recomendada varchar(255),
    CodigodeBarrasReceta BIGINT
);

INSERT INTO Pacientes (Nombre, DNI, FechaNacimiento) VALUES
('Ismael Gomez Garcia','36548792H','06/07/1988'),
('Lola Ortiz Lopez','72016322Z','10/03/1992'),
('Eduardo Mart inez Sanchez','27931650E','23/11/1977'),
('Andrea Sanchez Mart in','04761123S','18/09/1985'),
('Carlos Ruiz Perez','62493901F','01/04/2000'),
('Laura Gonzalez Romero','77846213N','07/05/1983'),
('Antonio Fernandez Garcia','51993607D','14/02/1995'),
('Maria Perez Sanchez','15376139X','29/08/1980'),
('Ana Torres Moreno','40820288M','22/06/1991'),
('Lucia Garcia Fernandez','86125435R','11/10/1982'),
('Jose Luis Ramos Ruiz','27664359Y','20/12/1986'),
('Sara Perez Sanchez','54713380B','15/03/1999'),
('Alberto Sanchez Garcia','69112609J','26/07/1984'),
('Cristina Garcia Perez','93679451C','19/06/1989'),
('Pablo Garcia Fernandez','72511084G','12/11/1992'),
('Marina Sanchez Ortiz','39418625T','04/01/1981'),
('David Mart inez Gomez','21878356S','27/09/1997'),
('Lucia Mart in Fernandez','80762793K','03/02/1980'),
('Natalia Gonzalez Mart inez','10343856P','14/08/1990'),
('Alejandro Moreno Sanchez','78673343G','12/06/1991'),
('Carmen Garcia Garcia','23764892P','09/02/1987'),
('Jorge Perez Lopez','46637416X','05/04/1998'),
('Lucia Ruiz Garcia','90171629E','30/11/1981'),
('Raul Gonzalez Ortiz','13389625F','07/09/1995'),
('Maria Jose Sanchez Fernandez','73119473H','24/07/1983'),
('David Perez Romero','37297131R','19/01/1990'),
('Laura Mart inez Garcia','53762812J','08/08/1988'),
('Pablo Fernandez Ruiz','20961863C','22/03/1994'),
('Sofia Garcia Perez','64592613S','16/05/1999'),
('Maria Garcia Sanchez','90571260Z','01/02/1984'),
('Daniel Ortiz Sanchez','85858394P','18/05/1993'),
('Elena Ruiz Gonzalez','28738154B','12/11/1988'),
('Pedro Gonzalez Perez','37605928F','23/09/1981'),
('Maria Sanchez Ruiz','13026203S','09/06/1990'),
('Javier Mart inez Garcia','62197954J','20/03/1995'),
('Lucia Fernandez Garcia','56955652Z','14/12/1982'),
('Luis Mart inez Ruiz','17660751G','03/09/1992'),
('Ana Sanchez Mart inez','64567206T','27/07/1991'),
('Pablo Lopez Sanchez','45289986R','08/04/1986');


INSERT INTO Parafarmacia (Nombre, Funcion, Dosis_recomendada, EfectosSecundarios, Contraindicaciones ) VALUES
('Optrex'  ,'Lagrimas artificiales y gotas oculares utilizadas para aliviar la sequedad y la irritacion ocular'  ,'Aplicar 1-2 gotas en cada ojo cuando sea necesario'  ,'Pueden producirse reacciones alergicas, irritacion ocular y vision borrosa temporal'  ,'No utilizar en caso de hipersensibilidad a alguno de los componentes de las gotas'),
('Fortasec'  ,'Antidiarreico utilizado para tratar la diarrea aguda','Tomar 1 capsula despues de cada deposicion diarreica, hasta un maximo de 8 capsulas al dia','Pueden producirse dolor abdominal, estreñimiento y nauseas, as i como somnolencia y mareo en algunos pacientes','No debe utilizarse en caso de colitis ulcerosa, diarrea sanguinolenta o infecciones intestinales provocadas por bacterias como Salmonella, Shigella o Campylobacter'),
('Mucosan'  ,'Mucol itico utilizado para tratar la tos con flemas'  ,'Tomar 1 sobre de granulado efervescente cada 8 horas disuelto en agua' ,'Pueden producirse reacciones alergicas como urticaria, angioedema y broncoespasmo, as i como dolor abdominal, nauseas y diarrea' ,'No debe utilizarse en pacientes con hipersensibilidad conocida a la acetilciste ina o a alguno de los excipientes'),
('Multicentrum'  ,'Suplemento multivitam inico utilizado para mantener una buena salud en general','Tomar 1 comprimido al dia con la comida principal','Pueden producirse reacciones alergicas en algunos pacientes, as i como nauseas, vomitos y diarrea','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Kukident'  ,'Crema adhesiva para dentaduras postizas que ayuda a mantenerlas en su lugar y prevenir irritaciones en las encias','Aplicar una pequeña cantidad de crema sobre la dentadura limpia y humeda, colocarla en la boca y presionar durante unos segundos para fijarla en su lugar','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion de las encias y boca','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes de la crema'),
('Avene'  ,'Marca de productos para el cuidado de la piel, especialmente para pieles sensibles','Aplicar segun las instrucciones del producto','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion de la piel y enrojecimiento','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes de los productos'),
('Fluido Bilefusion'  ,'Colirio para el cuidado de los ojos secos','Aplicar 1 gota en cada ojo 3-4 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como sensacion de ardor o picazon en los ojos','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del colirio'),
('Nexium Control'  ,'Medicamento utilizado para tratar el reflujo gastroesofagico','Tomar 1 comprimido al dia con un vaso de agua antes de la primera comida del dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como dolor de cabeza, diarrea y nauseas','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Voltadol Forte'  ,'Gel antiinflamatorio y analgesico utilizado para el alivio local del dolor muscular y articular','Aplicar una pequeña cantidad de gel sobre la zona afectada y masajear suavemente hasta su completa absorcion, hasta un maximo de 4 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion de la piel y dermatitis de contacto','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del gel'),
('Ardine'  ,'Analgesico y antitermico utilizado para aliviar el dolor y reducir la fiebre','Tomar 1-2 comprimidos cada 6-8 horas segun necesidad, no superando la dosis maxima diaria de 6 comprimidos','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion gastrica y ulceras gastrointestinales','No debe utilizarse en caso de hipersensibilidad a la aspirina o a alguno de los componentes del producto'),
('Biodramina','Medicamento utilizado para tratar los mareos y el mareo por movimiento','Tomar 1-2 comprimidos cada 6-8 horas segun necesidad, no superando la dosis maxima diaria de 8 comprimidos','Pueden producirse somnolencia, mareo y sequedad de boca en algunos pacientes','No debe utilizarse en caso de hipersensibilidad a la dimenhidrinato o a alguno de los componentes del producto'),
('Lactacyd','Gel  intimo utilizado para la higiene y el cuidado de la zona genital femenina','Aplicar una pequeña cantidad de gel sobre la zona externa de la vagina y aclarar con agua abundante','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y picazon en la zona genital','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del gel'),
('Frenadol','Medicamento utilizado para aliviar los s intomas del resfriado y la gripe, como el dolor de cabeza, la fiebre y el dolor muscular','Tomar 1 sobre de granulado efervescente cada 6 horas disuelto en agua, no superando la dosis maxima diaria de 4 sobres','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion gastrica y ulceras gastrointestinales','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Lacer Oros','Colutorio utilizado para el cuidado y la higiene bucal diaria, prevencion de caries y mantenimiento de la salud de las encias','Realizar enjuagues bucales con 10-15 ml de colutorio sin diluir durante 1 minuto despues del cepillado dental, 2 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion bucal y de las encias','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del colutorio'),
('Femasvit','Complemento alimenticio que aporta vitaminas y minerales espec ificos para el embarazo y la lactancia','Tomar 1 comprimido al dia con un vaso de agua, preferiblemente en el desayuno','Pueden producirse reacciones alergicas en algunos pacientes, as i como molestias gastrointestinales leves','No debe superarse la dosis diaria recomendada y debe utilizarse bajo supervision medica durante el embarazo y la lactancia'),
('Eucerin Hyaluron-Filler','Crema facial antiedad con acido hialuronico y saponina que reduce la apariencia de las arrugas','Aplicar una pequeña cantidad de crema sobre el rostro y el cuello despues de la limpieza facial, masajeando suavemente hasta su completa absorcion','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes de la crema'),
('Almax Forte','Antiacido que alivia los s intomas de la acidez estomacal y el ardor de estomago','Tomar 1-2 sobres de suspension oral despues de las comidas y antes de acostarse, no superando la dosis maxima diaria de 8 sobres','Pueden producirse reacciones alergicas en algunos pacientes, as i como estreñimiento y diarrea','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('XLS Medical Forte 5','Complemento alimenticio que ayuda a reducir la absorcion de grasas y carbohidratos para facilitar la perdida de peso','Tomar 2 comprimidos media hora antes de las dos comidas principales del dia con un vaso de agua, no superando la dosis maxima diaria de 4 comprimidos','Pueden producirse molestias gastrointestinales leves en algunos pacientes','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Klorane Champu seco','Champu en seco que absorbe el exceso de grasa y limpia el cabello sin necesidad de agua','Aplicar sobre el cabello seco, pulverizando a unos 30 cm de distancia de la ra iz, dejar actuar durante 2 minutos y cepillar suavemente el cabello para retirar el exceso de producto','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad del cuero cabelludo','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del champu'),
('Isdin Fotoprotector Fusion Water','Protector solar facial con factor de proteccion solar (FPS) 50+ y textura ultraligera que se absorbe rapidamente sin dejar residuos grasos','Aplicar una cantidad suficiente de producto sobre la piel limpia y seca, renovando la aplicacion cada 2 horas o despues del baño o sudoracion excesiva','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Fluocaril Bi-fluore 250'  ,'Pasta dental con fluor que protege contra la caries dental y refuerza el esmalte dental','Cepillar los dientes 2-3 veces al dia durante 2-3 minutos con una pequeña cantidad de pasta dental','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la boca','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Voltadol Forte'  ,'Gel antiinflamatorio y analgesico utilizado para el alivio local del dolor y la inflamacion en musculos, tendones y articulaciones','Aplicar una cantidad suficiente de gel sobre la zona afectada y masajear suavemente hasta su completa absorcion, hasta un maximo de 4 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y dermatitis','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Avene Agua Termal'  ,'Agua termal que calma, hidrata y refresca la piel sensible e irritada','Pulverizar sobre la piel limpia y seca a una distancia de 20-30 cm, dejar actuar durante unos segundos y retirar el exceso de agua con un pañuelo o toalla de papel','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Gelocatil 1 g'  ,'Analgesico y antipiretico que alivia el dolor y la fiebre','Tomar 1-2 comprimidos cada 6-8 horas, no superando la dosis maxima diaria de 6 comprimidos','Pueden producirse reacciones alergicas en algunos pacientes, as i como molestias gastrointestinales leves','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto o en pacientes con problemas hepaticos o renales graves'),
('Thermacare'  ,'Parches termicos que alivian el dolor muscular y articular','Colocar el parche sobre la zona afectada, asegurandose de que la piel este limpia y seca, y llevar puesto durante un maximo de 8 horas al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y quemaduras en la piel','No debe utilizarse en caso de hipersensibilidad a algun medicamento'),
('Bepanthol Crema'  ,'Crema hidratante que suaviza y protege la piel seca, irritada y agrietada','Aplicar una cantidad suficiente de crema sobre la zona afectada y masajear suavemente hasta su completa absorcion, 2-3 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y enrojecimiento de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Dexeryl Crema'  ,'Crema hidratante que alivia la piel seca, irritada y con picor','Aplicar una cantidad suficiente de crema sobre la zona afectada y masajear suavemente hasta su completa absorcion, 2-3 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y enrojecimiento de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Gingilacer Colutorio'  ,'Colutorio bucal que ayuda a prevenir la gingivitis y la placa bacteriana','Enjuagar la boca con 15 ml de colutorio durante 30 segundos, 2 veces al dia despues del cepillado dental','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la boca','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Otosan Gotas Oticas'  ,'Gotas oticas para la higiene y el cuidado del o ido','Aplicar 3-4 gotas en cada o ido, 1-2 veces al dia, y mantener la cabeza inclinada durante unos minutos para que las gotas penetren bien en el canal auditivo','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y picor en el o ido','No debe utilizarse en caso de perforacion del t impano o infeccion del o ido'),
('Sensodyne Rapid Action'  ,'Pasta dental para dientes sensibles que alivia el dolor dental','Cepillar los dientes 2 veces al dia durante 2 minutos con una pequeña cantidad de pasta dental','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la boca','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Vichy Mineral 89'  ,'Serum hidratante que fortalece la piel y la protege de la contaminacion ambiental','Aplicar una pequeña cantidad de serum sobre la piel limpia y seca, antes del tratamiento habitual, por la mañana y por la noche','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion y sequedad de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Frenadol Complex'  ,'Alivio sintomatico de la congestion nasal, dolor de cabeza, fiebre y dolor leve o moderado','Tomar 1 comprimido cada 8 horas con un vaso de agua, durante un maximo de 3 dias','Pueden producirse reacciones alergicas en algunos pacientes, as i como mareo y somnolencia','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto, ni en pacientes con problemas de tiroides o tension arterial alta'),
('Heliocare 360 Gel Oil-Free'  ,'Protector solar facial que protege la piel de los efectos nocivos del sol y la polucion','Aplicar una pequeña cantidad de gel sobre la piel limpia y seca, antes de la exposicion solar, renovando la aplicacion cada 2 horas','Pueden producirse reacciones alergicas en algunos pacientes, as i como sequedad o irritacion de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Nasalmer Adultos'  ,'Solucion isotonica de agua de mar para la limpieza y descongestion nasal','Aplicar 1-2 pulverizaciones en cada fosa nasal, 2-3 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion o sequedad de la mucosa nasal','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Optrex Colirio Hidratante'  ,'Colirio hidratante que alivia la sequedad ocular y la irritacion','Aplicar 1-2 gotas en cada ojo, tantas veces como sea necesario','Pueden producirse reacciones alergicas en algunos pacientes, as i como vision borrosa temporal','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Rhinomer Fuerza 2'  ,'Solucion hipertonica de agua de mar para la limpieza y descongestion nasal','Aplicar 1-2 pulverizaciones en cada fosa nasal, 2-3 veces al dia','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion o sequedad de la mucosa nasal','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto'),
('Urgo Filmogel Ampollas'  ,'Tratamiento de las ampollas y callosidades que forma una capa protectora sobre la piel','Aplicar una pequeña cantidad de gel sobre la ampolla o callosidad y dejar secar durante unos minutos','Pueden producirse reacciones alergicas en algunos pacientes, as i como irritacion o enrojecimiento de la piel','No debe utilizarse en caso de hipersensibilidad a alguno de los componentes del producto');

INSERT INTO usuario (nombre, email, pass) VALUES
('Juan Perez', 'juanperez@mail.com', '1234'),
('Maria Garcia', 'mariagarcia@mail.com', '2345'),
('Pedro Rodriguez', 'pedrorodriguez@mail.com', '34562'),
('Laura Fernandez', 'laurafernandez@mail.com', '4567'),
('Carlos Lopez', 'carloslopez@mail.com', '5678'),
('Ana Martinez', 'anamartinez@mail.com', '6789'),
('Luisa Sanchez', 'luisasanchez@mail.com', '7890'),
('Javier Garcia', 'javiergarcia@mail.com', '8901'),
('Admin','Admin@gmail.com','admin');

INSERT INTO Medicamentos (Nombre_Medicamento,Ingredientes, Tipo_medicamento,Dosis_recomendada,EfectosSecundarios, Contraindicaciones ) VALUES
('Amlodipina',	'Amlodipina',	'Bloqueador de los Canales de Calcio',	'5-10mg una vez al dia',	'Dolor de cabeza, edema, fatiga'	,'Hipersensibilidad conocida a la amlodipina'),
('Gabapentina',	'Gabapentina',	'Anticonvulsivo y Analgesico',	'300-600mg tres veces al dia',	'Mareo, somnolencia, fatiga',	'Hipersensibilidad conocida a la gabapentina'),
('Pregabalina',	'Pregabalina',	'Anticonvulsivo y Analgesico',	'75-300mg dos veces al dia',	'Mareo, somnolencia, edema',	'Hipersensibilidad conocida a la pregabalina'),
('Fluoxetina',	'Fluoxetina',	'Antidepresivo',	'20-80mg una vez al dia',	'Nauseas, insomnio, ansiedad',	'Hipersensibilidad conocida a la fluoxetina'),
('Sertralina'	,'Sertralina',	'Antidepresivo',	'50-200mg una vez al dia'	,'Nauseas, diarrea, dolor de cabeza',	'Hipersensibilidad conocida a la sertralina'),
('Lorazepam'	,'Lorazepam',	'Benzodiazepina',	'0.5-2mg dos o tres veces al dia',	'Somnolencia, mareo, confusion',	'Hipersensibilidad conocida al lorazepam'),
('Alprazolam',	'Alprazolam',	'Benzodiazepina',	'0.25-1mg dos o tres veces al dia',	'Somnolencia, mareo, confusion',	'Hipersensibilidad conocida al alprazolam'),
('Diazepam',	'Diazepam',	'Benzodiazepina',	'2-10mg dos o tres veces al dia',	'Somnolencia, mareo, confusion',	'Hipersensibilidad conocida al diazepam'),
('Levodopa/Carbidopa',	'Levodopa/Carbidopa'	,'Antiparkinsoniano',	'Dosificacion variable',	'Nauseas, vomitos, discinesia',	'Glaucoma de angulo cerrado'),
('Metoclopramida',	'Metoclopramida',	'Antiemetico y Procinetico',	'10mg tres o cuatro veces al dia',	'Somnolencia, mareo, diarrea',	'Hipersensibilidad conocida a la metoclopramida'),
('Ciprofloxacina',	'Ciprofloxacina'	,'Antibiotico','250-500mg dos veces al dia','Diarrea, nauseas, dolor abdominal'	,'Hipersensibilidad conocida a la ciprofloxacina'),
('Diclofenaco','Diclofenaco',	'Antiinflamatorio y Analgesico',	'50-100mg dos o tres veces al dia',	'Dolor abdominal, nauseas, vomitos',	'Asma, ulceras gastricas'),
('Paracetamol', 'Paracetamol', 'Analgesico y Antipiretico', '500-1000mg cada 4-6 horas', 'Nauseas, vomitos, dolor abdominal', 'Hipersensibilidad conocida al paracetamol'),
('Ibuprofeno', 'Ibuprofeno', 'Antiinflamatorio y Analgesico', '200-400mg cada 4-6 horas', 'Dolor abdominal, nauseas, vomitos', 'Asma, ulceras gastricas'),
('Aspirina', 'acido Acetilsalic ilico', 'Analgesico y Antipiretico', '325-650mg cada 4-6 horas', 'Sangrado gastrointestinal, ulceras', 'Alergia al acido acetilsalic ilico'),
('Amoxicilina', 'Amoxicilina', 'Antibiotico', '500-1000mg cada 8 horas', 'Diarrea, nauseas, erupciones cutaneas', 'Alergia a la penicilina'),
('Azitromicina', 'Azitromicina', 'Antibiotico', '500mg una vez al dia durante 3 dias', 'Diarrea, nauseas, vomitos', 'Alergia a la azitromicina'),
('Omeprazol', 'Omeprazol', 'Inhibidor de la Bomba de Protones', '20-40mg una vez al dia', 'Diarrea, dolor abdominal, dolor de cabeza', 'Hipersensibilidad conocida al omeprazol'),
('Ranitidina', 'Ranitidina', 'Antagonista del Receptor H2', '150-300mg dos veces al dia', 'Diarrea, nauseas, dolor abdominal', 'Hipersensibilidad conocida a la ranitidina'),
('Simvastatina', 'Simvastatina', 'Estatina', '10-40mg una vez al dia', 'Dolor muscular, debilidad, nauseas', 'Embarazo, enfermedad hepatica activa'),
('Losartan', 'Losartan', 'Antagonista del Receptor de Angiotensina II', '50mg una vez al dia', 'Dolor de cabeza, mareo, fatiga', 'Hipersensibilidad conocida al losartan'),
('Metformina', 'Metformina', 'Biguanida', '500-1000mg dos veces al dia', 'Diarrea, nauseas, dolor abdominal', 'Insuficiencia renal, embarazo'),
('Levotiroxina', 'Levotiroxina', 'Hormona Tiroidea', '25-300mcg una vez al dia', 'Palpitaciones, sudoracion, perdida de peso', 'Hipersensibilidad conocida a la levotiroxina'),
('Metoprolol', 'Metoprolol', 'Bloqueador Beta', '25-100mg dos veces al dia', 'Dolor de cabeza, mareo, fatiga', 'Insuficiencia cardiaca, asma');

DELIMITER //
CREATE PROCEDURE insertar_numeros_aleatorios()
BEGIN
	DECLARE contador INT DEFAULT 0;
	DECLARE max_filas INT DEFAULT (SELECT COUNT(*) FROM Medicamentos);
	WHILE contador < max_filas DO
		UPDATE Medicamentos SET CodigodeBarrasMed = LPAD(FLOOR(RAND() * 999999999999), 12, '0') WHERE id = contador+1;
		SET contador = contador + 1;
	END WHILE;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertar_numeros_aleatorios2()
BEGIN
  DECLARE contador INT DEFAULT 0;
  DECLARE max_filas INT DEFAULT (SELECT COUNT(*) FROM Parafarmacia);
  WHILE contador < max_filas DO
    UPDATE Parafarmacia SET CodigodeBarrasPar = LPAD(FLOOR(RAND() * 999999999999), 12, '0') WHERE id = contador+1;
		SET contador = contador + 1;
  END WHILE;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertar_numeros_aleatorios3()
BEGIN
  DECLARE contador INT DEFAULT 0;
  DECLARE max_filas INT DEFAULT (SELECT COUNT(*) FROM Recetas);
  WHILE contador < max_filas DO
    UPDATE Recetas SET CodigodeBarrasReceta = LPAD(FLOOR(RAND() * 999999999999), 12, '0') WHERE id = contador+1;
		SET contador = contador + 1;
  END WHILE;
END //
DELIMITER ;

CALL insertar_numeros_aleatorios();
CALL insertar_numeros_aleatorios2();   

use TFG_Grupo15;

INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID = 1;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 1;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID = 1;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID = 1;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID = 1;
    
INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID = 2;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 2;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID = 2;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID = 2;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID = 2;

INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID = 3;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 3;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID = 3;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID = 3;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID = 3;
    
INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID = 12;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 12;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID = 12;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID = 12;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID = 12;
    
INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID = 16;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 16;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID = 16;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID = 16;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID = 16;
    
INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 1
	WHERE p.ID =20;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 15
	WHERE p.ID = 20;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 10
	WHERE p.ID =20;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 6
	WHERE p.ID =20;
    INSERT INTO Recetas (Nombre,DNIPaciente, Nombre_Medicamento, CodigodeBarrasMed,Dosis_recomendada)
	SELECT p.Nombre,p.DNI, m.Nombre_Medicamento, m.CodigodeBarrasMed, m.Dosis_recomendada
	FROM Pacientes p
	JOIN Medicamentos m ON m.ID = 22
	WHERE p.ID =20;
CALL insertar_numeros_aleatorios3();   
*/
use TFG_Grupo15;
select * from Temporal;