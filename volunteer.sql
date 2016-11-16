CREATE TABLE VOLUNTEER(
vid int NOT NULL auto_increment,
vlname varchar(255),
vfname varchar(255),
gender enum('Male', 'Female', 'Other') NOT NULL,
vaffiliation varchar(255),
vphone varchar(255),
vmail varchar(255),
vpass varchar(255),
CONSTRAINT pk_vid PRIMARY KEY (vid));

CREATE TABLE STUDENT(
sid int NOT NULL auto_increment,
slname varchar(255),
sfname varchar(255),
sgender enum('Male', 'Female', 'Other') NOT NULL,
slevel enum('Undergrad', 'Graduate', 'Visiting Scholar') NOT NULL,
smajor varchar(255),
sontact varchar(255),
smail varchar(255),
spass varchar(255),
CONSTRAINT pk_sid PRIMARY KEY (sid));

CREATE TABLE STICKET(
sticketid int NOT NULL auto_increment,
dflightnum varchar(255),
dflightname varchar(255),
aflightnum varchar(255),
aflightname varchar(255),
adate date,
atime time,
acomments text,
shousing enum('Yes', 'No') NOT NULL,
sdatestart date,
sdateend date,
CONSTRAINT pk_sticketid PRIMARY KEY (sticketid)
);

CREATE TABLE VSTICKET(
vsticketid int NOT NULL auto_increment,
vavdate date,
capacity int,
numtrips int,
comments text,
CONSTRAINT pk_vsticketid PRIMARY KEY (vsticketid)
);

CREATE TABLE matchticket(
matchid int NOT NULL,
sticketid int,
vsticketid int,
CONSTRAINT pk_matchid PRIMARY KEY (matchid),
CONSTRAINT fk_sticketid FOREIGN KEY (sticketid) REFERENCES STICKET(sticketid),
CONSTRAINT fk_vsticketid FOREIGN KEY (vsticketid) REFERENCES VSTICKET(vsticketid)
);