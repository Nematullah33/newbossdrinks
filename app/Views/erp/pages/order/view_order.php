<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="card">
                <div class="card-header">
                    <h1 class="h2 fs-18 mb-0">Order Details</h1>
                </div>
                <div class="card-header">
                    <div class="flex-grow-1 row">
                        <div class="col-md mb-3">
                            <div>
                                <div class="fs-15 fw-600 mb-2">Customer info</div>
                                <div><span class="opacity-80 mr-2 ml-0">Name:</span> Christina Ashens</div>
                                <div><span class="opacity-80 mr-2 ml-0">Email:</span> customer@example.com</div>
                                <div><span class="opacity-80 mr-2 ml-0">Phone:</span> +1603-842-2079</div>
                            </div>
                        </div>
                        <div class="col-md-3 ml-auto mr-0 mb-3">
                            <label>Payment Status</label>
                            <div class="dropdown bootstrap-select form-control aiz-"><select
                                    class="form-control aiz-selectpicker" id="update_payment_status"
                                    data-minimum-results-for-search="Infinity" data-selected="unpaid" tabindex="-98">
                                    <option value="paid">Paid</option>
                                    <option value="unpaid">Unpaid</option>
                                </select><button type="button" class="btn dropdown-toggle btn-light"
                                    data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                    aria-haspopup="listbox" aria-expanded="false" data-id="update_payment_status"
                                    title="Unpaid">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Unpaid</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu" style="overflow: hidden;">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                        aria-activedescendant="bs-select-1-1" style="overflow-y: auto;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                    class="dropdown-item active selected" id="bs-select-1-0"
                                                    tabindex="0" aria-setsize="2" aria-posinset="1"
                                                    aria-selected="true"><span class="text">Paid</span></a></li>
                                            <li class="selected active"><a role="option"
                                                    class="dropdown-item active selected" id="bs-select-1-1"
                                                    tabindex="0" aria-setsize="2" aria-posinset="2"
                                                    aria-selected="true"><span class="text">Unpaid</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Delivery Status</label>
                            <div class="dropdown bootstrap-select form-control aiz-"><select
                                    class="form-control aiz-selectpicker" id="update_delivery_status"
                                    data-minimum-results-for-search="Infinity" data-selected="order_placed"
                                    tabindex="-98">
                                    <option value="confirmed">Confirmed</option>
                                    <option value="processed">Processed</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="cancelled">Cancel</option>
                                </select><button type="button" class="btn dropdown-toggle btn-light"
                                    data-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                    aria-haspopup="listbox" aria-expanded="false" data-id="update_delivery_status"
                                    title="Processed">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Processed</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu" style="overflow: hidden;">
                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"
                                        style="overflow-y: auto;" aria-activedescendant="bs-select-2-1">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-0" tabindex="0"
                                                    aria-setsize="5" aria-posinset="1"><span
                                                        class="text">Confirmed</span></a></li>
                                            <li class="selected active"><a role="option"
                                                    class="dropdown-item active selected" id="bs-select-2-1"
                                                    tabindex="0" aria-setsize="5" aria-posinset="2"
                                                    aria-selected="true"><span class="text">Processed</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-2" tabindex="0"
                                                    aria-setsize="5" aria-posinset="3"><span
                                                        class="text">Shipped</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-3"
                                                    tabindex="0"><span class="text">Delivered</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-4"
                                                    tabindex="0"><span class="text">Cancel</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <div class="flex-grow-1 row align-items-start">
                        <div class="col-md-auto w-md-250px">
                            <h5 class="fs-14 mb-3">Shipping Address</h5>
                            <address class="">
                                123456789<br>
                                3977 Duke Lane<br>
                                Alabaster, 5520<br>
                                Alabama, United States
                            </address>
                        </div>
                        <div class="col-md-auto w-md-250px">
                            <h5 class="fs-14 mb-3">Billing Address</h5>
                            <address class="">
                                123456789<br>
                                3977 Duke Lane<br>
                                Alabaster, 5520<br>
                                Alabama, United States
                            </address>
                        </div>
                        <div class="col-md-4 col-xl-3 ml-auto mr-0">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td class="">Order code</td>
                                        <td class="text-right text-info fw-700">20220125-08204785</td>
                                    </tr>
                                    <tr>
                                        <td class="">Order Date</td>
                                        <td class="text-right fw-700">25.01.2022</td>
                                    </tr>
                                    <tr>
                                        <td class="">Delivery type</td>
                                        <td class="text-right fw-700">
                                            Express
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">Payment Method</td>
                                        <td class="text-right fw-700">Cash on delivery</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="aiz-table table-bordered footable footable-1 breakpoint breakpoint-xs" style="">
                        <thead>
                            <tr class="footable-header">






                                <th class="text-center" width="5%" data-breakpoints="lg" style="display: none;">#</th>
                                <th width="40%" class="footable-first-visible footable-last-visible"
                                    style="display: table-cell;">Product</th>
                                <th class="text-center" data-breakpoints="lg" style="display: none;">QTY</th>
                                <th class="text-center" data-breakpoints="lg" style="display: none;">Unit price</th>
                                <th class="text-center" data-breakpoints="lg" style="display: none;">Unit tax</th>
                                <th class="text-center" data-breakpoints="lg" style="display: none;">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>






                                <td style="display: none;">1</td>
                                <td class="footable-first-visible footable-last-visible" style="display: table-cell;">
                                    <span class="footable-toggle fooicon fooicon-plus"></span>
                                    <div class="media">
                                        <img src="https://shop.activeitzone.com/public/uploads/all/f121PGFfa83b4nf5R04lhwQSM3VxCtyyrYWZf1Hn.webp"
                                            class="size-60px mr-3">
                                        <div class="media-body">
                                            <h4 class="fs-14 fw-400">GRACE KARIN Women's 50s Vintage Pencil Dress Cap
                                                Sleeve Wiggle Dress</h4>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center" style="display: none;">4</td>
                                <td class="text-center" style="display: none;">69.00$</td>
                                <td class="text-center" style="display: none;">2.07$</td>
                                <td class="text-center" style="display: none;">284.28$</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 ml-auto mr-0">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong class="">Sub Total :</strong></td>
                                        <td>
                                            276.00$
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong class="">Tax :</strong></td>
                                        <td>8.28$</td>
                                    </tr>
                                    <tr>
                                        <td><strong class=""> Shipping :</strong></td>
                                        <td>5.00$</td>
                                    </tr>
                                    <tr>
                                        <td><strong class=""> Coupon discount :</strong></td>
                                        <td>0.00$</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="">Total :</strong></td>
                                        <td class=" h4">
                                            289.28$
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
</div>