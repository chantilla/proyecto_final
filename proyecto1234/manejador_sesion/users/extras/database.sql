create table if not exists users(

idUsers INT unsigned not null auto_increment,
loginUsers VARCHAR(15) character set utf8 collate utf8_spanish_ci not null,
passUsers VARCHAR(10) character set utf8 collate utf8_spanish_ci not null,
idprofile INT not null,
emailUser VARCHAR(50) character set utf8 collate utf8_spanish_ci not null,
idActiveCode BLOB character set utf8 collate utf8_spanish_ci,
path_imgUser LONGTEXT character set utf8 collate utf8_spanish_ci,
idexistindb INT not null,
primary key(idUsers)

)engine=myisam character set utf8 collate utf8_spanish_ci;

create table if not exists profiles(
	idProfile INT unsigned not null auto_increment,
	nameProfi varchar(10) character set utf8 collate utf8_spanish_ci,
	primary key(idProfile)
)engine=myisam character set utf8 collate utf8_spanish_ci;