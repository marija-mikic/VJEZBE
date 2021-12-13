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

#2
DELIMITER $$
$$
CREATE PROCEDURE fpo_1.zadatak2()
begin
	declare brojac INT(11) default 0;
	
	while brojac < 56872 do
		set brojac = brojac + 1;
		
		insert into zarucnica(sifra, stilfrizura, prstena, gustoca, modelnaocala, nausinca)
		values (null, 'frik', 2, 18, 'gucci', zadatak1(brojac));
		
	end while;
END
#1

CREATE DEFINER =`edunova`@`localhost` FUNCTION `fpo_1`.`zadatak1`(broj int(11)) RETURNS int(11)
begin
	declare varijabla int(11);
	if broj >= 980 and broj <= 5098 then
		set varijabla = broj;
	end if;
	if broj <= 980 or broj >= 5098 then
		set varijabla = 0;
	end if;
return varijabla;
END



#3
CREATE DEFINER=`edunova`@`localhost` TRIGGER zadatak3
AFTER INSERT
ON zarucnica FOR EACH row
begin
	insert into punac(sifra, modelnaocala, treciputa, drugiputa, novcica, narukvica)
		values (null, 'gucci','2021-12-08', '2021-12-08', 18, zadatak1(30));
	
	insert into punac(sifra, modelnaocala, treciputa, drugiputa, novcica, narukvica)
		values (null, 'gucci','2021-12-08', '2021-12-08', 13, zadatak1(9));
end
# 4

 CREATE DEFINER=`edunova`@`localhost` PROCEDURE `fpo_1`.`zadatak4`()
begin	
    declare _sifra int;
    declare _kraj int default 0;
    declare _suma int default 0;
    declare _brojac int default 0;
    declare zarucnica_kursor 
   	CURSOR for select sifra from zarucnica order by sifra;
    declare continue handler for not found set _kraj=1;

    open zarucnica_kursor;
    petlja: loop

    fetch zarucnica_kursor into _sifra;

    if _kraj=1 then leave petlja;
    end if;

    if mod(_sifra, 7)=0 then set _suma=_suma+_sifra;
    end if;

    end loop petlja;
    close zarucnica_kursor;


    sumapetlja: loop
    if _brojac=_suma then leave sumapetlja;
    end if;

    insert into muskarac(sifra,maraka,hlace,prstena,nausinca,neprijateljica) values
    (null,'20','kratke','18','5',1);

    set _brojac=_brojac+1;

    end loop sumapetlja;
end




















