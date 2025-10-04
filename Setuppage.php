<?php  
include('Connectionstring.php');
$query="CREATE TABLE Counter
(
	Visitorcount int not null primary key,
	Lastvisited datetime
);";

$query="Create table Breed
(
	BreedID int not null primary key,
	BreedDes varchar(20)
);";
$query="Create table Membertype
(
	MembertypeID int not null primary key,
	MemberDes varchar(20)
);";

$query="Create table Country
(
	CountryID int not null primary key,
	CountryName varchar(20)
);";
$query="Create table Area
(
	AreaID int not null primary key,
	AreaName varchar(30),
	CountryID int,
	Foreign key (CountryID) references Country (CountryID)
);";
$query="Create table Member
(
	MemberID int not null primary key,
	MemberName varchar(30),
	Email varchar(30),
	DOB date,
	Address varchar(100),
	MembershipSD date,
	Activ char(1),
	CurrentleopardadoptionSD date,
	CurrentleopardadoptionED date,
	Photo varchar(255),
	MembertypeID int,
	Fees$ int,
	Foreign Key (MembertypeID) references Membertype (MembertypeID)
);";
$query="Create table Leopard
(
	LeopardID int not null primary key,
	LeopardName varchar(30),
	Age int,
	Photo varchar(255),
	Yeararrived int,
	BreedID int,
	Foreign Key (BreedID) references Breed(BreedID)
);";
$query="Create table Adoption 
(
	MemberID int not null,
	LeopardID int not null,
	DateAdopted date,
	Dateleft date,
	Primary Key (MemberID,LeopardID),
	Foreign Key (MemberID) references Member(MemberID),
	Foreign Key (LeopardID) references Leopard(LeopardID)
);";
$query="Create table Origin 
(
	LeopardID int not null,
	AreaID int not null,
	Primary Key (LeopardID,AreaID),
	Foreign Key (LeopardID) references Leopard(LeopardID),
	Foreign Key (AreaID) references Area(AreaID)
);";
$query="Alter table Member Add Phoneno varchar (15) not null;";

$query="Alter table Member Add column Password varchar (30) not null;";

$query="Create table Privilege
(
	PrivilegeID int not null primary key,
	Post varchar(20),
	Salary$ int,
	Privilegedes varchar(100)
)";
$query="Create table Admin
(
	StaffID int not null primary key,
	StaffName varchar(30),
	Email varchar(30),
	DOB date,
	Address varchar(100),
	PrivilegeID int,
	Photo varchar(255),
	Foreign key (PrivilegeID) references Privilege (PrivilegeID)
)";
$query="Create table block (blockedID int not null primary key, ipadd int not null);";
$query="Create table coun (time varchar(1) not null primary key);";
$query="Insert into coun values ('5');";
$query="Create table article 
(
	articleID int not null primary key AUTO_INCREMENT, 
	articletitle varchar (256) not null, 
	articlecontent text not null, 
	articleauthor varchar(50) not null,
	posteddate datetime not null
);";
$query="Create table Pphoto(photoid int not null primary key AUTO_INCREMENT, pid int, photo varchar(256),foreign key(pid) references forumtbl (pid));"; 
$ret=mysqli_query($connection,$query) or die (mysqli_error());
if ($ret)
{
	echo "Success";
}
 ?>