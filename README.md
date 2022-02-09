
# SQL DATABASE 

estructura de la base de datos , falta la creacion de indices
```sql

CREATE DATABASE "biz" 

CREATE TABLE "biz"."tb_document_types" (
  "id" int NOT NULL AUTO_INCREMENT,
  "name_short" varchar(3) NOT NULL,
  "name" varchar(20) NOT NULL,
  "actived" tinyint(1) NOT NULL DEFAULT '1',
  "updated_at" datetime DEFAULT NULL,
  "created_at" datetime DEFAULT NULL,
  "deleted_at" datetime DEFAULT NULL,
  PRIMARY KEY ("id")
);


CREATE TABLE "biz"."tb_user_types" (
  "id" int NOT NULL AUTO_INCREMENT,
  "name" varchar(20) NOT NULL,
  "actived" tinyint(1) NOT NULL DEFAULT '1',
  "updated_at" datetime DEFAULT NULL,
  "created_at" datetime DEFAULT NULL,
  "deleted_at" datetime DEFAULT NULL,
  PRIMARY KEY ("id")
);




CREATE TABLE "biz"."tb_users" (
  "id" int NOT NULL AUTO_INCREMENT,
  "name" varchar(20) NOT NULL,
  "lastname" varchar(20) DEFAULT NULL,
  "documenttype_id" int NOT NULL,
  "document" varchar(11) NOT NULL,
  "usertype_id" int NOT NULL,
  "updated_at" datetime DEFAULT NULL,
  "created_at" datetime DEFAULT NULL,
  "deleted_at" datetime DEFAULT NULL,
  PRIMARY KEY ("id"),
  KEY "tb_user_FK" ("documenttype_id"),
  KEY "tb_user_FK_1" ("usertype_id"),
  CONSTRAINT "tb_user_FK" FOREIGN KEY ("documenttype_id") REFERENCES "biz"."tb_document_types" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT "tb_user_FK_1" FOREIGN KEY ("usertype_id") REFERENCES "biz"."tb_user_types" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE "biz"."tb_autos" (
  "id" int NOT NULL AUTO_INCREMENT,
  "marca" varchar(200) NOT NULL,
  "value" int NOT NULL,
  "model" varchar(20) NOT NULL,
  "year" year NOT NULL,
  "updated_at" datetime DEFAULT NULL,
  "created_at" datetime DEFAULT NULL,
  "deleted_at" datetime DEFAULT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE "biz"."tb_sell_autos" (
  "id" int NOT NULL AUTO_INCREMENT,
  "user_id_sell" int NOT NULL,
  "user_id_buy" int NOT NULL,
  "auto_id" int NOT NULL,
  "updated_at" datetime DEFAULT NULL,
  "created_at" datetime DEFAULT NULL,
  "deleted_at" datetime DEFAULT NULL,
  PRIMARY KEY ("id"),
  KEY "tb_sell_auto_FK" ("auto_id"),
  KEY "tb_sell_auto_FK_1" ("user_id_sell"),
  KEY "tb_sell_auto_FK_2" ("user_id_buy"),
  CONSTRAINT "tb_sell_auto_FK" FOREIGN KEY ("auto_id") REFERENCES "biz"."tb_autos" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT "tb_sell_auto_FK_1" FOREIGN KEY ("user_id_sell") REFERENCES "biz"."tb_users" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT "tb_sell_auto_FK_2" FOREIGN KEY ("user_id_buy") REFERENCES "biz"."tb_users" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT
);

```