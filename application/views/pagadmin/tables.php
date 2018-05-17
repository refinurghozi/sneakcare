<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asseta/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('asseta/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('asseta/vendor/datatables-plugins/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('asseta/vendor/datatables-responsive/dataTables.responsive.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('asseta/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asseta/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')?>"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')?>"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->


            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="<?php echo base_url('Shoe/adminpanel')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Shoe/tabeladmin')?>"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DAFTAR ORDER SNEAKCARE.LAB</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Order Sneakcare.Lab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jumlah Sepatu</th>
                                        <th>Nomor Hp</th>
                                        <th>Jenis Service</th>
                                        <th>Keterangan</th>
                                        <th>Timestamp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php foreach($data as $row){ ?>
                                 <tr class="odd gradeX">
                                   <td><?php echo $row['id'];?></td>
                                   <td><?php echo $row['nama'];?></td>
                                   <td><?php echo $row['alamat'];?></td>
                                   <td><?php echo $row['jumlah'];?></td>
                                   <td><?php echo $row['nomorhp'];?></td>
                                   <td><?php echo $row['service'];?></td>
                                   <td><?php echo $row['notes'];?></td>
                                   <td><?php echo $row['timestamp'];?></td>
                                   <td>
                                     <button>Accept</button>
                                     <a href="<?php echo base_url('Cform/deleteorder')?>"><button>Delete</button></a>
                                   </td>

                                 </tr>
                               <?php } ?>



                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('asseta/vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('asseta/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('asseta/vendor/metisMenu/metisMenu.min.js')?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('asseta/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('asseta/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asseta/vendor/datatables-responsive/dataTables.responsive.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('asseta/dist/js/sb-admin-2.js')?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
