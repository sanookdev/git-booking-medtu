<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="css/style.css">


    <title>ผู้ใช้งาน</title>
    <style>
        .headGroup {
            background-color: green !important;
            border-color: green !important;
        }
    </style>
</head>

<body>

    <!-- nav -->
    <?include "ui/nav.php";?>
    <!-- nav -->

    <!-- dashboard contents -->
    <div class="container-fluid">
        <div class="row mt-3">
            <?include "ui/leftbarUser.php";?>
            <div class="col-lg-9 col-md-9">
                <table class="table border shadow">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>ชื่อ-สกุล</th>
                            <th>สถานะ</th>
                            <th>รายละเอียด</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>1</td>
                            <td>administrator</td>
                            <td>ผู้ดูแลระบบ</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#employee_details1" class="btn btn-sm btn-block btn-info">
                                    <i class="fa fa-list mr-2" aria-hidden="true"></i>รายละเอียด

                                </a>
                            </td>
                            <td><a href="#" data-toggle="modal" data-target="#employee_edit_details1" class="btn btn-sm btn-block btn-warning">
                                    <i class="fa fa-edit mr-2" aria-hidden="true"></i>แก้ไข
                                </a>
                            </td>
                            <td><a href="#" class="btn btn-sm btn-block btn-danger" onclick="deleted(id)">
                                    <i class="fa fa-close mr-2" aria-hidden="true"></i>ลบ

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>นายวรัตถ์ สุภาพร</td>
                            <td>ผู้ดูแลห้อง</td>
                            <td><a href="#" data-toggle="modal" data-target="#employee_details1" class="btn btn-sm btn-block btn-info">
                                    <i class="fa fa-list mr-2" aria-hidden="true"></i>รายละเอียด

                                </a>
                            </td>
                            <td><a href="#" data-toggle="modal" data-target="#employee_edit_details1" class="btn btn-sm btn-block btn-warning">
                                    <i class="fa fa-edit mr-2" aria-hidden="true"></i>แก้ไข
                                </a>
                            </td>
                            <td><a href="#" class="btn btn-sm btn-block btn-danger" onclick="deleted(id)">
                                    <i class="fa fa-close mr-2" aria-hidden="true"></i>ลบ

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>นายณัฐพงษ์ เลาฬไพทูล</td>
                            <td>ผู้ใช้งาน</td>
                            <td><a href="#" data-toggle="modal" data-target="#employee_details1" class="btn btn-sm btn-block btn-info">
                                    <i class="fa fa-list mr-2" aria-hidden="true"></i>รายละเอียด

                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#employee_edit_details1" class="btn btn-sm btn-block btn-warning">
                                    <i class="fa fa-edit mr-2" aria-hidden="true"></i>แก้ไข
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-block btn-danger" onclick="deleted(id)">
                                    <i class="fa fa-close mr-2" aria-hidden="true"></i>ลบ

                                </a>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <button class="btn btn-success pull-right" href="#" data-toggle="modal" data-target="#add_employee">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>เพิ่มผู้ใช้งาน
                </button>
            </div>
        </div>
    </div>
    <!-- dashboard contents -->

    <!-- Add Employee Modal -->
    <? include "event/addUser.php";?>

    <!-- Details Model -->
    <? include "event/detailUser.php";?>

    <!-- Edit Employee Detaisl -->
    <? include "event/editUser.php";?>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="js/event.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>