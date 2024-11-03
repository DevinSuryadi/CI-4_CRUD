-- Create 'identitas' table
CREATE TABLE IF NOT EXISTS identitas (
    npm VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(100) NOT NULL
);

-- Insert data into 'identitas' table
INSERT INTO identitas (npm, nama, alamat) 
VALUES ('230045', 'Devin Suryadi', 'Jl. Contoh No. 123');

-- Create 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    level INT NOT NULL,
    npm VARCHAR(20),
    FOREIGN KEY (npm) REFERENCES identitas(npm) ON DELETE SET NULL
);

-- Insert data into 'users' table
INSERT INTO users (username, pass, level, npm) 
VALUES 
    ('devin', MD5('passworddevin'), 1, '230045'),
    ('admin', MD5('passwordadmin'), 2, NULL);
