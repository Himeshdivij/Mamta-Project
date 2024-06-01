CREATE TABLE IF NOT EXISTS `child_information`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(50) NOT NULL,
    `middlename` VARCHAR(50),
    `lastname` VARCHAR(50) NOT NULL,
    `dob` DATE NOT NULL,
    `aadhar` VARCHAR(12) NOT NULL,
    `gender` ENUM('Male', 'Female') NOT NULL
);
