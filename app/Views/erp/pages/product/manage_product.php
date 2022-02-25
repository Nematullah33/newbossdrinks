
<style>
    .table td{
        padding: 10px;
    } 
    .table th {
    padding: 10px;
    }

</style>
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="card">
                <div class="card-header">
                            <a href="<?php echo base_url("product/create")?>">
                                <h5><i class="fa fa-plus btn btn-primary">  New Buyer</i></h5>
                            </a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="search" name="search" value="" class="form-control" placeholder="Search by name, phone, email" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                                  </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                
                                <tr class='table-info'>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>price</th>
                                    <th>Qty</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody  class="">
                                <tr>
                                
                                    <td>1</td>
                                    <td>Boss Drinks</td>
                                    <td>300</td>
                                    <td>price</td>
                                    <td><img src="img/1.jpg" width='70' alt="product image"></td>
                                    <td>

                                        <div style="display:flex">
                                            <a href="<?php echo base_url("product/view")?>" style="padding:2px; border:1px solid hsl(177, 88%, 74%);"><i class="fa fa-eye btn btn-info" style="padding: 10px; "></i></a>
                                            <a href="<?php echo base_url("product/view")?>" style="padding:2px; border:1px solid hsl(177, 82%, 74%);"><i class="fa fa-pencil-square-o btn btn-success" style="padding: 10px; "></i></a>
                                            <a href="<?php echo base_url("product/view")?>" style="padding:2px; border:1px solid hsl(177, 67%, 65%);"><i class="fa fa-trash btn btn-danger" style="padding: 10px;"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                
                                    <td>1</td>
                                    <td>Boss Drinks</td>
                                    <td>120</td>
                                    <td>price</td>
                                    <td><img src="img/1.jpg" width='70' alt="product image"></td>
                                    <td>

                                        <div style="display:flex">
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 88%, 74%);"><i class="fa fa-eye btn btn-info" style="padding: 10px; "></i></a>
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 82%, 74%);"><i class="fa fa-pencil-square-o btn btn-success" style="padding: 10px; "></i></a>
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 67%, 65%);"><i class="fa fa-trash btn btn-danger" style="padding: 10px;"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                
                                    <td>1</td>
                                    <td>Boss Drinks</td>
                                    <td>200</td>
                                    <td>price</td>
                                    <td><img src="img/1.jpg" width='70' alt="product image"></td>
                                    <td>

                                        <div style="display:flex">
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 88%, 74%);"><i class="fa fa-eye btn btn-info" style="padding: 10px; "></i></a>
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 82%, 74%);"><i class="fa fa-pencil-square-o btn btn-success" style="padding: 10px; "></i></a>
                                            <a href="#" style="padding:2px; border:1px solid hsl(177, 67%, 65%);"><i class="fa fa-trash btn btn-danger" style="padding: 10px;"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                            
                        </table>
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
