SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `jobvertex`
--
CREATE DATABASE IF NOT EXISTS `jobvertex` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobvertex`;
-- --------------------------------------------------------
--
-- Table structure for table `applicant`
--
CREATE TABLE `applicant` (
  `username` varchar(255) NOT NULL,
  `minqualification` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `applicant`
--
INSERT INTO `applicant` (`username`, `minqualification`)
VALUES ('app1', 'BSc'),
  ('app2', 'MSc'),
  ('app3', 'PhD');
-- --------------------------------------------------------
--
-- Table structure for table `applies`
--
CREATE TABLE `applies` (
  `username` varchar(255) NOT NULL,
  `vacancyId` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `applies`
--
INSERT INTO `applies` (`username`, `vacancyId`)
VALUES ('app1', 0),
  ('app2', 1),
  ('app3', 2);
-- --------------------------------------------------------
--
-- Table structure for table `employer`
--
CREATE TABLE `employer` (
  `username` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `employer`
--
INSERT INTO `employer` (`username`, `website`, `companyname`)
VALUES ('tesla', 'http://tesla.com', 'Tesla'),
  ('meta', 'http://meta.com', 'Meta'),
  ('deepmind', 'http://deepmind.com', 'DeepMind');
-- --------------------------------------------------------
--
-- Table structure for table `user`
--
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `user`
--
INSERT INTO `user` (
    `username`,
    `password`,
    `view`,
    `name`,
    `email`,
    `telephone`
  )
VALUES (
    'app1',
    MD5('123'),
    'Applicant',
    'Tom',
    'tom@mail.com',
    '0111234567'
  ),
  (
    'app2',
    MD5('123'),
    'Applicant',
    'Jerry',
    'jerry@mail.com',
    '0221234567'
  ),
  (
    'app3',
    MD5('123'),
    'Applicant',
    'Jack',
    'jack@mail.com',
    '0331234567'
  ),
  (
    'ucsc',
    MD5('ucsc'),
    'Admin',
    'UCSC',
    'admin@ucsc.com',
    '9991234567'
  ),
  (
    'tesla',
    MD5('123'),
    'Employer',
    'Tesla',
    'elon@tesla.com',
    '1111234567'
  ),
  (
    'meta',
    MD5('123'),
    'Employer',
    'Meta',
    'mark@meta.com',
    '1221234567'
  ),
  (
    'deepmind',
    MD5('123'),
    'Employer',
    'DeepMind',
    'sundar@deepmind.com',
    '1331234567'
  );
-- --------------------------------------------------------
--
-- Table structure for table `vacancy`
--
CREATE TABLE `vacancy` (
  `vacancyId` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `minqualification` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `vacancy`
--
INSERT INTO `vacancy` (
    `vacancyId`,
    `username`,
    `name`,
    `details`,
    `minqualification`
  )
VALUES (
    0,
    'tesla',
    'Computer Vision Engineer',
    'Tesla auto-driving team is looking for Software Engineering Experts with an excellent focus on solving complex AI/ML problems.',
    'BSc'
  ),
  (
    1,
    'meta',
    'Big Data Analysis',
    'At Meta, you will help clients in developing and implementing data analyses, data collection systems and other strategies that optimize statistical efficiency and quality.',
    'MSc'
  ),
  (
    2,
    'deepmind',
    'Machine Learning Engineer',
    'The Machine Learning Engineer is responsible for developing and optimizing our machine learning systems with deep knowledge of math and statistics. This role needs to be able to conduct and interpret statistical analyses (multivariate analysis).',
    'PhD'
  );
--
-- Indexes for dumped tables
--
--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
ADD PRIMARY KEY (`username`);
--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
ADD PRIMARY KEY (`username`, `vacancyId`),
  ADD KEY `applies_ibfk_2` (`vacancyId`);
--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
ADD PRIMARY KEY (`username`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`username`);
--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
ADD PRIMARY KEY (`vacancyId`),
  ADD KEY `vacancy_ibfk_1` (`username`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
MODIFY `vacancyId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- Constraints for dumped tables
--
--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Constraints for table `applies`
--
ALTER TABLE `applies`
ADD CONSTRAINT `applies_ibfk_1` FOREIGN KEY (`username`) REFERENCES `applicant` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applies_ibfk_2` FOREIGN KEY (`vacancyId`) REFERENCES `vacancy` (`vacancyId`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`username`) REFERENCES `employer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;