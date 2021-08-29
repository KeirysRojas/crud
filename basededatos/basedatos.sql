CREATE DATABASE bd_basedatos;
USE bd_basebatos;
CREATE TABLE usuarios(
    usua_id INT(10)PRIMARY KEY
    usua_nomuser CHAR(50)
    usua_contra CHAR(20)
    USUA_TIPO CHAR(30)
);
CREATE TABLE tiposprograma(
    tiposp_id INT(10) PRIMARY KEY
    tiposp_tipo CHAR(30)
);
CREATE TABLE programa(
    progra_id INT(10) PRIMARY KEY
    progra_nombre CHAR(20)
    progra_tipo INT(5)
);
CREATE TABLE fichas(
    ficha_numero INT(10)PRIMARY KEY
    ficha_progra INT(10)
);
CREATE TABLE aprendices(
    apre_id INT(10) PRIMARY KEY
    apre_tipoid CHAR(3)
    apre_numid CHAR(20)
    apre_nombres CHAR(60)
    apre_apellidos CHAR(60)
    apre_direccio CHAR(80)
    apre_telefono CHAR(20)
    apre_ficha INT (10)

)