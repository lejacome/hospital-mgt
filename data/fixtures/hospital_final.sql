-- DBTools Manager Professional (Enterprise Edition)
-- Database Dump for: hospital
-- Backup Generated in: 6/29/2011 6:47:55 AM
-- Database Server Version: MySQL 5.1.33

-- USEGO

SET FOREIGN_KEY_CHECKS=0;
-- GO


--
-- Dumping Tables
--

--
-- Table: department
--
CREATE TABLE `department` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (100), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: department
--
BEGIN;
-- GO
INSERT INTO `department` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES(1, 'Cardiology', '1', '2011-05-11', '2011-06-23');
-- GO
INSERT INTO `department` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES(2, 'Front Desk', '1', '2011-05-17', '2011-05-17');
-- GO
COMMIT;
-- GO

--
-- Table: designation
--
CREATE TABLE `designation` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`department_id` integer (11), 
	`title` varchar (100) NOT NULL, 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: designation
--
BEGIN;
-- GO
INSERT INTO `designation` (`id`, `department_id`, `title`, `status`, `created_at`, `updated_at`) VALUES(1, 1, 'Surgen', '1', '2011-05-11', '2011-06-23');
-- GO
INSERT INTO `designation` (`id`, `department_id`, `title`, `status`, `created_at`, `updated_at`) VALUES(2, 2, 'Receptionist', '1', '2011-05-17', '2011-06-03');
-- GO
COMMIT;
-- GO

--
-- Index: FK_designation_department
--
ALTER TABLE `hospital`.`designation` ADD INDEX `FK_designation_department` (`department_id` );
-- GO

--
-- Table: dosage
--
CREATE TABLE `dosage` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (50), 
	`status` varchar (10),
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: dosage
--
BEGIN;
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(1, 'Once a Day', '1');
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(2, '1+1', '1');
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(3, '1+1+1', '1');
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(4, 'Once a Week', '1');
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(5, 'Once a Month', '1');
-- GO
INSERT INTO `dosage` (`id`, `title`, `status`) VALUES(6, '1', '0');
-- GO
COMMIT;
-- GO

--
-- Table: duty_place
--
CREATE TABLE `duty_place` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (100), 
	`description` varchar (255), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: duty_place
