CREATE TABLE pest (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  type VARCHAR(100) NOT NULL,
  danger_level INT NOT NULL,
  description VARCHAR(500) NOT NULL,
  base_price INT NOT NULL,
  image VARCHAR(255) NOT NULL,
  CONSTRAINT pk_pest PRIMARY KEY (id));

CREATE TABLE gear (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  cost INT NOT NULL,
  CONSTRAINT pk_gear PRIMARY KEY (id));

CREATE TABLE pest_gear (
  pest_id INT NOT NULL,
  gear_id INT NOT NULL,
  CONSTRAINT pk_pest_gear PRIMARY KEY (pest_id, gear_id),
  CONSTRAINT fk_pest_gear_pest_id FOREIGN KEY (pest_id) REFERENCES pest (id),
  CONSTRAINT fk_pest_gear_gear_id FOREIGN KEY (gear_id) REFERENCES gear (id));

CREATE TABLE city (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  postcode VARCHAR(45) NOT NULL,
  CONSTRAINT pk_city PRIMARY KEY (id));

CREATE TABLE address (
  id INT NOT NULL AUTO_INCREMENT,
  street_name VARCHAR(100) NOT NULL,
  street_number VARCHAR(5) NOT NULL,
  city_id INT NOT NULL,
  floor VARCHAR(5) NULL,
  door VARCHAR(5) NULL,
  CONSTRAINT pk_address PRIMARY KEY (id),
  CONSTRAINT fk_address_city_id FOREIGN KEY (city_id) REFERENCES city (id));

CREATE TABLE customer (
  cust_code INT NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(45) NOT NULL,
  address_id INT NOT NULL,
  CONSTRAINT pk_customer PRIMARY KEY (cust_code),
  CONSTRAINT fk_customer_address_id FOREIGN KEY (address_id) REFERENCES address (id));

CREATE TABLE cust_order (
  order_code INT NOT NULL AUTO_INCREMENT,
  cust_id INT NOT NULL,
  pest_id INT NOT NULL,
  order_date DATETIME NOT NULL DEFAULT NOW(),
  address_id INT NOT NULL,
  CONSTRAINT pk_cust_order PRIMARY KEY (order_code),
  CONSTRAINT fk_cust_order_customer_id FOREIGN KEY (cust_id) REFERENCES customer(cust_code),
  CONSTRAINT fk_cust_order_address_id FOREIGN KEY (address_id) REFERENCES address (id));
  
INSERT INTO city(name, postcode) values("Eger", "3300");
INSERT INTO city(name, postcode) values("Sopron", "9400");
INSERT INTO city(name, postcode) values("Nyíregyháza", "4400");
INSERT INTO city(name, postcode) values("Veszprém", "8200");

INSERT INTO address(street_name, street_number, city_id) values("Széchenyi utca", "8/A", 2);
INSERT INTO address(street_name, street_number, city_id) values("Petőfi Sándor utca", "14", 3);
INSERT INTO address(street_name, street_number, city_id, floor, door) values("Panelház utca", "12/A", 3, "6", "3");
INSERT INTO address(street_name, street_number, city_id, floor, door) values("Népegészségügy utca", "6/C", 1, "10", "4");

INSERT INTO customer(first_name, last_name, email, phone, password, address_id) values("János", "Kovács", "kovacs.janos@gmail.com", "06305789633", "password", 3);
INSERT INTO customer(first_name, last_name, email, phone, password, address_id) values("Lajos", "Nagy", "nagy.lajos@gmail.com", "06704791456", "password", 2);
INSERT INTO customer(first_name, last_name, email, phone, password, address_id) values("Margit", "Kiss", "kiss.margit@gmail.com", "06707413586", "password", 4);

INSERT INTO pest(name, type, danger_level, description, base_price, image) values("csótány", "ízeltlábúak", 4, "A kifejlett példányok elérhetik a 20-27 mm-es nagyságot, színezetük a vöröses sötétbarnától a feketéig terjed.", 5000, "csotany.jpg");
INSERT INTO pest(name, type, danger_level, description, base_price, image) values("hangya", "ízeltlábúak", 2, "A hangyák kis termetű, hártyás szárnyú rovarok, testhosszuk igen gyakran csak 1-2 mm.", 4000, "hangya.jpg");
INSERT INTO pest(name, type, danger_level, description, base_price, image) values("patkány", "rágcsálók", 6, "A házi patkány egyértelműen az esti és a reggeli szürkület idején a legtevékenyebb, bár a nap bármely órájában találhatunk éber példányokat.", 10000, "patkany.jpg");
INSERT INTO pest(name, type, danger_level, description, base_price, image) values("egér", "rágcsálók", 5, "A házi egér Északnyugat-Afrika, Spanyolország és Kelet-Ázsia sztyeppjeiről és félsivatagaiból származik. A lakóházak közvetlen közelében mindenütt megtalálható.", 8650, , "eger.jpg");

INSERT INTO gear(name, cost) values("légycsapó", 500);
INSERT INTO gear(name, cost) values("permetezőszer", 1200);
INSERT INTO gear(name, cost) values("patkányméreg", 800);
INSERT INTO gear(name, cost) values("porszívó", 2500);

INSERT INTO pest_gear(pest_id, gear_id) values(1, 1);
INSERT INTO pest_gear(pest_id, gear_id) values(1, 2);
INSERT INTO pest_gear(pest_id, gear_id) values(1, 3);
INSERT INTO pest_gear(pest_id, gear_id) values(2, 1);
INSERT INTO pest_gear(pest_id, gear_id) values(2, 2);
INSERT INTO pest_gear(pest_id, gear_id) values(2, 3);
INSERT INTO pest_gear(pest_id, gear_id) values(3, 2);
INSERT INTO pest_gear(pest_id, gear_id) values(3, 3);
INSERT INTO pest_gear(pest_id, gear_id) values(4, 2);
INSERT INTO pest_gear(pest_id, gear_id) values(4, 3);

INSERT INTO cust_order(cust_id, pest_id, address_id) VALUES(1, 2, 1);
INSERT INTO cust_order(cust_id, pest_id, address_id) VALUES(2, 4, 4);