drop database if exists zadatak_3;
create database zadatak_3;
use zadatak_3;

create table svekar(
sifra int primary key auto_increment not null,
novcica varchar(16,8) not null,
suknja varchar(36) not null,
bojakose varchar,
prstena int,
narukvica int not null,
cura int not null

);

create table cura(
    sifra int primary key auto_increment not null,
    dukserica varchar(49),
    maraka decimal(13,7),
    drugiputa datetime,
    majica varchar(49),
    novcica decimal(15,8),
    ogrlica int not null
);

create table snasa(
    sifra int primary key auto_increment not null,
    introvertno bit,
    kuna decimal(15,6) not null,
    eura decimal(12,6) not null,
    treciputa datetime ,
    ostavljena int not null
);

create table punica(
    sifra int not null auto_increment primary key,
    asocijalno bit,
    kratkamajica varchar(44),
    kuna decimal(13,6) not null,
    vesta varchar(32) not null,
    snasa int,
);
create table ostavljena(
    sifra int not null auto_increment primary key,
    kuna decimal(17,5),
    lipa decimal,
    majica varchar
    modelnaocala varchar not null,
    prijatelj int

);

create table prijatelj(
sifra int not null primary key auto_increment,
kuna decimal,
haljina varchar
lipa decimal,
dukserica varchar,
indiferentno bit not null,
);

create table prijatelj_brat(
    sifra int not null auto_increment primary key,
    prijatelj int not null,
    brat int not null
);

create table brat(
    sifra int not null auto_increment primary key,
    jmbg char(11),
    ogrlica int not null,
    ekstrovertno bit not null
);

alter table svekar add foreign key(cura)references cura(sifra);
alter table punica add foreign key(snasa)references snasa(sifra);
alter table snasa add foreign key(ostavljena) references ostavljena(sifra);
alter table ostavljena add foreign key(prijatelj) references prijatelj(sifra);
alter table prijatelj_brat add foreign key(prijatelj) references prijatelj(sifra);
alter table prijatelj_brat add foreign key(brat) references brat(sifra);