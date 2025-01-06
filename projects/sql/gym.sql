
create database project;
use project;

CREATE TABLE MembershipTypes (
    MembershipTypeID INT PRIMARY KEY,
    MembershipName VARCHAR(50),
    DurationMonths INT,
    Price DECIMAL(10, 2)
);


INSERT INTO MembershipTypes (MembershipTypeID, MembershipName, DurationMonths, Price) VALUES
(1, 'Basic', 1, 30.00),
(2, 'Standard', 3, 75.00),
(3, 'Premium', 6, 150.00),
(4, 'Annual', 12, 280.00),
(5, 'Student', 6, 100.00),
(6, 'Family', 12, 500.00),
(7, 'Corporate', 12, 450.00),
(8, 'Senior', 6, 90.00),
(9, 'Monthly Pass', 1, 35.00),
(10, 'Trial', 1, 20.00),
(11, 'VIP', 12, 600.00),
(12, 'Group', 3, 200.00),
(13, 'Weekend', 1, 25.00),
(14, 'Holistic', 6, 120.00),
(15, 'All Access', 12, 550.00),
(16, 'Weekend VIP', 3, 150.00),
(17, 'Youth', 6, 80.00),
(18, 'Athlete', 6, 110.00),
(19, 'Wellness', 12, 320.00),
(20, 'Fitness', 1, 40.00),
(21, 'Basic Plus', 3, 85.00),
(22, 'Elite', 12, 700.00),
(23, 'Seasonal', 6, 130.00),
(24, 'Fit Family', 12, 480.00),
(25, 'Gym Only', 3, 60.00),
(26, 'Gym & Pool', 6, 140.00),
(27, 'Pool Only', 1, 25.00),
(28, 'Personal Trainer', 1, 50.00),
(29, 'Gold', 12, 400.00),
(30, 'Silver', 6, 100.00);


CREATE TABLE Members (
    MemberID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    MembershipTypeID INT,
    JoinDate DATE,
    FOREIGN KEY (MembershipTypeID) REFERENCES MembershipTypes(MembershipTypeID)
);

INSERT INTO Members (MemberID, FirstName, LastName, MembershipTypeID, JoinDate) VALUES
(1, 'John', 'Doe', 1, '2024-01-01'),
(2, 'Jane', 'Smith', 2, '2024-01-05'),
(3, 'Alice', 'Johnson', 3, '2024-02-01'),
(4, 'Bob', 'Williams', 4, '2024-02-15'),
(5, 'Charlie', 'Brown', 5, '2024-03-01'),
(6, 'David', 'Jones', 6, '2024-03-10'),
(7, 'Emma', 'Garcia', 7, '2024-04-01'),
(8, 'Fiona', 'Martinez', 8, '2024-04-20'),
(9, 'George', 'Hernandez', 9, '2024-05-01'),
(10, 'Hannah', 'Young', 10, '2024-05-15'),
(11, 'Isaac', 'Moore', 11, '2024-06-01'),
(12, 'Jack', 'Taylor', 12, '2024-06-10'),
(13, 'Kylie', 'Anderson', 13, '2024-07-01'),
(14, 'Liam', 'Thomas', 14, '2024-07-15'),
(15, 'Mia', 'Jackson', 15, '2024-08-01'),
(16, 'Noah', 'White', 16, '2024-08-10'),
(17, 'Olivia', 'Harris', 17, '2024-09-01'),
(18, 'Paul', 'Martin', 18, '2024-09-15'),
(19, 'Quinn', 'Thompson', 19, '2024-10-01'),
(20, 'Rachel', 'Garcia', 20, '2024-10-10'),
(21, 'Sam', 'Roberts', 21, '2024-11-01'),
(22, 'Tina', 'Clark', 22, '2024-11-15'),
(23, 'Ursula', 'Lewis', 23, '2024-12-01'),
(24, 'Victor', 'Walker', 24, '2024-12-10'),
(25, 'Wendy', 'Hall', 25, '2024-01-20'),
(26, 'Xander', 'Allen', 26, '2024-02-01'),
(27, 'Yara', 'King', 27, '2024-03-05'),
(28, 'Zach', 'Scott', 28, '2024-04-01'),
(29, 'Anna', 'Nelson', 29, '2024-05-10'),
(30, 'Brian', 'Adams', 30, '2024-06-01');



