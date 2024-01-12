<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['facultyid'] == 0)) {
    header('location:logout.php');
} else {
    // for deleting user
    if (isset($_GET['id'])) {
        $facultyid = $_GET['id'];
        $msg = mysqli_query($con, "delete from users where id='$facultyid'");
        if ($msg) {
            echo "<script>alert('Data deleted');</script>";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Students | JSSATEN-SIM</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Students</h1>
                        <hr>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Students</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registered Students Details
                            </div>
                            <div class="card-body">
                                <!-- <div>
                                    <label for="filterYear">Year:</label>
                                    <select id="filterYear">
                                        <option value="">All</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="filterSemester">Semester:</label>
                                    <select id="filterSemester">
                                        <option value="">All</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="filterSection">Section:</label>
                                    <select id="filterSection">
                                        <option value="">All</option>
                                    </select>
                                </div> -->
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>First Name</th>
                                            <th> Last Name</th>
                                            <th> Email Id</th>
                                            <th>Year</th>
                                            <th>Semester</th>
                                            <th>Section</th>
                                            <th>Contact No.</th>
                                            <th>University Roll No.</th>
                                            <th>Admission No.</th>
                                            <th>Reg. Date</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>First Name</th>
                                            <th> Last Name</th>
                                            <th> Email Id</th>
                                            <th>Year</th>
                                            <th>Semester</th>
                                            <th>Section</th>
                                            <th>Contact No.</th>
                                            <th>University Roll No.</th>
                                            <th>Admission No.</th>
                                            <th>Reg. Date</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $ret = mysqli_query($con, "select * from users");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($ret)) { ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <td><?php echo $row['lname']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['year']; ?></td>
                                                <td><?php echo $row['semester']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                <td><?php echo $row['contactno']; ?></td>
                                                <td><?php echo $row['urollno']; ?></td>
                                                <td><?php echo $row['addno']; ?></td>
                                                <td><?php echo $row['posting_date']; ?></td>
                                                <td><?php if ($row['feedback'] == 1) {
                                                        echo "Yes";
                                                    } else {
                                                        echo "No";
                                                    }
                                                    ?></td>
                                                <td>

                                                    <a href="user-profile.php?uid=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                    <a href="manage-users.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php $cnt = $cnt + 1;
                                        } ?>

                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function() {
                                        // Initialize DataTable
                                        var table = $('#datatablesSimple').DataTable();

                                        // Add event listeners to the filter dropdowns
                                        $('#filterYear, #filterSemester, #filterSection').on('change', function() {
                                            var selectedYear = $('#filterYear').val();
                                            var selectedSemester = $('#filterSemester').val();
                                            var selectedSection = $('#filterSection').val();

                                            // Apply the filters to the DataTable
                                            table.columns(4).search(selectedYear).draw(); // 4 is the index of the 'Year' column
                                            table.columns(5).search(selectedSemester).draw(); // 5 is the index of the 'Semester' column
                                            table.columns(6).search(selectedSection).draw(); // 6 is the index of the 'Section' column
                                        });
                                    });
                                </script>
                                <!-- <button type="button" class="btn btn-outline-primary">Download Excel Sheet</button> -->
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('../includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

    </html>
<?php } ?>