CREATE TABLE Questao (
    ID_QUESTAO INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
    TIPO_QUESTAO VARCHAR(50)  NOT NULL  ,
    CABECARIO_QUESTAO VARCHAR(255)  NOT NULL  ,
    ALTERNATIVA_1 VARCHAR(255)  NOT NULL  ,
    ALTERNATIVA_2 VARCHAR(255)  NOT NULL  ,
    ALTERNATIVA_3 VARCHAR(255)  NULL  ,
    ALTERNATIVA_4 VARCHAR(255)  NULL  ,
    RESPOSTA_QUESTAO CHAR(1)  NOT NULL    ,
PRIMARY KEY(ID_QUESTAO));
