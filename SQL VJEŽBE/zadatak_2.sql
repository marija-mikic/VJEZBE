drop database if exists zadatak_2;
create database zadatak_2;
use zadatak_2;

CREATE table neprijatelj(
    sifra int primary key not null auto_increment,
    majica varchar(30),
    haljina varchar(43) not null,
    lipa decimal(16,8),
    modelnaocala varchar(49) not null,
    kuna decimal(12,6) not null,
    jmbg char(11),
    cura int 
);

create table cura(
    sifra int not null primary key auto_increment,
    haljina varchar(33) not null,
    drugiputa datetime not null,
    suknja varchar(39),
    narukvica int,
    introvertno bit,
    majica varchar(40) not null,
    decko int

);

create table decko(
    sifra int not null primary key auto_increment,
    indiferentno bit,
    vesta varchar(34),
    asocijalno bit not null
);

create table decko_zarucnica(
    sifra int not null primary key auto_increment,
    decko int not null,
    zarucnica int not null
);

create table brat(
    sifra int not null primary key auto_increment,
    suknja varchar(47),
    ogrlica int,
    asocijalno bit not null,
    neprijatelj int not null
);

create table prijatelj(
    sifra int primary key not null auto_increment,
    modelnaocala varchar(37),
    treciputa datetime,
    ekstrovertno bit not null,
    prviputa datetime,
    svekar int not null

);

create table svekar(
    sifra int not null primary key auto_increment,
    stilfrizura varchar(48),
    ogrlica int not null,
    asocijalno bit not null
);

create table zarucnica(
    sifra int not null primary key auto_increment,
    narukvica int,
    bojakose varchar(37) not null,
    novcica decimal(15,9),
    lipa decimal(15,8),
    indiferentno bit not null
);

alter table cura add foreign key (decko) references decko(sifra);
alter table decko_zarucnica add foreign key (decko) references decko(sifra);
alter table neprijatelj add foreign key (cura) references cura(sifra);
alter table prijatelj add foreign key(svekar) references svekar(sifra);

insert into decko (sifra,indiferentno ,vesta,asocijalno )values
(null,1,'proljetna',1),
(null,0,'ljetna',0),
(null,1,'zimka',0);

insert  into cura(sifra, haljina,drugiputa,suknja,narukvica,introvertno,majica,decko)values
(null,'Gucci','2021-12-11','leprsava','2',1,'sportska',1),
(null,'Guess','2021-12-10','uska','3',0,'svecana',2),
(null,'Boss','2021-12-09','duga','6',1,'okolokucna',3);

insert  into neprijatelj (sifra, majica,haljina,lipa,modelnaocala,kuna,jmbg,cura)values
(null,'zara','mustang','12','reyban','15','12345678956',1),
(null,'hm','stradivarius','50','znj','60','69812354789',2),
(null,'hm','stradivarius','50','znj','60','69812354789',3);

update prijatelj set treciputa='2021-04-30';

delete from brat where ogrlica not like '14';

select suknja from cura where drugiputa is not null;


select a.novcica,f.neprijatelj,e.haljina
from zarucnica a 
inner join decko_zarucnica b on a.sifra=b.zarucnica 
inner join decko c on b.decko =c.sifra 
inner join cura d on c.sifra =d.decko 
inner  join neprijatelj e on d.sifra=e.cura
inner  join brat f on e.sifra=f.neprijatelj
where c.vesta like '&ba&'
group by e.haljina asc ;



select vesta, asocijalno 
from decko
where sifra not in (select decko from decko_zarucnica);