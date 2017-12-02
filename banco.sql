CREATE TABLE LOGIN (
EMAIL VARCHAR(30) CONSTRAINT LOG_EMA_NN NOT NULL,
USUARIO VARCHAR (15) CONSTRAINT LOG_USU_PK PRIMARY KEY,
SENHA VARCHAR (15) CONSTRAINT LOG_SEN_NN NOT NULL
);

GO

CREATE TABLE D_PESSOAIS (
NOME VARCHAR(30) CONSTRAINT DAD_NOME_NN NOT NULL,
SOBRENOME VARCHAR(30) CONSTRAINT DAD_SOBRENOME_NN NOT NULL,
RG FLOAT(9) CONSTRAINT DAD_RG_NN NOT NULL,
CPF FLOAT(11) CONSTRAINT DAD_CPF_PK PRIMARY KEY,
NASCIMENTO DATE CONSTRAINT DAD_DATE_NN NOT NULL);

GO
CREATE TABLE ENDERE�O (
RUA VARCHAR(30) CONSTRAINT END_RUA_NN NOT NULL,
NUMERO FLOAT CONSTRAINT END_NUM_NN NOT NULL,
CEP FLOAT(8) CONSTRAINT END_CEP_NN NOT NULL,
BAIRRO VARCHAR(15) CONSTRAINT END_BAIRRO_NN NOT NULL,
CIDADE VARCHAR(15) CONSTRAINT END_CIDADE_NN NOT NULL,
ESTADO VARCHAR(2) CONSTRAINT END_ESTADO_NN NOT NULL
);