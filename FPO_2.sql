drop database if exists FPO_2;
create database FPO_2;
use FPO_2;

create table muskarac(
    id int not null primary key auto_increment,
    eura decimal(15,7) not null,
    haljina varchar(41) not null,
    hlace varchar(34) not null,
    bojakose varchar(42) not null,
    narukvica int(11),
    prijatelj int(11) 
);

create table prijatelj(
    id int primary key not null auto_increment,
    gustoca decimal(16,5),
    suknja varchar(41) not null,
    asocijalno tinyint(1) not null,
    majica varchar(48),
    prstena int(11) not null
);

create table becar(
    id int not null primary key auto_increment,
    maraka decimal(12,10),
    treciputa datetime not null,
    ekstrovertno tinyint(1) not null,
    nausnica int(11)
);

create table ostavljen(
    id int(11) not null primary key auto_increment,
    bojaociju varchar(38) not null,
    nausnica int(11)  not null,
    gustoca decimal(16,7),
    narukvica int(11)
);
 create table zarucnik(
     id int(11) not null primary key auto_increment,
     kratkamajica varchar(44),
     lipa decimal(15,8),
     ekstrovertno tinyint(1) not null,
     ogrlica int(11) not null,
     narukvica int (11)
 );

 alter table muskarac add foreign key(prijatelj) references prijatelj(id);
#1
CREATE FUNCTION fpo_2.zadatak1(broj int(11))
RETURNS INT(11)
BEGIN
	declare varijabla int(11);
	if broj >= 1076 and broj <= 4697 then
		set varijabla = broj;
	end if;
	if broj <= 1076 or broj >= 4697 then
		set varijabla = 0;
	end if;
return varijabla;
END

#2  
CREATE PROCEDURE fpo_2.zadatak2()
begin
	declare brojac int (11) default 0;

while brojac<24064 do 
set brojac=brojac+1;

insert into becar(id,maraka,treciputa,ekstrovertno,nausnica)
values(null,zadatak1(150),'2021-12-11',null,'1');
end while;


END

#3

CREATE DEFINER=`edunova`@`localhost` TRIGGER becar
AFTER INSERT
ON becar FOR EACH row
begin 
	insert into ostavljen(id,bojaociju,nausnica,gustoca,narukvica)
	values (null,'zelena','11','12',zadatak1(500));
insert into ostavljen(id,bojaociju,nausnica,gustoca,narukvica)
	values (null,'zelena','11','12',zadatak1(500));


end

#4
CREATE DEFINER=`edunova`@`localhost` PROCEDURE `fpo_2`.`zadatak4`()
begin	
    declare _id int;
    declare _kraj int default 0;
    declare _suma int default 0;
    declare _brojac int default 0;
    declare becar_kursor 
   	CURSOR for select id from becar order by id;
    declare continue handler for not found set _kraj=1;

    open becar_kursor;
    petlja: loop

    fetch becar_kursor into _id;

    if _kraj=1 then leave petlja;
    end if;

    if mod(_id, 8)=0 then set _suma=_suma+_id;
    end if;

    end loop petlja;
    close becar_kursor;


    sumapetlja: loop
    if _brojac=_suma then leave sumapetlja;
    end if;

    insert into muskarac (id,eura,haljina,hlace,bojakose,narukvica,prijatelj) values
    (null,'20','ljetna','crne','crna','11',1);

    set _brojac=_brojac+1;

    end loop sumapetlja;
end
