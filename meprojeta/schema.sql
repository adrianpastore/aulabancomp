CREATE DATABASE "meprojeta"

CREATE TABLE "empresa"(
    "idEmpresa" serial,
    "nome" varchar(100) NOT NULL,
    "endereço" varchar(1000) NOT NULL,
    "CNPJ" varchar(16) NOT NULL,
    CONSTRAINT "empresaPK" PRIMARY KEY ("idEmpresa")
)

CREATE TABLE "projetos"(
    "idProjeto" serial,
    "nome" varchar(100) NOT NULL,
    "descricao" varchar(1000) NOT NULL,
    "idEmpresa" int NOT NULL,
    CONSTRAINT "projetosPK" PRIMARY KEY ("idProjeto"),
    CONSTRAINT "empresaFK" FOREIGN KEY ("idEmpresa")
        REFERENCES "empresa" ("idEmpresa")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "vagas"(
    "idVagas" serial,
    "nome" varchar(100) NOT NULL,
    "funcao" varchar(1000) NOT NULL,
    "salario" numeric(100000,2) NOT NULL,
    CONSTRAINT "vagaPK" PRIMARY KEY ("idVagas")
)

CREATE TABLE "patrocinador" (
    "idPatrocinador" serial,
    "nomeMarca" varchar(100) NOT NULL,
    "valorInvestimento" numeric(100000,2) NOT NULL,
    "representante" varchar (100) NOT NULL,
    "email" varchar (1000) NOT NULL,
    CONSTRAINT "patrocinadorPK" PRIMARY KEY ("idPatrocinador")
)


CREATE TABLE "etapa" (
    "idEtapa" serial,
    "tipo" varchar(100) NOT NULL,
    "descricao" varchar(1000) NOT NULL,
    "dataInicio" datetime,
    "dataPrevisaoTermino" datetime,
    CONSTRAINT "etapaPK" PRIMARY KEY ("idEtapa")
)

CREATE TABLE "projetoPatrocinador" (
    "idProjeto" INTEGER,
    "idPatrocinador" int,
    CONSTRAINT "projetoPatrocinadorPK" PRIMARY KEY ("idProjeto", "idPatrocinador"),
	  CONSTRAINT "projetoPatrocinadorFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projeto" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	  CONSTRAINT "patrocinadorProFK" FOREIGN KEY ("idPatrocinador")
		REFERENCES "patrocinador" ("idPatrocinador")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "projetoVaga" (
    "idProjeto" int,
    "idvagas" int,
    CONSTRAINT "projetoVagaPK" PRIMARY KEY ("idProjeto", "idVagas"),
	  CONSTRAINT "projetoVagaFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projeto" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	CONSTRAINT "vagasProjetoFK" FOREIGN KEY ("idVagas")
		REFERENCES "vagas" ("idVagas")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "projetoEtapa" (
    "idProjeto" int,
    "idEtapa" int,
    CONSTRAINT "projetoEtapaPK" PRIMARY KEY ("idProjeto", "idEtapa"),
	  CONSTRAINT "projetoetapaFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projeto" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	CONSTRAINT "etapaProjetoFK" FOREIGN KEY ("idEtapa")
		REFERENCES "etapa" ("idEtapa")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)