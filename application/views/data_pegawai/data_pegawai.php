<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Pegawai</h4>
                    </div>
                    <div class="col-md-7  ">
                        <div class="d-flex justify-content-end align-items-center float-right">
                            <a class="btn btn-success d-lg-block m-l-15" href="<?php echo site_url('Data_pegawai/tambah') ?>"><i class="fa fa-plus"></i> Tambah Pegawai</a>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    
                    <div class="col-lg-12">
                        <div class="card oh">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h5 class="card-title ">Data Pegawai</h5>

                                   
                                </div>
                                <table class="table  display nowrap" id="table" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Foto</th>
                                        <th>Nip</th>
                                        <th>Nama</th>
                                        <th>JK / TTL</th>
                                        <th>Unit Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     <tr>
                                        <td></td>
                                        <td><img class="img-circle img-pegawai" src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user" width="40" ></td>
                                        <td>Della rianty febrian</td>
                                        <td>16-02-2001</td>
                                        <td>lorem</td>
                                        <td>lorem</td>
                                        <td>
                                            <a href="" class="aksi"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" class="aksi"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                                            <a href="" class="aksi"><i class="fa fa-trash fa-lg"></i></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><img class="img-circle img-pegawai" src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user" width="40" ></td>
                                        <td>Della rianty febrian</td>
                                        <td>16-02-2001</td>
                                        <td>lorem</td>
                                        <td>lorem</td>
                                        <td>
                                            <a href="" class="aksi"  data-toggle="tooltip" data-placement="top" title="Detail" ><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" class="aksi"  data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                                            <a href="" class="aksi"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-lg"></i></a>

                                        </td>
                                    </tr>

                                    
                                    </tbody>
                                </table>
                                
                            </div>
                            
                        </div>
                    </div>
                    <style type="text/css">
                        .aksi{
                            color: #6c757d;
                            padding-right: 20px;
                        }
                    </style>
                    






                </div>
                
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
