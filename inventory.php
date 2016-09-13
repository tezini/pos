<div class="page-title">Inventory</div>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Products</a></li>
        <li><a href="#tabs-2">Batches</a></li>
        <li><a href="#tabs-3">Suppliers</a></li>
        <li><a href="#tabs-4">Brands</a></li>
    </ul>
    <div id="tabs-1">
        <div class="products-grid">
            <table id="example">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Tax</th>
                        <th>Cost</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td><a href="#" class="edit-prod_open">Cannabis Oil</a></td>
                        <td>Oils</td>
                        <td>Y</td>
                        <td>1.50</td>
                        <td>5.00</td>
                        <td>TEST</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td><a href="#" class="edit-prod_open">Cannabis Hemp</a></td>
                        <td>Hemps</td>
                        <td>Y</td>
                        <td>25.50</td>
                        <td>75.00</td>
                        <td>TEST</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td><a href="#" class="edit-prod_open">Cannabis Hemp</a></td>
                        <td>Hemps</td>
                        <td>Y</td>
                        <td>25.50</td>
                        <td>75.00</td>
                        <td>TEST</td>
                    </tr>
                </tbody>
            </table>

            <div class="export">
                <h3>Export</h3>
                <div class="row">
                    <div class="exp-wrap">
                        <button type="button" class="exp">CSV</button>
                        <button type="button" class="exp">Excel</button>
                        <button type="button" class="exp">PDF</button>
                        <button type="button" class="exp">Print</button>
                    </div>
                    <div class="add-wrap">
                        <button class="add-prod_open">Add Product</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="tabs-2">
        <h3>Add Batch</h3>
        <div class="a-batches">
            <select name="carlist" form="carform" class="l50">
                <option value="zelda">Aunt Zelda</option>
                <option value="saab">Genius</option>

            </select>
            <input type="text" name="search" class="r50" placeholder="Batch Number">
            <input type="text" name="search" class="l50" placeholder="Cost per item">
            <input type="text" name="search" class="r50" placeholder="Price">
            <input type="text" name="search" class="l50" placeholder="Quantity">
            <input type="text" name="search" class="r50" placeholder="Unit of Measure">
            <button class="r50">ADD</button>

        </div>
        <div class="row"><hr></div>
        <div class="row">
            <h3>Batches</h3>
            <div>
                <table id="batches">
                    <thead>
                        <tr>
                            <th>Batch Number</th>
                            <th>Supplier</th>
                            <th>Total Added</th>
                            <th>Total Sold</th>
                            <th>On Hand</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B1</td>
                            <td>Aunt Zelda</td>
                            <td>23</td>
                            <td>2</td>
                            <td>21</td>
                            <td>$550</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="tabs-3">

        <div class="row">

            <div class="col-md-3 no-pad">
                <form action="search.html" class="customers-search-form">
                    <input type="text" name="search" class="search" placeholder="Search Suppliers"><a href="#" class="add-customer_open"><div class="add-user"><i class="fa fa-user-plus middle" aria-hidden="true"></i></div></a>
                </form>

                <div class="customers-wrapper">
                    <div class="customers-wrapper-inner" style="border:0px solid black;width:100%;height:90vh;overflow:scroll;">

                        <ul>

                            <li class="customer">
                                <h2>Kyle Irving</h2>
                                <h3>(301) 330 - 3810</h3>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 no-pad customer-edit">
                <div class="user-forms">
                    <input type="text" name="search" class="fname" placeholder="Supplier Name">
                    <input type="text" name="search" class="lname" placeholder="Supplier Type">
                    <input type="text" name="search" class="address" placeholder="Address">
                    <input type="text" name="search" class="city" placeholder="City">
                    <input type="text" name="search" class="state" placeholder="State">
                    <input type="text" name="search" class="zip" placeholder="Zip">
                    <input type="text" name="search" class="home" placeholder="Phone">
                    <input type="text" name="search" class="cell" placeholder="Description">

                    <button class="update-s">UPDATE SUPPLIER</button>
                </div>
            </div>
        </div>
    </div>
    <div id="tabs-4">

        <div class="row">

            <div class="col-md-3 no-pad">
                <form action="search.html" class="customers-search-form">
                    <input type="text" name="search" class="search" placeholder="Search Brands"><a href="#"><div class="add-user"><i class="fa fa-user-plus middle" aria-hidden="true"></i></div></a>
                </form>

                <div class="customers-wrapper">
                    <div class="customers-wrapper-inner" style="border:0px solid black;width:100%;height:90vh;overflow:scroll;">

                        <ul>

                            <li class="customer">
                                <h2>Kyle Irving</h2>
                                <h3>(301) 330 - 3810</h3>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 no-pad customer-edit">
                <div class="brands user-forms">
                    <input type="text" name="search" class="fname" placeholder="Brand Name">

                    <button class="update-b">UPDATE BRAND</button>
                </div>
            </div>
        </div>
    </div>
</div>