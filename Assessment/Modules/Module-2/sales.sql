create table salesman
(salesman_id number(1) primary key,
name varchar(20) not null,
city varchar(20) not null,
commission number(4,2) not null);

create table customer
(customer_id number(2) primary key,
cust_name varchar(20) not null,
city varchar(20) not null,
grade number(3) not null,
salesman_id references salesman(salesman_id) on delete set null);

create table orders
(ord_no number(2) primary key,
pur_amt number(7,2) not null,
ord_date date not null,
customer_id references customer(customer_id) on delete set null,
salesman_id references salesman(salesman_id) on delete set null);

insert into salesman values(11,'Pranav','Karwar',200);
insert into salesman values(24,'Prasanna','Bengalore',300);
insert into salesman values(39,'Prajwal','Kodagu',100);
insert into salesman values(44,'Pooja','Hubli',500.5);
insert into salesman values(15,'Prokta','Mysore',200.2);

insert into customer values(101,'Bhargav','Mysore',1,15);
insert into customer values(206,'Ramya','Bengalore',3,24);
insert into customer values(225,'Rajesh','Hubli',2,39);
insert into customer values(324,'Ravi','Mangalore',5,44);
insert into customer values(456,'Rajdeep','Belagavi',3,15);
insert into customer values(501,'Raghu','Dharavad',4,39);
insert into customer values(300,'Bhavya','Bengalore',1,15);

insert into orders values(5,10000,'25-03-2020',101,11);
insert into orders values(10,5000,'25-03-2020',456,15);
insert into orders values(7,9500,'30-04-2020',225,44);
insert into orders values(11,8700,'07-07-2020',324,24);
insert into orders values(17,1500,'07-07-2020',206,39);

select grade, count(*)
from customer
group by grade
having grade > (select avg(grade)
                from customer 
                where city = 'Bengalore');
                
select salesman_id, name
from salesman s
where 1<(select count(*)
         from customer c
         where s.salesman_id = c.salesman_id);

select s.salesman_id, s.name, 'match' as result
from salesman s, customer c
where s.city = c.city
and s.salesman_id = c.salesman_id
union
select s.salesman_id, s.name, 'no match' as result
from salesman s, customer c
where s.city != c.city
and s.salesman_id = c.salesman_id;

create view max_sale as
select  s.salesman_id, s.name, o.ord_date
from salesman s, orders o 
where s.salesman_id = o.salesman_id
and o.pur_amt = (select max(pur_amt)
                from orders o1
                where o.ord_date = o1.ord_date);
select * from max_sale;

select * from salesman;
select * from orders;

delete from salesman where salesman_id = 39;

select * from salesman;
select * from orders;