CREATE TABLE client (
    clientID SERIAL PRIMARY KEY,
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    phone INT NOT NULL,
    email VARCHAR(30) NOT NULL
);

CREATE TABLE project(
    projectID SERIAL PRIMARY KEY,
    companyName VARCHAR(45) NOT NULL,
    siteURL VARCHAR(200) NOT NULL,
    siteDescription VARCHAR(255) NOT NULL,
    totalDown MONEY NOT NULL,
    downPaid MONEY NOT NULL,
    totalCost MONEY NOT NULL,
    totalPaid MONEY NOT NULL,
    clientID INT REFERENCES client (clientID)
);

CREATE TABLE siteUser(
    userID SERIAL PRIMARY KEY,
    userName VARCHAR(15) NOT NULL,
    userPassword VARCHAR(65) NOT NULL,
    priveleges BOOLEAN NOT NULL
);