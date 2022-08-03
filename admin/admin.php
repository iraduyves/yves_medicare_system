<?php

// @include 'comfig.php';

// session_start();
// if(!isset($_SESSION['admin_name'])){
//    header('location:localhost/project/login/loginn.php');
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./admin.css">
    <title>admin panel</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">Brand Name</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-stethoscope"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="title">payments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                     <input type="text" name="search" placeholder="search here">
                     <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="../asset/doctor4.png" alt="">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">200</div>
                        <div class="card-name">Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">100</div>
                        <div class="card-name">New patients</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">200</div>
                        <div class="card-name">operations</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-bed"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$8000</div>
                        <div class="card-name">Earnings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Last Appointments</h2>
                        <a href="#"class="btn">Vieuw All</a>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Name</td>
                            <td>Doctor</td>
                            <td>Condition</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Yves iradukunda</td>
                                <td> Dr.Yves </td>
                                <td>Diabetics</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="doctor-visiting">
                    <div class="heading">
                        <h2>Doctor Visting</h2>
                        <a href="#"class="btn">Vieuw All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Photo</td>
                            <td>Name</td>
                            <td>Visit time</td>
                            <td>Detail</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                        <img src="../asset/doctor3.jpg" alt="">
                                    </div>
                                </td>
                                <td>Yves</td>
                                <td>15:00</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                        <img src="../asset/doctor6.png" alt="">
                                    </div>
                                </td>
                                <td>Yves</td>
                                <td>15:00</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                        <img src="../asset/doctor4.png" alt="">
                                    </div>
                                </td>
                                <td>Yves</td>
                                <td>15:00</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-box-small">
                                        <img src="../asset/doctor7.jpg" alt="">
                                    </div>
                                </td>
                                <td>Yves</td>
                                <td>15:00</td>
                                <td>
                                    <i class="fas fa-eye"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>