--MAKE SURE TO ADD A USER TO THE DB FIRST IN THE SAMPLES
-- Insert a sample survey into the database
INSERT INTO Survey (Title, Description)
VALUES
    ('Love and Relationships Survey', 'A survey about the complexities of love and relationships.');

-- Insert sections for the survey
INSERT INTO Section (SurveyID, Title)
VALUES
    (1, 'Love and Emotions'),
    (1, 'Relationship Challenges'),
    (1, 'Communication in Love');

-- Insert questions for each section with a mix of text feedback and multiple-choice options
-- Section: Love and Emotions
INSERT INTO Question (SectionID, QuestionText, IsMultipleChoice)
VALUES
    (1, 'How would you describe the feeling of being in love?', FALSE),
    (1, 'Have you ever experienced conflicting emotions in a relationship? If so, please describe.', FALSE),
    (1, 'On a scale of 1 to 5, how intense is your love for your partner?', TRUE);

-- Insert options for the multiple-choice question
-- Question: How intense is your love for your partner?
INSERT INTO Option (QuestionID, OptionText)
VALUES
    (3, '1 - Not intense at all'),
    (3, '2 - Slightly intense'),
    (3, '3 - Moderately intense'),
    (3, '4 - Very intense'),
    (3, '5 - Extremely intense');

-- Section: Relationship Challenges
INSERT INTO Question (SectionID, QuestionText, IsMultipleChoice)
VALUES
    (2, 'What do you consider the biggest challenge in your current relationship?', FALSE),
    (2, 'How do you usually resolve conflicts with your partner?', FALSE),
    (2, 'On a scale of 1 to 5, how challenging is maintaining trust in your relationship?', TRUE);

-- Insert options for the multiple-choice question
-- Question: How challenging is maintaining trust in your relationship?
INSERT INTO Option (QuestionID, OptionText)
VALUES
    (6, '1 - Not challenging at all'),
    (6, '2 - Slightly challenging'),
    (6, '3 - Moderately challenging'),
    (6, '4 - Very challenging'),
    (6, '5 - Extremely challenging');

-- Section: Communication in Love
INSERT INTO Question (SectionID, QuestionText, IsMultipleChoice)
VALUES
    (3, 'Do you feel comfortable expressing your feelings to your partner?', FALSE),
    (3, 'How important is effective communication in a relationship?', TRUE);

-- Insert options for the multiple-choice question
-- Question: How important is effective communication in a relationship?
INSERT INTO Option (QuestionID, OptionText)
VALUES
    (8, '1 - Not important at all'),
    (8, '2 - Slightly important'),
    (8, '3 - Moderately important'),
    (8, '4 - Very important'),
    (8, '5 - Extremely important');
