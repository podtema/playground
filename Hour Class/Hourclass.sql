-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2013 at 05:02 PM
-- Server version: 5.5.30-cll
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'rahul801_timline'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_admins'
--

CREATE TABLE IF NOT EXISTS tbl_admins (
  admin_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  admin_login varchar(50) NOT NULL,
  admin_password varchar(128) NOT NULL,
  admin_name varchar(50) NOT NULL,
  PRIMARY KEY (admin_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_admins'
--

INSERT INTO tbl_admins (admin_id, admin_login, admin_password, admin_name) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Justin');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_assignments'
--

CREATE TABLE IF NOT EXISTS tbl_assignments (
  assignment_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  assignment_title varchar(200) NOT NULL,
  assignment_description text NOT NULL,
  assignment_duedate varchar(40) NOT NULL,
  assignment_submit varchar(30) NOT NULL,
  PRIMARY KEY (assignment_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_assignments'
--

INSERT INTO tbl_assignments (assignment_id, assignment_title, assignment_description, assignment_duedate, assignment_submit) VALUES
(1, 'Essay about life', 'Essay topic "Whatever in our life"', '2013-03-31 10:08:51', ''),
(2, 'Random words', 'Generate 1000 random words. No order is required. I mean, relly.', '2013-04-12 17:09:59', ''),
(3, 'Super-Exciting!', 'One more interesting and exciting assignment.', '2013-03-26 13:09:28', ''),
(9, 'JS Term Projects', 'Develop fully functional search engine that will benefit from using JavaScript.', '2013-04-28 14:15:59', ''),
(10, 'Test Test', 'Teste tselkrw kjwh erhw ekrjh wekrj hwkjerh kwher', '', '');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_course'
--

CREATE TABLE IF NOT EXISTS tbl_course (
  course_id smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  course_title varchar(60) NOT NULL,
  course_color varchar(120) NOT NULL,
  PRIMARY KEY (course_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_course'
--

INSERT INTO tbl_course (course_id, course_title, course_color) VALUES
(1, 'ENGLISH 1201', 'yellow_course.png'),
(2, 'Multimedia Authoring', 'blue_course.png');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_exams'
--

CREATE TABLE IF NOT EXISTS tbl_exams (
  exam_id int(2) unsigned NOT NULL AUTO_INCREMENT,
  exam_title varchar(30) NOT NULL,
  exam_date varchar(30) NOT NULL,
  PRIMARY KEY (exam_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_profsec'
--

CREATE TABLE IF NOT EXISTS tbl_l_profsec (
  profsec_id int(6) unsigned NOT NULL AUTO_INCREMENT,
  professor_id smallint(3) NOT NULL,
  section_id smallint(5) NOT NULL,
  PRIMARY KEY (profsec_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_profsec'
--

INSERT INTO tbl_l_profsec (profsec_id, professor_id, section_id) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_secassign'
--

CREATE TABLE IF NOT EXISTS tbl_l_secassign (
  secassign_id int(4) unsigned NOT NULL AUTO_INCREMENT,
  section_id smallint(4) NOT NULL,
  assignment_id smallint(6) NOT NULL,
  PRIMARY KEY (secassign_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_secassign'
--

INSERT INTO tbl_l_secassign (secassign_id, section_id, assignment_id) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 2),
(5, 1, 3),
(6, 0, 0),
(7, 2, 9),
(8, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_seccours'
--

CREATE TABLE IF NOT EXISTS tbl_l_seccours (
  seccours_id int(6) unsigned NOT NULL AUTO_INCREMENT,
  section_id smallint(2) NOT NULL,
  course_id smallint(5) NOT NULL,
  PRIMARY KEY (seccours_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_seccours'
--

INSERT INTO tbl_l_seccours (seccours_id, section_id, course_id) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_sterm'
--

CREATE TABLE IF NOT EXISTS tbl_l_sterm (
  sterm_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  student_id smallint(6) NOT NULL,
  term_id smallint(6) NOT NULL,
  PRIMARY KEY (sterm_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_sterm'
--

INSERT INTO tbl_l_sterm (sterm_id, student_id, term_id) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_studsec'
--

CREATE TABLE IF NOT EXISTS tbl_l_studsec (
  stc_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  student_id smallint(5) NOT NULL,
  section_id tinyint(5) NOT NULL,
  PRIMARY KEY (stc_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_studsec'
--

INSERT INTO tbl_l_studsec (stc_id, student_id, section_id) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_news'
--

CREATE TABLE IF NOT EXISTS tbl_news (
  news_id int(5) unsigned NOT NULL AUTO_INCREMENT,
  news_title varchar(100) NOT NULL,
  news_text text NOT NULL,
  news_date varchar(50) NOT NULL,
  PRIMARY KEY (news_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_professors'
--

CREATE TABLE IF NOT EXISTS tbl_professors (
  professor_id mediumint(3) unsigned NOT NULL AUTO_INCREMENT,
  professor_login varchar(20) NOT NULL,
  professor_password varchar(80) NOT NULL,
  professor_name varchar(40) NOT NULL,
  professor_lastname varchar(40) NOT NULL,
  professor_avatar varchar(90) NOT NULL,
  PRIMARY KEY (professor_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_professors'
--

INSERT INTO tbl_professors (professor_id, professor_login, professor_password, professor_name, professor_lastname, professor_avatar) VALUES
(1, 'm_monroe', '250cf8b51c773f3f8dc8b4be867a9a02', 'Manuel', 'Monroe', 'images/default.jpg'),
(2, 'g_ford', '250cf8b51c773f3f8dc8b4be867a9a02', 'Gerald', 'Ford', 'images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_programs'
--

CREATE TABLE IF NOT EXISTS tbl_programs (
  program_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  program_name varchar(120) NOT NULL,
  program_terms int(11) NOT NULL,
  program_courses int(11) NOT NULL,
  program_teachers int(11) NOT NULL,
  PRIMARY KEY (program_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_sections'
--

CREATE TABLE IF NOT EXISTS tbl_sections (
  section_id tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  section_title varchar(20) NOT NULL,
  PRIMARY KEY (section_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_sections'
--

INSERT INTO tbl_sections (section_id, section_title) VALUES
(1, 'Section A'),
(2, 'Section B');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_students'
--

CREATE TABLE IF NOT EXISTS tbl_students (
  student_id mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  student_login varchar(25) NOT NULL,
  student_password varchar(40) NOT NULL,
  student_name varchar(40) NOT NULL,
  student_lastname varchar(40) NOT NULL,
  student_avatar varchar(90) NOT NULL DEFAULT 'images/default.jpg',
  PRIMARY KEY (student_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_students'
--

INSERT INTO tbl_students (student_id, student_login, student_password, student_name, student_lastname, student_avatar) VALUES
(1, 's_pearson', '202cb962ac59075b964b07152d234b70', 'Scott', 'Pearson', 'images/s_pearson.jpg'),
(2, 'm_miller', '202cb962ac59075b964b07152d234b70', 'Mike', 'Miller', 'images/default.jpg'),
(3, 'i_mitchell', '202cb962ac59075b964b07152d234b70', 'Ivan', 'Mitchell', 'images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_term'
--

CREATE TABLE IF NOT EXISTS tbl_term (
  term_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  term_title varchar(120) NOT NULL,
  term_start timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  term_end timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (term_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_term'
--

INSERT INTO tbl_term (term_id, term_title, term_start, term_end) VALUES
(1, 'Winter', '2013-01-21 06:39:30', '2013-05-01 03:59:59'),
(2, 'Fall', '2013-09-05 12:00:00', '2013-12-16 04:59:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
