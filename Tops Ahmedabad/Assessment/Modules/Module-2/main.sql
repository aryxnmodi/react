-- create a table
CREATE TABLE employee (
  E_id INTEGER PRIMARY KEY,
  first_name VARCHAR(30),
  last_name VARCHAR(30),
  salary INTEGER,
  joining_date date,
  department VARCHAR(20)
);
-- insert some values
INSERT INTO employee VALUES (1, 'Ryan', 'Abdul',33000,'22-07-01','Banking');
INSERT INTO employee VALUES (2, 'Michael', 'Clark',25000,'21-05-21','Banking');
INSERT INTO employee VALUES (3, 'Roy', 'Thomas',27000,'23-02-15','Insurance');
INSERT INTO employee VALUES (4, 'Tom', 'Jose',13000,'25-10-05','Banking');
INSERT INTO employee VALUES (5, 'Jerry', 'Pinto',45500,'22-07-02','Banking');
SELECT*FROM employee;
SELECT first_name, last_name, salary from employee;
SELECT UPPER(first_name)  FROM employee;
SELECT DISTINCT department from employee;
SELECT SUBSTR(LAST_NAME,-3) FROM employee;

CREATE TABLE incentives (
  E_id INTEGER PRIMARY KEY,
  incentive_date date,
  incentive_amount integer
);
INSERT INTO incentives VALUES (1,'23-06-08',34000);
INSERT INTO incentives VALUES (2,'19-01-03',45000);
INSERT INTO incentives VALUES (3,'20-06-19',23000);
INSERT INTO incentives VALUES (4,'21-12-27',32000);
INSERT INTO incentives VALUES (5,'22-04-14',14000);
SELECT*FROM incentives;
