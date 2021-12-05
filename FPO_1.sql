drop database if exists FPO_1;
create database FPO_1;
use FPO_1;

create table sestra(
        sifra int primary key not null auto_increment,
        introvertno tinyint(1),
        carape varchar(41) ,
        suknja varchar(46) ,
        narukvica int not null
);

create table muskarac (
        sifra int primary key not null auto_increment,
        maraka decimal(17,7) not null,
        hlace varchar(45) not null,
        prstena int(43) not null,
        nausinca int (11),
        neprijateljica int (11) not null
);
  create table neprijateljica (
            sifra int primary key not null auto_increment,
            indiferentno tinyint (1)not null,
            modelnaocala varchar(39) not null,
            maraka decimal(12,10)not null,
            kratkamajica varchar(32) not null,
            ogrlica int (11)
  );

  create table punac(
        sifra int primary key auto_increment,
        modelnaocala varchar(39) not null,
        treciputa datetime ,
        drugiputa datetime,
        novcica decimal(14,6) not null,
        narukvica int (11)
  );

 create table zarucnica(
     sifra int(11) primary key auto_increment not null,
     stilfrizura varchar(40),
     prstena int (11) not null,
     gustoca decimal(14,5),
     modelnaocala varchar(35) not null,
     nausinca int(11) not null
 );

 alter table muskarac add foreign key(neprijateljica) references neprijateljica(sifra);





















