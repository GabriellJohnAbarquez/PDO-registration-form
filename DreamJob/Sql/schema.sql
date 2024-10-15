CREATE TABLE DreamJob (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    section VARCHAR (50),
    dream_job VARCHAR (50),
    reason VARCHAR (255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);