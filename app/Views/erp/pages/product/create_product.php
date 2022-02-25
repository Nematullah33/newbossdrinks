<!-- <form action="{{url('user/save')}}" method="post"> -->

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">

                    <div class="col-sm-8">
                        <!-- Basic Form Inputs card start -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Information</h5>
                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Product <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtName' class="form-control form-control"
                                                placeholder="Product Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Unit </label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtPrice' class="form-control form-control"
                                                placeholder="Unit (e.g. 500 Gram, 2 Litre, 5 Pc etc)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Minimum Purchase Qty <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtPrice' class="form-control form-control"
                                                placeholder="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Maximum Purchase Qty</label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtPrice' class="form-control form-control"
                                                placeholder="0">
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Images</h5>

                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Thambnail Image <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="file" name='txtName' class="form-control form-control"
                                                placeholder="Product Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Gellary Image</label>
                                        <div class="col-sm-7">
                                            <input type="file" name='txtPrice' class="form-control form-control"
                                                placeholder="Unit (e.g. 500 Gram, 2 Litre, 5 Pc etc)">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product price, stock</h5>

                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Regular price <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtName' class="form-control form-control"
                                                placeholder=" 1 " autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">SKU</label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtPrice' class="form-control form-control"
                                                placeholder="SKU">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Stock</label>
                                        <div class="col-sm-7">
                                            <select name="" id="" class="form-control" style>
                                                <option value=""> Select One</option>
                                                <option value=""> Select One</option>
                                                <option value=""> Select One</option>
                                                <option value=""> Select One</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Discount</h5>

                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Discount Date Rang</label>
                                        <div class="col-sm-7">
                                            <input type="date" name='txtName' class="form-control form-control"
                                                placeholder=" 1 " autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Discount<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <input type="text" name='txtPrice' class="form-control"
                                                        placeholder="0">
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="" id="" class="form-control" style>
                                                        <option value=""> Flat</option>
                                                        <option value=""> Parcent</option>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Discount</h5>

                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Standard delivery time</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">hr(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Express delivery time</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">hr(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Weight</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">gm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Height</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">length</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-from-label">Width</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control" name="length"
                                                    min="0" required="">
                                                <div class="input-group-append"><span class="input-group-text"
                                                        style="background-color:#eff5f7; color:#101010;">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>SEO Meta Tags</h5>

                            </div>
                            <div class="card-block">

                                <form action="#" method="post" enctype="multipart/form-data"
                                    style="padding:20px; border:1px solid #ccc; border-radius:5px;">

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Title</label>
                                        <div class="col-sm-7">
                                            <input type="text" name='txtName' class="form-control form-control"
                                                placeholder=" 1 " autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Description</label>
                                        <div class="col-sm-7">
                                            <textarea name='txtName' width="100%" class="form-control"
                                                autocomplete="off"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Meta Image</label>
                                        <div class="col-sm-7">
                                            <input type="file" name='txtName' class="form-control form-control"
                                                placeholder=" 1 " autocomplete="off">
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Basic Form Inputs card start -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Status</h5>

                            </div>
                            <div class="card-block">
                                <div class="dropdown bootstrap-select">
                                    <select class="form-control" name="status">
                                        <option value="0">Select One</option>
                                        <option value="0">Draft</option>
                                        <option value="1" selected="">Published</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Brand</h5>

                            </div>
                            <div class="card-block">
                                <div class="dropdown bootstrap-select">
                                    <select class="form-control" name="status">
                                        <option value="0">Select One</option>
                                        <option value="0">Draft</option>
                                        <option value="1" selected="">Published</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Category</h5>

                            </div>
                            <div class="card-block">
                                <div style="padding:20px; border:1px solid #ccc; border-radius:5px;">
                                    <input type="checkbox" name="" class=""> Women Clothing & Fashion <br>
                                    <input type="checkbox" name="" class=""> Women Clothing <br>
                                    <input type="checkbox" name="" class=""> Man Clothing & Fashion <br>
                                    <input type="checkbox" name="" class=""> Women Fashion <br>
                                    <input type="checkbox" name="" class=""> Man Fashion <br>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Tags</h5>

                            </div>
                            <div class="card-block" style="padding:20px; border:1px solid #ccc; border-radius:5px;">
                                <div class="dropdown bootstrap-select">
                                    <input type="text" class="form-control"
                                        placeholder="Type and hit enter to add a tag">
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>VAT & Tax</h5>

                            </div>
                            <div class="card-block" style="padding:20px; border:1px solid #ccc; border-radius:5px;">
                                <div class="dropdown bootstrap-select">
                                    <lavel>Vat</label>
                                        <div class=" row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style>
                                                    <option value=""> Flat</option>
                                                    <option value=""> Parcent</option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="dropdown bootstrap-select">
                                    <lavel>GST</label>
                                        <div class=" row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style>
                                                    <option value=""> Flat</option>
                                                    <option value=""> Parcent</option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="dropdown bootstrap-select">
                                    <lavel>TAX</label>
                                        <div class=" row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style>
                                                    <option value=""> Flat</option>
                                                    <option value=""> Parcent</option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px;">
                            <div class="card-header">
                                <h5>Product Tags</h5>

                            </div>
                            <div class="card-block" style="padding:20px; border:1px solid #ccc; border-radius:5px;">
                                <!-- Default checked -->

                                <div class="mb-2">Warranty available for this product?</div>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="has_warranty">
                                    <span></span>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-sm-3">
                        <input Type="submit" style="border-radius:5px;" class="form-control btn btn-info" value="Upload Product" />
                    </div>

                </div>
            </div>
            <!-- Page body end -->

        </div>

    </div>
</div>
<!-- Main-body end -->
<div id="styleSelector">
</div>