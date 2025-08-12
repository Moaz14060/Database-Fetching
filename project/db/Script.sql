-- Creation of the table student
create table Student(
ID int primary key ,
FName varchar(100),
LName varchar(100),
CGPA float,
Age int);

-- Insertion of the data
insert into Student value(22010164, "Omar", "Hassan", 2.67, 20);
insert into Student value(22010153, "Ali", "Alaa", 3.64, 20);
insert into Student value(22010140, "Abdulla", "Atef", 3.31, 20);
insert into Student value(22010240, "Mahmoud", "El-Sherbiny", 3.38, 20);
insert into Student value(22010261, "Moaz", "Ahmed", 3.49, 20);


-- selection of the data
select* from Student;
