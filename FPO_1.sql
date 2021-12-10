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

CREATE FUNCTION fpo_1.zadatak1(broj int(11))
RETURNS VARCHAR(5)
begin
	declare varijabla VARCHAR(8);
	if broj > 980 and broj < 5080 then
		varijabla = 'TRUE';
	end if;
	if broj < 980 or broj > 5080 then
		varijabla = 'FALSE';
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























