CREATE TABLE IF NOT EXISTS `mothers_iformation` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(50) NOT NULL,
    `middlename` VARCHAR(50),
    `lastname` VARCHAR(50) NOT NULL,
    `dob` DATE NOT NULL,
    `Aadhar` VARCHAR(12) NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `bank` VARCHAR(20) NOT NULL,
    `ifsc` VARCHAR(11) NOT NULL,
    `category` VARCHAR(10) NOT NULL,
    `address` TEXT NOT NULL,
    `have_child` VARCHAR(3) NOT NULL
);
