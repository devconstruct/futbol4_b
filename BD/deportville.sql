CREATE DATABASE Deportville_com;
USE Deportville_com;

CREATE TABLE Equipo (
    id_equipo INT PRIMARY KEY AUTO_INCREMENT,
    nombre_equipo VARCHAR(50)
);

CREATE TABLE Jugadores (
    id_jugador INT PRIMARY KEY AUTO_INCREMENT,
    id_equipo INT,
    nombre VARCHAR(50),
    apellido_paterno VARCHAR(50),
    apellido_materno VARCHAR(50),
    edad INT,
    estatura INT,
    posicion VARCHAR(50),
    FOREIGN KEY (id_equipo) REFERENCES Equipo(id_equipo)
);

CREATE TABLE EstadisticasJugadores (
    id_estadisticasJugadores INT PRIMARY KEY AUTO_INCREMENT,
    id_jugador INT,
    goles INT,
    asistencias INT,
    tarjetas_amarillas INT,
    FOREIGN KEY (id_jugador) REFERENCES Jugadores(id_jugador)
);

CREATE TABLE EstadisticasEquipo (
    id_estadisticasEquipo INT PRIMARY KEY AUTO_INCREMENT,
    id_equipo INT,
    resultados_partidos VARCHAR(100),
    posesion_balón FLOAT,
    eficacia_tiros FLOAT,
    FOREIGN KEY (id_equipo) REFERENCES Equipo(id_equipo)
);

CREATE TABLE LesionesJugadores (
    id_lesion INT PRIMARY KEY AUTO_INCREMENT,
    id_jugador INT,
    tipo_lesion VARCHAR(100),
    gravedad VARCHAR(50),
    tiempo_recuperacion_estimado INT,
    FOREIGN KEY (id_jugador) REFERENCES Jugadores(id_jugador)
);

CREATE TABLE HistorialPartidos (
    id_partido INT PRIMARY KEY AUTO_INCREMENT,
    id_equipo_local INT,
    id_equipo_visitante INT,
    fecha DATE,
    resultado VARCHAR(20),
    FOREIGN KEY (id_equipo_local) REFERENCES Equipo(id_equipo),
    FOREIGN KEY (id_equipo_visitante) REFERENCES Equipo(id_equipo)
);

CREATE TABLE PlanificacionEntrenamientos (
    id_entrenamiento INT PRIMARY KEY AUTO_INCREMENT,
    id_equipo INT,
    fecha_entrenamiento DATE,
    rendimiento_fisico VARCHAR(50),
    FOREIGN KEY (id_equipo) REFERENCES Equipo(id_equipo)
);

CREATE TABLE PresupuestoEquipo (
    id_presupuesto INT PRIMARY KEY AUTO_INCREMENT,
    id_equipo INT,
    gastos_salarios FLOAT,
    gastos_instalaciones FLOAT,
    gastos_equipos_medicos FLOAT,
    FOREIGN KEY (id_equipo) REFERENCES Equipo(id_equipo)
);
