-- Database: `quiz_system_db`

-- Table structure for table `admin_acc`
CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `course_tbl`
CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cou_name` varchar(255) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_id` int(11) NOT NULL,
  CONSTRAINT `fk_admin_course` FOREIGN KEY (`admin_id`) REFERENCES `admin_acc`(`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `examinee_tbl`
CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `exmne_fullname` varchar(255) NOT NULL,
  `exmne_course` int(11) NOT NULL,
  `exmne_gender` varchar(255) NOT NULL,
  `exmne_birthdate` varchar(255) NOT NULL,
  `exmne_year_level` varchar(255) NOT NULL,
  `exmne_email` varchar(255) NOT NULL,
  `exmne_password` varchar(255) NOT NULL,
  `exmne_status` varchar(255) NOT NULL DEFAULT 'active',
  CONSTRAINT `fk_examinee_course` FOREIGN KEY (`exmne_course`) REFERENCES `course_tbl`(`cou_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `exam_tbl`
CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(255) NOT NULL,
  `ex_time_limit` varchar(255) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(255) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  CONSTRAINT `fk_exam_course` FOREIGN KEY (`cou_id`) REFERENCES `course_tbl`(`cou_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `exam_question_tbl`
CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ex_id` int(11) NOT NULL,
  `exam_question` varchar(255) NOT NULL,
  `exam_ch1` varchar(255) NOT NULL,
  `exam_ch2` varchar(255) NOT NULL,
  `exam_ch3` varchar(255) NOT NULL,
  `exam_ch4` varchar(255) NOT NULL,
  `exam_answer` varchar(255) NOT NULL,
  `exam_status` varchar(255) NOT NULL DEFAULT 'active',
  CONSTRAINT `fk_question_exam` FOREIGN KEY (`ex_id`) REFERENCES `exam_tbl`(`ex_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `exam_attempt`
CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(255) NOT NULL DEFAULT 'used',
  CONSTRAINT `fk_attempt_exam` FOREIGN KEY (`exam_id`) REFERENCES `exam_tbl`(`ex_id`),
  CONSTRAINT `fk_attempt_examinee` FOREIGN KEY (`exmne_id`) REFERENCES `examinee_tbl`(`exmne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `exam_answers`
CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(255) NOT NULL,
  `exans_status` varchar(255) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  CONSTRAINT `fk_answers_question` FOREIGN KEY (`quest_id`) REFERENCES `exam_question_tbl`(`eqt_id`),
  CONSTRAINT `fk_answers_exam` FOREIGN KEY (`exam_id`) REFERENCES `exam_tbl`(`ex_id`),
  CONSTRAINT `fk_answers_examinee` FOREIGN KEY (`axmne_id`) REFERENCES `examinee_tbl`(`exmne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Table structure for table `feedbacks_tbl`
CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(255) NOT NULL,
  `fb_feedbacks` varchar(255) NOT NULL,
  `fb_date` varchar(255) NOT NULL,
  CONSTRAINT `fk_feedback_examinee` FOREIGN KEY (`exmne_id`) REFERENCES `examinee_tbl`(`exmne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
