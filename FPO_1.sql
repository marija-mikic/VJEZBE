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
cREATE PROCEDURE fpo_1.zadatak()
begin
	declare broj int default 0;
while broj <56872
	insert into zarucnica(sifra,stilfrizura,prstena,gustoca,modelnaocala,nausinca)
	values (null,'freak','2',20,'boss','2');
set broj=broj+1;
END$$
DELIMITER ;

#1

CREATE FUNCTION zadatak1(@BROJ) RETURNS VARCHAR(5)
AS
BEGIN
    DECLARE @varijabla CHAR(5);
    IF(@BROJ > 980 && BROJ < 5080)
         @varijabla = TRUE;
    IF(@BROJ < 980 || BROJ > 5080) - uvjet kada broj nevalja, odnosno manji je od 980 ili je veći od 5080
        @varijabla = FALSE;

  RETURN @varijabla;
END

#3
CREATE TRIGGER TriggerSumTable
ON dbo.SumTable
INSTEAD OF INSERT
AS
BEGIN
	DECLARE
		@Fnum real,
		@Snum real,
		@Sum real
	SELECT @Fnum= INSERTED.[First Number],
		   @Snum= INSERTED.[Second Number]
		   FROM INSERTED
	SET @Sum= @Fnum+ @Snum
	INSERT INTO dbo.SumTable(
	[First Number], [Second Number], [Sum of Numbers])
	VALUES(@Fnum, @Snum, @Sum)
END

#























