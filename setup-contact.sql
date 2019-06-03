USE aidaaejf_portfoliocontact;

DROP TABLE IF EXISTS contact;

CREATE TABLE contact
  (name    VARCHAR(50) NOT NULL PRIMARY KEY,
   phone   VARCHAR(10),
   email   VARCHAR(50),
   message TEXT);

INSERT INTO contact VALUES("Manny", 2539548064, "em66@uw.edu", "go fuck yourself");