CREATE TABLE Trainers (
    TrainerID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Specialization VARCHAR(50)
);

INSERT INTO Trainers (TrainerID, FirstName, LastName, Specialization) VALUES
(1, 'Alice', 'Wright', 'Cardio'),
(2, 'Bob', 'Kane', 'Strength Training'),
(3, 'Cathy', 'Owen', 'Yoga'),
(4, 'David', 'Parker', 'Pilates'),
(5, 'Ella', 'Morgan', 'HIIT'),
(6, 'Frank', 'Lee', 'CrossFit'),
(7, 'Grace', 'Morris', 'Functional Training'),
(8, 'Harry', 'Bell', 'Boxing'),
(9, 'Ivy', 'Young', 'Stretching'),
(10, 'James', 'Cole', 'Nutrition'),
(11, 'Kelly', 'Ward', 'Cardio'),
(12, 'Liam', 'Hughes', 'Strength Training'),
(13, 'Mia', 'Wood', 'Yoga'),
(14, 'Nathan', 'Watson', 'Pilates'),
(15, 'Olivia', 'Price', 'HIIT'),
(16, 'Paul', 'Butler', 'CrossFit'),
(17, 'Quinn', 'Ross', 'Functional Training'),
(18, 'Rachel', 'Peterson', 'Boxing'),
(19, 'Steve', 'Gray', 'Stretching'),
(20, 'Tina', 'Cooper', 'Nutrition'),
(21, 'Ulysses', 'Richardson', 'Cardio'),
(22, 'Vera', 'Cox', 'Strength Training'),
(23, 'Will', 'Jenkins', 'Yoga'),
(24, 'Xena', 'Curtis', 'Pilates'),
(25, 'Yosef', 'Rogers', 'HIIT'),
(26, 'Zara', 'Wood', 'CrossFit'),
(27, 'Anna', 'Murray', 'Functional Training'),
(28, 'Brian', 'Bailey', 'Boxing'),
(29, 'Chloe', 'Reed', 'Stretching'),
(30, 'Daniel', 'Gray', 'Nutrition');




CREATE TABLE AttendanceLogs (
    AttendanceID INT PRIMARY KEY,
    MemberID INT,
    Date DATE,
    TimeIn TIME,
    TimeOut TIME,
    FOREIGN KEY (MemberID) REFERENCES Members(MemberID)
);

INSERT INTO AttendanceLogs (AttendanceID, MemberID, Date, TimeIn, TimeOut) VALUES
(1, 1, '2024-08-01', '08:00:00', '09:00:00'),
(2, 2, '2024-08-01', '09:00:00', '10:00:00'),
(3, 3, '2024-08-01', '10:00:00', '11:00:00'),
(4, 4, '2024-08-01', '11:00:00', '12:00:00'),
(5, 5, '2024-08-01', '12:00:00', '13:00:00'),
(6, 6, '2024-08-01', '13:00:00', '14:00:00'),
(7, 7, '2024-08-01', '14:00:00', '15:00:00'),
(8, 8, '2024-08-01', '15:00:00', '16:00:00'),
(9, 9, '2024-08-01', '16:00:00', '17:00:00'),
(10, 10, '2024-08-01', '17:00:00', '18:00:00'),
(11, 11, '2024-08-02', '08:00:00', '09:00:00'),
(12, 12, '2024-08-02', '09:00:00', '10:00:00'),
(13, 13, '2024-08-02', '10:00:00', '11:00:00'),
(14, 14, '2024-08-02', '11:00:00', '12:00:00'),
(15, 15, '2024-08-02', '12:00:00', '13:00:00'),
(16, 16, '2024-08-02', '13:00:00', '14:00:00'),
(17, 17, '2024-08-02', '14:00:00', '15:00:00'),
(18, 18, '2024-08-02', '15:00:00', '16:00:00'),
(19, 19, '2024-08-02', '16:00:00', '17:00:00'),
(20, 20, '2024-08-02', '17:00:00', '18:00:00'),
(21, 21, '2024-08-03', '08:00:00', '09:00:00'),
(22, 22, '2024-08-03', '09:00:00', '10:00:00'),
(23, 23, '2024-08-03', '10:00:00', '11:00:00'),
(24, 24, '2024-08-03', '11:00:00', '12:00:00'),
(25, 25, '2024-08-03', '12:00:00', '13:00:00'),
(26, 26, '2024-08-03', '13:00:00', '14:00:00'),
(27, 27, '2024-08-03', '14:00:00', '15:00:00'),
(28, 28, '2024-08-03', '15:00:00', '16:00:00'),
(29, 29, '2024-08-03', '16:00:00', '17:00:00'),
(30, 30, '2024-08-03', '17:00:00', '18:00:00');

