-- Admin Table
CREATE TABLE Admin (
    AdminID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255)
);

-- Survey Table
CREATE TABLE Survey (
    SurveyID INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255),
    Description TEXT
);

-- AdminSurvey Table
CREATE TABLE AdminSurvey (
    AdminSurveyID INT AUTO_INCREMENT PRIMARY KEY,
    AdminID INT,
    SurveyID INT,
    FOREIGN KEY (AdminID) REFERENCES Admin(AdminID),
    FOREIGN KEY (SurveyID) REFERENCES Survey(SurveyID)
);

-- Section Table
CREATE TABLE Section (
    SectionID INT AUTO_INCREMENT PRIMARY KEY,
    SurveyID INT,
    Title VARCHAR(255),
    FOREIGN KEY (SurveyID) REFERENCES Survey(SurveyID)
);

-- Question Table
CREATE TABLE Question (
    QuestionID INT AUTO_INCREMENT PRIMARY KEY,
    SectionID INT,
    QuestionText TEXT,
    IsMultipleChoice BOOLEAN,
    FOREIGN KEY (SectionID) REFERENCES Section(SectionID)
);

-- Option Table
CREATE TABLE Option (
    OptionID INT AUTO_INCREMENT PRIMARY KEY,
    QuestionID INT,
    OptionText TEXT,
    FOREIGN KEY (QuestionID) REFERENCES Question(QuestionID)
);

-- User Table
CREATE TABLE User (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255)
);

-- UserResponse Table
CREATE TABLE UserResponse (
    UserResponseID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    QuestionID INT,
    OptionID INT,
    ResponseText TEXT,
    ResponseDate TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (QuestionID) REFERENCES Question(QuestionID),
    FOREIGN KEY (OptionID) REFERENCES Option(OptionID)
);
