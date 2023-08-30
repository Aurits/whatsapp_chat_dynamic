-- Create Admin table
CREATE TABLE Admin (
    AdminID INT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255)
);

-- Create Survey table
CREATE TABLE Survey (
    SurveyID INT PRIMARY KEY,
    Title VARCHAR(255),
    Description TEXT
);

-- Create AdminSurvey table
CREATE TABLE AdminSurvey (
    AdminSurveyID INT PRIMARY KEY,
    AdminID INT,
    SurveyID INT,
    FOREIGN KEY (AdminID) REFERENCES Admin(AdminID),
    FOREIGN KEY (SurveyID) REFERENCES Survey(SurveyID)
);

-- Create Section table
CREATE TABLE Section (
    SectionID INT PRIMARY KEY,
    SurveyID INT,
    Title VARCHAR(255),
    FOREIGN KEY (SurveyID) REFERENCES Survey(SurveyID)
);

-- Create Question table
CREATE TABLE Question (
    QuestionID INT PRIMARY KEY,
    SectionID INT,
    QuestionText TEXT,
    IsMultipleChoice BOOLEAN,
    FOREIGN KEY (SectionID) REFERENCES Section(SectionID)
);

-- Create Option table
CREATE TABLE Option (
    OptionID INT PRIMARY KEY,
    QuestionID INT,
    OptionText VARCHAR(255),
    FOREIGN KEY (QuestionID) REFERENCES Question(QuestionID)
);

-- Create User table
CREATE TABLE User (
    UserID INT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255)
);

-- Create UserResponse table
CREATE TABLE UserResponse (
    UserResponseID INT PRIMARY KEY,
    UserID INT,
    QuestionID INT,
    OptionID INT,
    ResponseText TEXT,
    ResponseDate TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (QuestionID) REFERENCES Question(QuestionID),
    FOREIGN KEY (OptionID) REFERENCES Option(OptionID)
);
