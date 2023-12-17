<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/sidebar.css" rel="stylesheet">
</head>
<body>
   <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading" style= "background-image:  linear-gradient(-20deg, #2b5876 0%, #4e4376 100%); border-radius:5px;"><a href="home.php" style="color:white">Go To Dashboard</a></li>
                                <li class="app-sidebar__heading">Manage Course</li>
                                <li>
                                    <a href="#">
                                         <i class="metismenu-icon pe-7s-display2"></i>
                                         Course
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modalForAddCourse">
                                                <i class="metismenu-icon"></i>
                                                Add Course
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-course">
                                                <i class="metismenu-icon">
                                                </i>Manage Course
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                               
                                <li class="app-sidebar__heading">MANAGE EXAM</li>
                                <li>
                                    <a href="#">
                                         <img  class="sidebar-icon" src="assets/icons/exam.png" alt="">
                                         Exam
                                         <img  class="sidebar-icon-closed" src="assets/icons/exam.png" alt="">
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modalForExam">
                                                <i class="metismenu-icon"></i>
                                                Add Exam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-exam">
                                                <i class="metismenu-icon">
                                                </i>Manage Exam
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                           
                         
                                <li class="app-sidebar__heading">MANAGE EXAMINEE</li>
                                <li>
                                <a href="#">
                                         <img  class="sidebar-icon" src="assets/icons/icons8-people-25.png">
                                         Examinee
                                         <img  class="sidebar-icon-closed" src="assets/icons/icons8-people-25.png">
                                         <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="" data-toggle="modal" data-target="#modalForAddExaminee">
                                            <i class="metismenu-icon pe-7s-add-user"></i>
                                            Add Examinee
                                        </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-examinee">
                                                <i class="metismenu-icon pe-7s-users">
                                                </i>Manage Examinee
                                            </a>
                                        </li>
                                    </ul>
                                <li class="app-sidebar__heading">RANKING</li>
                                <li>
                                    <a href="home.php?page=ranking-exam">
                                        <i class="metismenu-icon pe-7s-cup">
                                        </i>Ranking By Exam
                                    </a>
                                </li>


                                <li class="app-sidebar__heading">REPORTS</li>
                                <li>
                                    <a href="home.php?page=examinee-result">
                                        <i class="metismenu-icon pe-7s-cup">
                                        </i>Examinee Result
                                    </a>
                                </li>
                              

                                 <li class="app-sidebar__heading">FEEDBACKS</li>
                                <li>
                                    <a href="home.php?page=feedbacks">
                                        <i class="metismenu-icon pe-7s-chat">
                                        </i>All Feedbacks
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>  
</body>
</html>