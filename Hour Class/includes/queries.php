<?php

$username = $_SESSION['name'];
$sql_student = "SELECT * FROM tbl_students, tbl_sections, tbl_l_studsec, tbl_term, tbl_l_sterm, tbl_assignments, tbl_l_secassign, tbl_course, tbl_l_seccours WHERE tbl_course.course_id=tbl_l_seccours.course_id AND tbl_term.term_id = tbl_l_sterm.term_id AND tbl_students.student_id = tbl_l_sterm.student_id AND tbl_sections.section_id=tbl_l_seccours.section_id AND tbl_l_studsec.student_id=tbl_students.student_id AND tbl_l_studsec.section_id=tbl_sections.section_id AND tbl_l_secassign.section_id=tbl_sections.section_id AND tbl_l_secassign.assignment_id=tbl_assignments.assignment_id AND tbl_students.student_login=\"".$username."\"";
$result_student=mysql_query($sql_student);
$sql_professor = "SELECT * \n"
    . "FROM tbl_professors, tbl_l_profsec, tbl_sections, tbl_assignments, tbl_l_secassign \n"
    . "WHERE \n"
    . "tbl_l_secassign.section_id=tbl_sections.section_id AND\n"
    . "tbl_l_secassign.assignment_id=tbl_assignments.assignment_id AND\n"
    . "tbl_l_profsec.professor_id=tbl_professors.professor_id AND\n"
    . "tbl_l_profsec.section_id=tbl_sections.section_id AND\n"
    . "tbl_professors.professor_login=\"".$username."\"";
    
$result_professor=mysql_query($sql_professor);

?>