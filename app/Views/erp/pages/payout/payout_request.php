<style>
.table td {
    padding: 10px;
}

.table th {
    padding: 10px;
}
</style>
<div class="addEmployeeModal modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="user_form">
                <div class="modal-header">
                    <h4 class="modal-title">Payout Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="text" name='txtAmount' class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" cols="20" rows="5"></textarea>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="btnSubmit">Send Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="card">
                <div class="card-header">

                    <a href=".addEmployeeModal" style="border-radius:20px;" class="btn btn-outline-primary"
                        data-toggle="modal"><i class="fa fa-plus"></i> Add Request</a>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>

                                <tr class='table-info'>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Message</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td>1</td>
                                    <td>25-01-2022</td>
                                    <td>200 $</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dicta at
                                        culpa? Natus non vero eum nam quae sapiente soluta ipsum! Dolorum rem provident
                                        modi facere doloribus atque nesciunt.</td>
                                    <td><span class="btn-sm btn-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>25-01-2022</td>
                                    <td>200 $</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dicta at
                                        culpa? Natus non vero eum nam quae sapiente soluta ipsum! Dolorum rem provident
                                        modi facere doloribus atque nesciunt.</td>
                                    <td><span class="btn-sm btn-info">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>25-01-2022</td>
                                    <td>200 $</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dicta at
                                        culpa? Natus non vero eum nam quae sapiente soluta ipsum! Dolorum rem provident
                                        modi facere doloribus atque nesciunt.</td>
                                    <td><span class="btn-sm btn-info">Completed</span></td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>