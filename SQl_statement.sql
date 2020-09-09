CREATE TABLE Account(

    account_id  int NOT NULL AUTO_INCREMENT,
    email Varchar(255),
   password varchar(255),
    PRIMARY KEY (account_id)

    );

CREATE TABLE Persoon(
    id  int NOT NULL AUTO_INCREMENT,
    FirstName varchar (255),
    Insertion varchar(255),
    LastName varchar(255),
    UserName Varchar(255),
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES Account(account_id)


);
