drop database if exists zadatak_1;
create database zadatak_1;
use zadatak_1;

create table sestra_svekar(
        sifra int primary key not null auto_increment,
        sestra int,
        svekar int 
);

create table svekar (
        sifra int primary key not null auto_increment,
        bojaociju varchar (40) not null,
        prstena int,
        dukserica varchar(41),
        lipa decimal (13,8),
        eura decimal (12,7),
        majica varchar(35)  

);

create table sestra(
        sifra int primary key not null auto_increment,
        introvertno bit,
        haljina varchar(31) not null,
        maraka decimal(16,6) ,
        hlace varchar(46) not null,
        narukvica int not null

);

create table zena(
        sifra int primary key not null auto_increment,
        treciputa datetime,
        hlace varchar(46) ,
        kratkamajica varchar(31) not null,
        jmbag char(11)not null,
        bojaociju varchar(39),
        haljina  varchar(44) not null,
        sestra int  not null
);

create table muskarac (
        sifra int primary key auto_increment,
        bojaociju varchar(50) not null,
        hlace varchar(43),
        modelnaocala varchar(43) not null,
        maraka decimal (14,5),
        zena int
);

create table mladic(
        sifra int primary key not null auto_increment,
        suknja varchar(50) not null,
        kuna decimal(16,8) not null,
        drugiputa datetime ,
        asocijalno bit,
        muskarac int not null
);

create table punac(
        sifra int primary key auto_increment,
        ogrlica int not null,
        gustoca decimal (14,5)not null,
        hlace varchar (41)
);

create table cura(
        sifra int primary key  not null auto_increment,
        novcica decimal (16,5) not null,
        gustoca decimal (18,6) not null,
        lipa decimal(13,10) ,
        ogrlica int not null,
        bojakose varchar(38),
        suknja varchar(38) ,
        punac int not null

);

alter table sestra_svekar add foreign key (sestra) references sestra(sifra);
alter table sestra_svekar add foreign key (svekar) references svekar(sifra);
alter table zena add foreign key(sestra) references sestra(sifra);
alter table muskarac add foreign key (zena) references zena (sifra);
alter table mladic add foreign key (muskarac) references muskarac(sifra);
alter table cura add foreign key (punac) references punac (sifra);

select  * from sestra;
insert into sestra (sifra,introvertno,haljina,maraka,hlace,narukvica) values
(null,null,'Levis',null,'Levis',10),
(null,null,'Mustang',null,'Mustang',15),
(null,null,'HM', null,'HM', 17);

select * from svekar;
insert into svekar(sifra, bojaociju,prstena,dukserica,lipa,eura,majica)values
(null,'zelene','11','Nike',null,null,'Zara'),
(null,'plave','14','Adidas',null,null,'Bershka'),
(null,'smede','16','Champion',null,null,'Mustang');

select * from sestra_svekar;
insert  into sestra_svekar(sifra,sestra,svekar) values
(null,1,1),
(null,1,2),
(null,3,3);


select * from zena;
insert into zena(sifra,treciputa,hlace,kratkamajica,jmbag,bojaociju,haljina,sestra) values
(null,null,null,'pilates','56984752154',null,'dnevna',1),
(null,null,null,'trcanje','96147892154',null,'svecana',2),
(null,null,null,'kava','56984752154',null,'plaza',3);

select * from muskarac;
insert into muskarac(sifra, bojaociju,hlace,modelnaocala,maraka,zena)values
(null,'plave','Levis','guess',null,1),
(null,'smede','Boss','Boss',null,2),
(null,'zelene','hm','ray ban',null,3);
#2
select * from cura;
update cura set gustoca=15.77;
#3
select * from mladic;
delete from mladic where kuna>15.78;

#4
select kratkamajica
from zena 
where hlace like '&ana&';

#5
select a.dukserica,f.asocijalno ,e.hlace 
from svekar a
inner join sestra_svekar b on a.sifra=b.svekar
inner join sestra c on b.sestra=c.sifra 
inner join zena d on c.sifra=d.sestra 
inner join muskarac e on d.sifra=e.zena 
inner join mladic f on e.sifra=f.muskarac
where d.hlace  and c.haljina like '&ba&'
group by e.hlace desc ;

#6
select * from sestra;

select haljina, maraka
from sestra 
where sifra
not in (select sestra from sestra_svekar);