--
BEGIN;
-- GO
INSERT INTO `duty_place` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES(1, 'Reception', NULL, '1', '2011-06-03', '2011-06-03');
-- GO
INSERT INTO `duty_place` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES(2, 'Emergency Room', NULL, '1', '2011-06-03', '2011-06-03');
-- GO
INSERT INTO `duty_place` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES(3, 'Operation Theater', '', '1', '2011-06-03', '2011-06-29');
-- GO
INSERT INTO `duty_place` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES(4, 'Pharmacy', NULL, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Table: duty_roster
--
CREATE TABLE `duty_roster` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`employee_id` integer (11), 
	`duty_place_id` integer (11), 
	`duty_date` date, 
	`from` varchar (10), 
	`to` varchar (10), 
	`present` varchar (5), 
	`substitute_id` integer (11), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: duty_roster
--
BEGIN;
-- GO
INSERT INTO `duty_roster` (`id`, `employee_id`, `duty_place_id`, `duty_date`, `from`, `to`, `present`, `substitute_id`, `status`, `created_at`, `updated_at`) VALUES(1, 1, 1, '2011-06-03', '0730', '1400', NULL, 2, '1', '2011-06-03', '2011-06-03');
-- GO
INSERT INTO `duty_roster` (`id`, `employee_id`, `duty_place_id`, `duty_date`, `from`, `to`, `present`, `substitute_id`, `status`, `created_at`, `updated_at`) VALUES(2, 3, 2, '2011-06-03', '0730', '1400', NULL, 2, '1', '2011-06-03', '2011-06-03');
-- GO
INSERT INTO `duty_roster` (`id`, `employee_id`, `duty_place_id`, `duty_date`, `from`, `to`, `present`, `substitute_id`, `status`, `created_at`, `updated_at`) VALUES(3, 1, 1, '2011-06-17', '0700', '1300', NULL, 2, '1', '2011-06-17', '2011-06-17');
-- GO
INSERT INTO `duty_roster` (`id`, `employee_id`, `duty_place_id`, `duty_date`, `from`, `to`, `present`, `substitute_id`, `status`, `created_at`, `updated_at`) VALUES(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2011-06-21', '2011-06-21');
-- GO
COMMIT;
-- GO

--
-- Index: FK_duty_roster_employee
--
ALTER TABLE `hospital`.`duty_roster` ADD INDEX `FK_duty_roster_employee` (`employee_id` );
-- GO

--
-- Index: FK_duty_roster_place
--
ALTER TABLE `hospital`.`duty_roster` ADD INDEX `FK_duty_roster_place` (`duty_place_id` );
-- GO

--
-- Index: FK_duty_roster_substitute
--
ALTER TABLE `hospital`.`duty_roster` ADD INDEX `FK_duty_roster_substitute` (`substitute_id` );
-- GO

--
-- Table: employee
--
CREATE TABLE `employee` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`department_id` integer (11), 
	`designation_id` integer (11), 
	`role_id` integer (11), 
	`emp_category` varchar (10), 
	`name` varchar (100), 
	`cnic` varchar (50), 
	`dob` date, 
	`gender` varchar (10), 
	`mail_address` varchar (255), 
	`contact_res` varchar (50), 
	`contact_cell` varchar (50), 
	`contact_off` varchar (50), 
	`emergency_contact` varchar (50), 
	`employment_date` date, 
	`local_resident` varchar (3), 
	`qualification` varchar (1000), 
	`visit_fee` integer (5), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: employee
--
BEGIN;
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(1, 1, 1, 3, 'doc', 'Zeeshan Cheema', '61101-5487541-5', '1980-05-01', 'Male', 'C101 islamabad', '654321', '03214524514', '03245122454', '2222222', '2011-05-12', '1', 'hgjghjryfu', 200, '1', '2011-05-12', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(2, 1, 1, 3, 'doc', 'Kashif Hussain', '61246-58457875-5', '1987-05-17', 'Male', '', '', '03004554885', '03251564524', '', '2011-05-17', '0', '', 200, '1', '2011-05-17', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(3, 2, 2, 4, 'staff', 'Fareeha Khan', '', '1988-06-20', 'Female', '', '', '03211234567', '0514532187', '', NULL, '1', '', NULL, '1', '2011-05-17', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(4, NULL, NULL, 2, '1', 'Super Administrator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2011-05-27', '2011-05-27');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(5, 1, 1, 3, 'doc', 'Shehnaz Sheikh', '3215487-5562157-6', NULL, 'Female', '', '', '03005522111', '05124521412', '', '2011-06-22', '0', 'dsfg', 200, '1', '2011-06-22', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(7, 2, 2, 6, 'staff', 'Zaeem Hussain', '', NULL, 'Male', '', '', '03002505342', '03245648487', '', NULL, '1', '', NULL, '1', '2011-06-23', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(8, 2, 2, 4, 'staff', 'Khalid Rafiq', '', NULL, 'Male', '', '', '009265584779', '03145635464', '', NULL, '0', '', NULL, '1', '2011-06-23', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(9, 1, 1, 2, 'doc', 'Athar Khan', '132564-23545-1', '1979-06-29', 'Male', '', '', '0325424554', '0900342212', '', NULL, '1', '', NULL, '0', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(10, 1, 1, 3, 'doc', 'Khuram Nawaz', '123554-665458-32', '1983-06-29', 'Male', '', '', '0300454801', '0324523412', '', '2011-06-12', '1', '', NULL, '1', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(11, 1, 1, 3, 'doc', 'Athar Khan', '', '1969-06-29', 'Male', '', '', '03005522121', '03453342212', '', NULL, '1', '', NULL, '1', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `employee` (`id`, `department_id`, `designation_id`, `role_id`, `emp_category`, `name`, `cnic`, `dob`, `gender`, `mail_address`, `contact_res`, `contact_cell`, `contact_off`, `emergency_contact`, `employment_date`, `local_resident`, `qualification`, `visit_fee`, `status`, `created_at`, `updated_at`) VALUES(12, 2, 2, 4, 'staff', 'Nauman Khan', '123554-665458-32', NULL, 'Male', '', '', '03004554801', '05124521412', '', '2011-06-15', '1', '', NULL, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Index: FK_employee_department
--
ALTER TABLE `hospital`.`employee` ADD INDEX `FK_employee_department` (`department_id` );
-- GO

--
-- Index: FK_employee_designation
--
ALTER TABLE `hospital`.`employee` ADD INDEX `FK_employee_designation` (`designation_id` );
-- GO

--
-- Index: FK_employee_role
--
ALTER TABLE `hospital`.`employee` ADD INDEX `FK_employee_role` (`role_id` );
-- GO

--
-- Table: lab_report
--
CREATE TABLE `lab_report` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`patient_id` integer (11), 
	`visit_id` integer (11), 
	`lab_test_id` integer (11), 
	`description` varchar (1024), 
	`price` integer (5), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: lab_report
--
BEGIN;
-- GO
INSERT INTO `lab_report` (`id`, `patient_id`, `visit_id`, `lab_test_id`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(1, 1, 1, 1, 'The test is clear. There are no bacteria of any disease in the blood.', 250, NULL, '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `lab_report` (`id`, `patient_id`, `visit_id`, `lab_test_id`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(5, 1, 11, 1, 'There are some fungal bacteria in the blood. further tests must be carried out for proper diagnosis.', 250, '2', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `lab_report` (`id`, `patient_id`, `visit_id`, `lab_test_id`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(6, 1, 11, 1, NULL, 250, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Index: FK_lab_report_patient
--
ALTER TABLE `hospital`.`lab_report` ADD INDEX `FK_lab_report_patient` (`patient_id` );
-- GO

--
-- Index: FK_lab_report_visit
--
ALTER TABLE `hospital`.`lab_report` ADD INDEX `FK_lab_report_visit` (`visit_id` );
-- GO

--
-- Index: FK_lab_report_lab_test
--
ALTER TABLE `hospital`.`lab_report` ADD INDEX `FK_lab_report_lab_test` (`lab_test_id` );
-- GO

--
-- Table: lab_test
--
CREATE TABLE `lab_test` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (255), 
	`description` varchar (500), 
	`price` integer (5), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: lab_test
--
BEGIN;
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(1, 'Blood CP', NULL, 250, '1', '2011-05-29', '2011-05-29');
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(2, 'Urien RE', NULL, 400, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(3, 'LFT', NULL, 350, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(4, 'RFT', NULL, 350, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(5, 'Ultrasound', NULL, 2000, '1', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `lab_test` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(6, 'X-Ray', NULL, 1000, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Table: patient
--
CREATE TABLE `patient` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`id_number` varchar (20), 
	`cnic` varchar (25), 
	`username` varchar (50), 
	`password` varchar (50), 
	`name` varchar (100), 
	`father_name` varchar (50), 
	`dob` date, 
	`gender` varchar (10), 
	`address` varchar (255), 
	`contact_res` varchar (20), 
	`contact_cell` varchar (20), 
	`emergency_contact` varchar (20), 
	`email` varchar (100), 
	`blood_group` varchar (5), 
	`disease` varchar (255), 
	`allergy` varchar (255), 
	`drug_allergy` varchar (255), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: patient
--
BEGIN;
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(1, '01', '61145-5847592-5', NULL, NULL, 'Nazeer Hussain', NULL, '1985-03-08', 'Male', ' kug uy rfuy tf j h', '0515548365', '03122354618', '021835246', NULL, 'A+', 'Hyper Tension', 'NILL', 'Allergic to calcium', '1', '2011-05-17', '2011-06-29');
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(2, NULL, '514244-8528483-8', NULL, NULL, 'Shakeela Khanum', NULL, '1969-09-15', 'Female', '', '', '03335642147', '', NULL, NULL, 'Stomach Disorder', 'Anticonvulsants', 'Sulfa drugs', '1', '2011-05-17', '2011-06-29');
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(3, NULL, '25448-5245478-5', NULL, NULL, 'Masood Aslam', NULL, '1967-01-01', 'Male', '', '', '', '', NULL, NULL, 'Head Ache', 'Itching ', 'Insulin preparations', '1', '2011-06-20', '2011-06-29');
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(4, NULL, '21542-5665384-5', NULL, NULL, 'Yahiya Khan', NULL, '1985-08-06', 'Male', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2011-06-20', '2011-06-20');
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(5, NULL, '61101-9356487-7', NULL, NULL, 'Tehmina Dawood', NULL, '1992-03-10', 'Female', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2011-06-20', '2011-06-20');
-- GO
INSERT INTO `patient` (`id`, `id_number`, `cnic`, `username`, `password`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_res`, `contact_cell`, `emergency_contact`, `email`, `blood_group`, `disease`, `allergy`, `drug_allergy`, `status`, `created_at`, `updated_at`) VALUES(6, NULL, '20476-5847543-2', NULL, NULL, 'Fatima Baber', NULL, '1982-10-20', 'Female', '', '', '03002505665', '', NULL, NULL, 'Stomach Disorder', 'None', 'Allergic to Vitamin ', '1', '2011-06-20', '2011-06-28');
-- GO
COMMIT;
-- GO

--
-- Table: pharma
--
CREATE TABLE `pharma` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`name` varchar (100), 
	`type` varchar (50), 
	`strength` varchar (10), 
	`company` varchar (100), 
	`price` integer (5), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: pharma
--
BEGIN;
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(1, 'Paracetamol', 'Tab', '100 mg', 'Werrik', 30, '1', '2011-05-23', '2011-06-29');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(2, 'Intox', 'Tab', '100 mg', 'Abbot', 15, '1', '2011-06-21', '2011-06-21');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(3, 'Zolid', 'Tab', '4 mg', 'Indox', 27, '1', '2011-06-21', '2011-06-21');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(4, 'Decloran', 'Inj', '10 cc', 'Pak Labs', 45, '1', '2011-06-21', '2011-06-21');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(5, 'Pholchodine', 'Syp', '100 ml', 'Pak Labs', 35, '1', '2011-06-21', '2011-06-21');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(6, 'Indrol', 'Tab', '50mg', 'Bhakai Laboratories', 160, '1', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(7, 'Antiminizol', 'Cap', '500mg', 'Bhakai Laboratories', 250, '1', '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `pharma` (`id`, `name`, `type`, `strength`, `company`, `price`, `status`, `created_at`, `updated_at`) VALUES(8, 'Amoxil', 'Tab', '1000mg', 'Abot Laboratory', 300, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Table: role
--
CREATE TABLE `role` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (50), 
	`status` varchar (10),
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: role
--
BEGIN;
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(1, 'Super Administrator', '0');
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(2, 'Administrator', '1');
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(3, 'Doctor', '1');
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(4, 'Front Desk', '1');
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(5, 'Pharma Assistant', '1');
-- GO
INSERT INTO `role` (`id`, `title`, `status`) VALUES(6, 'Employee', '1');
-- GO
COMMIT;
-- GO

--
-- Table: room
--
CREATE TABLE `room` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (50), 
	`description` varchar (255), 
	`price` integer (5), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: room
--
BEGIN;
-- GO
INSERT INTO `room` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(1, 'VIP Room 1', '', 750, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `room` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(2, 'VIP Room 2', '', 750, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `room` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(3, 'VIP Room 3', NULL, 875, '1', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `room` (`id`, `title`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES(4, 'Vip Room 4', NULL, 1500, '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Table: user
--
CREATE TABLE `user` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`role_id` integer (11), 
	`employee_id` integer (11), 
	`user` varchar (50), 
	`password` varchar (50), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: user
--
BEGIN;
-- GO
INSERT INTO `user` (`id`, `role_id`, `employee_id`, `user`, `password`, `status`, `created_at`, `updated_at`) VALUES(1, 2, 4, 'admin', '4e075844d2e00e4c800c8c62716bed8c', '1', '2011-05-27', '2011-06-29');
-- GO
INSERT INTO `user` (`id`, `role_id`, `employee_id`, `user`, `password`, `status`, `created_at`, `updated_at`) VALUES(2, 3, 1, 'zeeshancheema', '4e075844d2e00e4c800c8c62716bed8c', '1', '2011-06-20', '2011-06-20');
-- GO
INSERT INTO `user` (`id`, `role_id`, `employee_id`, `user`, `password`, `status`, `created_at`, `updated_at`) VALUES(5, 4, 3, 'fareeha', '4e075844d2e00e4c800c8c62716bed8c', '1', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Index: FK_user_employee
--
ALTER TABLE `hospital`.`user` ADD INDEX `FK_user_employee` (`employee_id` );
-- GO

--
-- Index: FK_user_role
--
ALTER TABLE `hospital`.`user` ADD INDEX `FK_user_role` (`role_id` );
-- GO

--
-- Table: visit
--
CREATE TABLE `visit` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`patient_id` integer (11), 
	`doctor_id` integer (11), 
	`ward_bed_id` integer (11), 
	`ward_doc_id` integer (11), 
	`room_id` integer (11), 
	`visit_type` varchar (10), 
	`bp` varchar (10), 
	`temp` varchar (10), 
	`pulse` varchar (10), 
	`diet` varchar (500), 
	`description` varchar (5000), 
	`time` varchar (10), 
	`visit_date` date, 
	`admit_date` date, 
	`discharge_date` date, 
	`fee` varchar (10), 
	`fee_paid` varchar (10), 
	`status` varchar (10), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: visit
--
BEGIN;
-- GO
INSERT INTO `visit` (`id`, `patient_id`, `doctor_id`, `ward_bed_id`, `ward_doc_id`, `room_id`, `visit_type`, `bp`, `temp`, `pulse`, `diet`, `description`, `time`, `visit_date`, `admit_date`, `discharge_date`, `fee`, `fee_paid`, `status`, `created_at`, `updated_at`) VALUES(1, 1, 1, NULL, 2, NULL, 'Indoor', '120/80', '100', '86', 'Normal', 'treated for fever', '1200', '2011-06-29', NULL, NULL, '558', '3', '2', '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `visit` (`id`, `patient_id`, `doctor_id`, `ward_bed_id`, `ward_doc_id`, `room_id`, `visit_type`, `bp`, `temp`, `pulse`, `diet`, `description`, `time`, `visit_date`, `admit_date`, `discharge_date`, `fee`, `fee_paid`, `status`, `created_at`, `updated_at`) VALUES(2, 5, 1, NULL, 1, NULL, 'Indoor', NULL, NULL, NULL, NULL, NULL, '1230', '2011-06-27', NULL, NULL, NULL, NULL, '1', '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `visit` (`id`, `patient_id`, `doctor_id`, `ward_bed_id`, `ward_doc_id`, `room_id`, `visit_type`, `bp`, `temp`, `pulse`, `diet`, `description`, `time`, `visit_date`, `admit_date`, `discharge_date`, `fee`, `fee_paid`, `status`, `created_at`, `updated_at`) VALUES(9, 4, 5, 4, 2, 1, 'Outdoor', '', '', '', '', '', '1130', '2011-06-28', '2011-06-28', NULL, '200', '3', '2', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `visit` (`id`, `patient_id`, `doctor_id`, `ward_bed_id`, `ward_doc_id`, `room_id`, `visit_type`, `bp`, `temp`, `pulse`, `diet`, `description`, `time`, `visit_date`, `admit_date`, `discharge_date`, `fee`, `fee_paid`, `status`, `created_at`, `updated_at`) VALUES(10, 6, 5, 2, 2, NULL, 'Outdoor', '', '', '', '', '', '0900', '2011-06-28', '2011-06-28', NULL, '950', '4', '2', '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `visit` (`id`, `patient_id`, `doctor_id`, `ward_bed_id`, `ward_doc_id`, `room_id`, `visit_type`, `bp`, `temp`, `pulse`, `diet`, `description`, `time`, `visit_date`, `admit_date`, `discharge_date`, `fee`, `fee_paid`, `status`, `created_at`, `updated_at`) VALUES(11, 1, 11, 6, 10, NULL, 'Indoor', '150 / 100', '99', '96', 'On light diet because of stomact disorder', 'Treated for stomach disorder. BP and Pulse high, test suggested', '0900', '2011-06-29', '2011-06-29', NULL, '3260', '4', '2', '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Index: FK_visit_patient
--
ALTER TABLE `hospital`.`visit` ADD INDEX `FK_visit_patient` (`patient_id` );
-- GO

--
-- Index: FK_visit_doctor
--
ALTER TABLE `hospital`.`visit` ADD INDEX `FK_visit_doctor` (`doctor_id` );
-- GO

--
-- Index: FK_visit_ward_bed
--
ALTER TABLE `hospital`.`visit` ADD INDEX `FK_visit_ward_bed` (`ward_bed_id` );
-- GO

--
-- Index: FK_visit_ward_doc
--
ALTER TABLE `hospital`.`visit` ADD INDEX `FK_visit_ward_doc` (`ward_doc_id` );
-- GO

--
-- Index: FK_visit_room
--
ALTER TABLE `hospital`.`visit` ADD INDEX `FK_visit_room` (`room_id` );
-- GO

--
-- Table: visit_medicine
--
CREATE TABLE `visit_medicine` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`patient_id` integer (11), 
	`visit_id` integer (11), 
	`pharma_id` integer (11), 
	`dosage_id` integer (11), 
	`quantity` integer (5), 
	`price` integer (5), 
	`created_at` date, 
	`updated_at` date,
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: visit_medicine
--
BEGIN;
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(1, 1, 1, 4, 4, 1, 45, '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(2, 1, 1, 2, 2, 3, 45, '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(3, 1, 1, 1, 1, 9, 18, '2011-06-23', '2011-06-23');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(4, 6, 10, 2, 2, 0, 0, '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(5, 6, 10, 1, 1, 0, 0, '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(6, 6, 10, 5, 5, 0, 0, '2011-06-28', '2011-06-28');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(12, 1, 11, 8, 2, 6, 1800, '2011-06-29', '2011-06-29');
-- GO
INSERT INTO `visit_medicine` (`id`, `patient_id`, `visit_id`, `pharma_id`, `dosage_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES(13, 1, 11, 6, 2, 6, 960, '2011-06-29', '2011-06-29');
-- GO
COMMIT;
-- GO

--
-- Index: FK_visit_medicine_visit
--
ALTER TABLE `hospital`.`visit_medicine` ADD INDEX `FK_visit_medicine_visit` (`visit_id` );
-- GO

--
-- Index: FK_visit_medicine_pharma
--
ALTER TABLE `hospital`.`visit_medicine` ADD INDEX `FK_visit_medicine_pharma` (`pharma_id` );
-- GO

--
-- Index: FK_visit_medicine_dosage
--
ALTER TABLE `hospital`.`visit_medicine` ADD INDEX `FK_visit_medicine_dosage` (`dosage_id` );
-- GO

--
-- Index: FK_visit_medicine_patient
--
ALTER TABLE `hospital`.`visit_medicine` ADD INDEX `FK_visit_medicine_patient` (`patient_id` );
-- GO

--
-- Table: ward
--
CREATE TABLE `ward` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`title` varchar (255), 
	`status` varchar (10),
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: ward
--
BEGIN;
-- GO
INSERT INTO `ward` (`id`, `title`, `status`) VALUES(1, 'Medical Ward', '1');
-- GO
INSERT INTO `ward` (`id`, `title`, `status`) VALUES(2, 'Surgecial Ward', '1');
-- GO
INSERT INTO `ward` (`id`, `title`, `status`) VALUES(3, 'Burn Center', '1');
-- GO
COMMIT;
-- GO

--
-- Table: ward_bed
--
CREATE TABLE `ward_bed` 
(
	`id` integer (11) NOT NULL AUTO_INCREMENT , 
	`ward_id` integer (11), 
	`bed` varchar (100), 
	`price` integer (5), 
	`status` varchar (10),
	PRIMARY KEY (`id`)
) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
-- GO

--
-- Dumping Table Data: ward_bed
--
BEGIN;
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(1, 1, 'Medical 1', 270, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(2, 2, 'Surgical 1', 500, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(3, 1, 'Medical 2', 250, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(4, 3, 'Burn 1', 1000, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(5, 3, 'Burn 2', 1050, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(6, 2, 'Surgical 2', 200, '1');
-- GO
INSERT INTO `ward_bed` (`id`, `ward_id`, `bed`, `price`, `status`) VALUES(7, 2, 'Surgical 3', 500, '1');
-- GO
COMMIT;
-- GO

--
-- Index: FK_ward_bed_ward
--
ALTER TABLE `hospital`.`ward_bed` ADD INDEX `FK_ward_bed_ward` (`ward_id` );
-- GO

--
-- Dumping Tables Foreign Keys
--

--
-- Foreign Key Constraint: FK_designation_department
--
ALTER TABLE `designation` ADD CONSTRAINT `FK_designation_department` FOREIGN KEY (`department_id`) REFERENCES `department`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_duty_roster_employee
--
ALTER TABLE `duty_roster` ADD CONSTRAINT `FK_duty_roster_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_duty_roster_place
--
ALTER TABLE `duty_roster` ADD CONSTRAINT `FK_duty_roster_place` FOREIGN KEY (`duty_place_id`) REFERENCES `duty_place`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_duty_roster_substitute
--
ALTER TABLE `duty_roster` ADD CONSTRAINT `FK_duty_roster_substitute` FOREIGN KEY (`substitute_id`) REFERENCES `employee`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_employee_department
--
ALTER TABLE `employee` ADD CONSTRAINT `FK_employee_department` FOREIGN KEY (`department_id`) REFERENCES `department`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_employee_designation
--
ALTER TABLE `employee` ADD CONSTRAINT `FK_employee_designation` FOREIGN KEY (`designation_id`) REFERENCES `designation`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_employee_role
--
ALTER TABLE `employee` ADD CONSTRAINT `FK_employee_role` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_lab_report_lab_test
--
ALTER TABLE `lab_report` ADD CONSTRAINT `FK_lab_report_lab_test` FOREIGN KEY (`lab_test_id`) REFERENCES `lab_test`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_lab_report_patient
--
ALTER TABLE `lab_report` ADD CONSTRAINT `FK_lab_report_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_lab_report_visit
--
ALTER TABLE `lab_report` ADD CONSTRAINT `FK_lab_report_visit` FOREIGN KEY (`visit_id`) REFERENCES `visit`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_user_employee
--
ALTER TABLE `user` ADD CONSTRAINT `FK_user_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_user_role
--
ALTER TABLE `user` ADD CONSTRAINT `FK_user_role` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_visit_doctor
--
ALTER TABLE `visit` ADD CONSTRAINT `FK_visit_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `employee`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_visit_patient
--
ALTER TABLE `visit` ADD CONSTRAINT `FK_visit_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_visit_room
--
ALTER TABLE `visit` ADD CONSTRAINT `FK_visit_room` FOREIGN KEY (`room_id`) REFERENCES `room`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_visit_ward_bed
--
ALTER TABLE `visit` ADD CONSTRAINT `FK_visit_ward_bed` FOREIGN KEY (`ward_bed_id`) REFERENCES `ward_bed`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_visit_ward_doc
--
ALTER TABLE `visit` ADD CONSTRAINT `FK_visit_ward_doc` FOREIGN KEY (`ward_doc_id`) REFERENCES `employee`(`id`);
-- GO

--
-- Foreign Key Constraint: FK_visit_medicine_dosage
--
ALTER TABLE `visit_medicine` ADD CONSTRAINT `FK_visit_medicine_dosage` FOREIGN KEY (`dosage_id`) REFERENCES `dosage`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_visit_medicine_patient
--
ALTER TABLE `visit_medicine` ADD CONSTRAINT `FK_visit_medicine_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_visit_medicine_pharma
--
ALTER TABLE `visit_medicine` ADD CONSTRAINT `FK_visit_medicine_pharma` FOREIGN KEY (`pharma_id`) REFERENCES `pharma`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_visit_medicine_visit
--
ALTER TABLE `visit_medicine` ADD CONSTRAINT `FK_visit_medicine_visit` FOREIGN KEY (`visit_id`) REFERENCES `visit`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Foreign Key Constraint: FK_ward_bed_ward
--
ALTER TABLE `ward_bed` ADD CONSTRAINT `FK_ward_bed_ward` FOREIGN KEY (`ward_id`) REFERENCES `ward`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
-- GO

--
-- Dumping Triggers
--
SET FOREIGN_KEY_CHECKS=1;
-- GO

