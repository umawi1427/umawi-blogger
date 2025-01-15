CREATE TABLE users (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(200),
    Email VARCHAR(200),
    date DATE,
    Password VARCHAR(200),
    Phonenumber VARCHAR(20),
    Gender ENUM('male', 'female'),
    Country VARCHAR(100),
    ProfileImage VARCHAR(255)
);