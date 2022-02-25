<!-- <form action="{{url('user/save')}}" method="post"> -->

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-sm-8">
                        <!-- Basic Form Inputs card start -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Payment Setting</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Cash Payment</label>
                                    <div class="col-md-9">
                                        <label class="aiz-switch aiz-switch-success mb-3">
                                            <input value="1" name="cash_payout_status" type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Bank Payment</label>
                                    <div class="col-md-9">
                                        <label class="aiz-switch aiz-switch-success mb-3">
                                            <input value="1" name="bank_payout_status" type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Bank Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="bank_name" value="Stripe" class="form-control mb-3"
                                            placeholder="Bank Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Bank Account Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="bank_acc_name" value="John N. Klein"
                                            class="form-control mb-3" placeholder="Bank Account Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Bank Account Number</label>
                                    <div class="col-md-9">
                                        <input type="text" name="bank_acc_no" value="424242424242"
                                            class="form-control mb-3" placeholder="Bank Account Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Bank Routing Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="bank_routing_no" value="332"
                                            class="form-control mb-3" placeholder="Bank Routing Number">
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary">Update Withdraw
                                        Settings</button>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->

                    </div>

                </div>
                <!-- Page body end -->

            </div>

        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">
    </div>