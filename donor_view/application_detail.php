<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Apllication Detail</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css"/>

    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue-light.css"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css"/>
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css"/>
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css"/>
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css"/>
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"/>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"/>

    <link rel="stylesheet" href="../plugins/select2/select2.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini layout-boxed" style="margin: 0 50px;">
<div class="wrapper">

    <!--    Menu-->
    <?php include 'donor_menu.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'donor_sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                APPLICATION_DETAIL
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Application</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="box box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">Submitted Application</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="application_controller.php" method="post" onsubmit="return confirmForm();">


                            <div class="box-body">
                                <h5>01. Application Detail</h5>

                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Salary Detail</label>

                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" disabled>Rs. 100 For a day</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h5>02. Child Details</h5>

                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">School</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="school" name="school" disabled value="Ananda College"
                                            >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="number" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name" name="name" disabled value="Kamal Pranandu"
                                               >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="address" name="address" disabled value="Kamal,Baththaramulla"
                                               >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="grade" class="col-sm-2 control-label">Grade</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="grade" name="grade" disabled value="Grade 10"
                                              >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="registered_date" class="col-sm-2 control-label">Date of Birth</label>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="Date" name="dob" disabled value="1998-05-28"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h5>03. Parent Details</h5>

                                <div class="form-group">
                                    <label for="number" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name" name="name" disabled value="Nimal Pranandu"
                                               >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">NIC</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="nic" name="nic" disabled value="982495359V"
                                               >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="address" name="address" disabled value="Kamal,Baththaramulla"
                                               >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Telephone</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="telephone" name="telephone" disabled value="0770131781"
                                               >
                                    </div>
                                </div>

                            </div>




                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-success pull-left" name="back" id="back"><a href="./donor_main.php">< Back </a></button>
                                <button type="submit" class="btn btn-danger pull-right" name="donate" id="donate">Donate Rs.500
                                </button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include '../footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->

<script>

    function confirmForm() {
        var txt;
        var r = confirm("Are You Sure Donate Rs.500 ?");
        return r;
    }
</script>


<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
</script>

<script type="text/javascript">
    function updateSchoolTable(school_id) {
        if (school_id != "") {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('schoolstable').innerHTML = xmlhttp.responseText;
                }
            };

            table_data = document.getElementById('schoolstable').innerHTML;
            xmlhttp.open("GET", "update_schools_table.php?data=" + table_data + "&id=" + school_id, true);
            xmlhttp.send();
        }
    }

    function deleteSchoolTableRow() {
        rowCount = document.getElementById('schoolstable').rows.length;
        if (rowCount > 1) {
            document.getElementById('schoolstable').deleteRow(rowCount - 1);
        }
    }

    function load_district_schools(district) {
        if (district != "") {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('schoolsfordistrict').innerHTML = xmlhttp.responseText;
                }
            };

            xmlhttp.open("GET", "get_schools_from_district.php?district=" + district, true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>

