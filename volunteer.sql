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