CREATE DATABASE portfolio;
USE portfolio;

<-- Table structure for tabble users -->
 CREATE TABLE  users(
    userid varchar(100) NOT NULL
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
     email UNIQUE VARCHAR (50) NOT NULL,
    username varchar (50) not null,
    password varchar (50) not null,
    gender varchar (50) not null,
    zipcode VARCHAR(50) NOT NULL,
    address varchar (50) not null,
    city varchar (50) not null,
    state varchar (50) not null
    regdate TIMESTAMP CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

<-- table structure for table  -->
 CREATE TABLE  admin(
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    email  UNIQUE varchar (50) not null,
    username varchar (50) not null,
    password varchar (50) not null
);
<-- insert into table admin -->
INSERT INTO  admin(firstname, lastname, email,username,password)
VALUES('joshua','ndungu','joshuandungu2001@gmail.com','joshua','654r636xw');

 <-- social media links -->
  CREATE TABLE social_media_links(
    title VARCHAR (50) NOT NULL,
    image varchar (100) not null,
    media_link varchar(200) not null
 );

 <-- Table structure for table contact -->
 CREATE TABLE contact(
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject TEXT NOT NULL,
    message LONG NOT NULL
 );

 <-- Table structure for table resume -->
 CREATE TABLE resume(
    id INT (11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    degree VARCHAR(200) NOT NULL,
    period varchar (50) not null,
    institution VARCHAR(50) NOT NULL,
    image VARCHAR(100) NOT NULL,
    description LONG NOT NULL
 );
 <-- tBALE STRUCTURE FOR TABLE services -->
 CREATE DATABASE services(
    title VARCHAR(50) NOT NULL,
    image VARCHAR (50) NOT NULL,
    price INT (11) NOT NULL,
    description LONG  NOT NULL
 );
 <-- Tbale structure for table header -->
 CREATE TABLE header(
    my_name VARCHAR (50) NOT NULL,
    image VARCHAR (50) NOT NULL
 );
 <-- Create table about -->
 CREATE TABLE about (
    title VARCHAR(50) NOT NULL,
    dob date not null,
    phone int (15) not null,
    city VARCHAR (50) NOT NULL,
    age INT (15) NOT NULL,
    degree VARCHAR(100) NOT NULL,
    email VARCHAR(50) not null,
    freelance VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL
 );