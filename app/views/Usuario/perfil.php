<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $this->getPage(); ?></h1>
            </div>
            <div class="col-sm-6">
                <?= $breadcrumb ?>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?=
                $this->verMsg();
                $this->verErro();
                ?>
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Título</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="container rounded bg-white mt-5">
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="card card-widget widget-user shadow">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-info">
                                            <h3 class="widget-user-username">Alexander Pierce</h3>
                                            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">3,200</h5>
                                                        <span class="description-text">SALES</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">13,000</h5>
                                                        <span class="description-text">FOLLOWERS</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header">35</h5>
                                                        <span class="description-text">PRODUCTS</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                                <h6>Back to home</h6>
                                            </div>
                                            <h6 class="text-right">Edit Profile</h6>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" value="John"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" value="Doe" placeholder="Doe"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="john_doe12@bbb.com"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" value="+19685969668" placeholder="Phone number"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value="D-113, right avenue block, CA,USA"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" value="USA" placeholder="Country"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Bank Name" value="Bank of America"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" value="043958409584095" placeholder="Account Number"></div>
                                        </div>
                                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Rodapé
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->