select * from MembershipTypes; 
select * from Members;
select * from Trainers;
select * from AttendanceLogs;

-- Queries
SELECT * FROM Members WHERE YEAR(JoinDate) = 2024;

SELECT * FROM Members WHERE MembershipTypeID = (SELECT MembershipTypeID FROM MembershipTypes WHERE MembershipName = 'Premium');

SELECT COUNT(*) FROM Members WHERE MembershipTypeID = (SELECT MembershipTypeID FROM MembershipTypes WHERE MembershipName = 'Annual');

SELECT * FROM AttendanceLogs WHERE MemberID = 1;

SELECT * FROM Trainers WHERE Specialization = 'Cardio'; 

SELECT AVG(Price) FROM MembershipTypes;

SELECT * FROM Members WHERE MONTH(JoinDate) = 1 AND YEAR(JoinDate) = 2024 ;

SELECT COUNT(*) FROM AttendanceLogs WHERE Date = '2024-08-01';

SELECT * FROM MembershipTypes WHERE Price > 100.00;

SELECT MemberID FROM AttendanceLogs GROUP BY MemberID HAVING COUNT(*) > 5;

SELECT * FROM Members WHERE MembershipTypeID = (SELECT MembershipTypeID FROM MembershipTypes WHERE MembershipName = 'Student');

SELECT * FROM AttendanceLogs WHERE Date BETWEEN '2024-08-01' AND '2024-08-02';

SELECT * FROM Members WHERE MembershipTypeID = (SELECT MembershipTypeID FROM MembershipTypes WHERE MembershipName = 'Basic');

SELECT * FROM Trainers WHERE Specialization IN ('Boxing', 'Yoga');

SELECT COUNT(DISTINCT MembershipName) FROM MembershipTypes;


-- Subqueries Queries 


SELECT FirstName, LastName
FROM Members
WHERE MembershipTypeID = (SELECT MembershipTypeID FROM MembershipTypes WHERE MembershipName = 'VIP');   


SELECT FirstName, LastName
FROM Members
WHERE JoinDate > (SELECT AVG(JoinDate) FROM Members);


SELECT FirstName, LastName
FROM Trainers
WHERE Specialization IN (SELECT Specialization FROM Trainers WHERE Specialization IN ('Yoga', 'Pilates'));
 
 
SELECT MembershipName, DurationMonths, Price
FROM MembershipTypes
WHERE Price = (SELECT MAX(Price) FROM MembershipTypes);


SELECT FirstName, LastName
FROM Members
WHERE MemberID IN (
    SELECT MemberID 
    FROM AttendanceLogs 
    GROUP BY MemberID, Date
    HAVING COUNT(AttendanceID) >= 3
);


--  JOINS

SELECT Members.FirstName, Members.LastName, MembershipTypes.MembershipName, MembershipTypes.Price
FROM Members
JOIN MembershipTypes ON Members.MembershipTypeID = MembershipTypes.MembershipTypeID;   


SELECT AttendanceLogs.Date, AttendanceLogs.TimeIn, AttendanceLogs.TimeOut, Members.FirstName, Members.LastName
FROM AttendanceLogs
JOIN Members ON AttendanceLogs.MemberID = Members.MemberID;


SELECT T1.FirstName, T1.LastName, T1.Specialization
FROM Trainers T1
JOIN Trainers T2 ON T1.Specialization = T2.Specialization
WHERE T2.FirstName = 'Alice' AND T2.LastName = 'Wright';


SELECT Members.FirstName AS MemberFirstName, Members.LastName AS MemberLastName, Trainers.FirstName AS TrainerFirstName, Trainers.LastName AS TrainerLastName
FROM Members
JOIN Trainers ON Members.MemberID = Trainers.TrainerID;


SELECT Members.FirstName, Members.LastName, COUNT(AttendanceLogs.AttendanceID) AS TotalVisits
FROM Members
JOIN AttendanceLogs ON Members.MemberID = AttendanceLogs.MemberID
GROUP BY Members.FirstName, Members.LastName;
