
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