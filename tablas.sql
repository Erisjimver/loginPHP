create table usuarios_pass
(ID int not null auto_increment primary key,
usuarios varchar(20) not null, 
password varchar(20) not null
);


insert into usuarios_pass (id,usuarios,password) values(1,"israel","12345");

