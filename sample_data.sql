-- Admin Table
INSERT INTO Admin (AdminID, Username, Password)
VALUES
    (1, 'admin1', 'password1'),
    (2, 'admin2', 'password2'),
    (3, 'admin3', 'password3'),
    (4, 'admin4', 'password4'),
    (5, 'admin5', 'password5');

-- Survey Table
INSERT INTO Survey (SurveyID, Title, Description)
VALUES
    (1, 'Employee Satisfaction Survey', 'Gather feedback from employees about their work experience.'),
    (2, 'Customer Feedback Survey', 'Collect customer opinions about our products and services.'),
    (3, 'Product Improvement Survey', 'Seek input on how we can enhance our existing products.'),
    (4, 'Training Effectiveness Survey', 'Evaluate the effectiveness of training programs.'),
    (5, 'Event Experience Survey', 'Gauge participant satisfaction after an event.');

-- AdminSurvey Table
INSERT INTO AdminSurvey (AdminSurveyID, AdminID, SurveyID)
VALUES
    (1, 1, 1),
    (2, 2, 2),
    (3, 1, 3),
    (4, 3, 4),
    (5, 4, 5);

-- Section Table
INSERT INTO Section (SectionID, SurveyID, Title)
VALUES
    (1, 1, 'Work Environment'),
    (2, 1, 'Communication'),
    (3, 2, 'Product Satisfaction'),
    (4, 3, 'Product Features'),
    (5, 4, 'Content Quality');

-- Question Table
INSERT INTO Question (QuestionID, SectionID, QuestionText, IsMultipleChoice)
VALUES
    (1, 1, 'How satisfied are you with the office environment?', TRUE),
    (2, 1, 'Are you comfortable with the available facilities?', TRUE),
    (3, 2, 'Do you feel well-informed about company updates?', TRUE),
    (4, 2, 'Do you have a clear understanding of your tasks?', TRUE),
    (5, 3, 'Rate your satisfaction with the product quality.', TRUE),
    (6, 3, 'Rate your satisfaction with the product pricing.', TRUE),
    (7, 4, 'What features would you like to see in the product?', FALSE),
    (8, 4, 'What improvements can be made to the user interface?', FALSE),
    (9, 5, 'How engaging was the event content?', TRUE),
    (10, 5, 'Did you find the event\'s schedule convenient?', TRUE);

-- Option Table
INSERT INTO Option (OptionID, QuestionID, OptionText)
VALUES
    (1, 1, 'Very Satisfied'),
    (2, 1, 'Satisfied'),
    (3, 1, 'Neutral'),
    (4, 1, 'Unsatisfied'),
    (5, 1, 'Very Unsatisfied'),
    (6, 2, 'Yes'),
    (7, 2, 'No'),
    (8, 3, 'Very Well-Informed'),
    (9, 3, 'Moderately Informed'),
    (10, 3, 'Not Well-Informed'),
    (11, 4, 'Clear Understanding'),
    (12, 4, 'Somewhat Clear'),
    (13, 4, 'Not Clear'),
    (14, 5, 'Very Satisfied'),
    (15, 5, 'Satisfied'),
    (16, 5, 'Neutral'),
    (17, 5, 'Unsatisfied'),
    (18, 5, 'Very Unsatisfied'),
    (19, 6, 'Very Satisfied'),
    (20, 6, 'Satisfied'),
    (21, 6, 'Neutral'),
    (22, 6, 'Unsatisfied'),
    (23, 6, 'Very Unsatisfied');

-- User Table
INSERT INTO User (UserID, Username, Password)
VALUES
    (1, 'user1', 'password1'),
    (2, 'user2', 'password2'),
    (3, 'user3', 'password3'),
    (4, 'user4', 'password4'),
    (5, 'user5', 'password5');

-- UserResponse Table
INSERT INTO UserResponse (UserResponseID, UserID, QuestionID, OptionID, ResponseText, ResponseDate)
VALUES
    (1, 1, 1, 1, NULL, '2023-08-01 10:00:00'),
    (2, 2, 1, 2, NULL, '2023-08-01 11:00:00'),
    (3, 3, 1, 3, NULL, '2023-08-01 12:00:00'),
    (4, 4, 1, 4, NULL, '2023-08-01 13:00:00'),
    (5, 5, 1, 5, NULL, '2023-08-01 14:00:00'),
    -- ... repeat for other questions and sections ...
    (26, 1, 10, NULL, 'The schedule was convenient for me.', '2023-08-03 10:00:00'),
    (27, 2, 10, NULL, 'The event content was engaging and informative.', '2023-08-03 11:00:00'),
    (28, 3, 10, NULL, 'I enjoyed the event but had some schedule conflicts.', '2023-08-03 12:00:00'),
    (29, 4, 10, NULL, 'I found the event useful, but the content could have been more detailed.', '2023-08-03 13:00:00'),
    (30, 5, 10, NULL, 'The event provided valuable insights, and I appreciate the effort.', '2023-08-03 14:00:00');
