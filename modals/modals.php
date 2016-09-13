<div id="payment">
    <div class="pop-up-wrapper">
        <h3>Payment</h3>
        <div class="row">
            <div class="col-xs-8">Amount Tendered</div>
            <div class="col-xs-4"></div> 
        </div>

        <div class="row">

            <div id="accordion">
                <h3>Cash</h3>
                <div>
                    Test
                </div>
                <h3>Credit / Debit</h3>
                <div>
                    Test
                </div>
                <h3>PayPal</h3>
                <div>
                    Test>
                </div>
                <h3>Venmo</h3>
                <div>
                    Test
                </div>
            </div>

        </div>

        <button class="payment_close">Cancel</button>
    </div>
</div>

<div id="add-customer">
    <div class="pop-up-wrapper">
        <a href="" class="add-prod_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Add A Customer</h3>
        <div class="user-forms">
            <input type="text" name="search" class="fname" placeholder="First Name">
            <input type="text" name="search" class="lname" placeholder="Last Name">
            <input type="text" name="search" class="d-license" placeholder="DRIVER's License #">
            <input type="text" name="search" class="d-license-st" placeholder="State">
            <input type="text" name="search" class="home" placeholder="Home Phone">
            <input type="text" name="search" class="cell" placeholder="Cell Phone">
            <input type="text" name="search" class="e-mail" placeholder="E-Mail">
            <input type="text" name="search" class="dob" placeholder="Date of Birth">
            <input type="text" name="search" class="address" placeholder="Address">
            <input type="text" name="search" class="city" placeholder="City">
            <input type="text" name="search" class="state" placeholder="State">
            <input type="text" name="search" class="zip" placeholder="Zip">
        </div>
        <button class="add-a">Add Customer</button>
        <div class="col-md-12">
        </div>
    </div>
</div>

<div id="add-prod">
    <div class="pop-up-wrapper">
        <a href="" class="add-prod_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Add Product</h3>
        <input type="text" name="search" class="r50" placeholder="Batch Number">
        <input type="text" name="search" class="l50" placeholder="Cost per item">
        <input type="text" name="search" class="r50" placeholder="Price">
        <input type="text" name="search" class="l50" placeholder="Quantity">
        <input type="text" name="search" class="r50" placeholder="Category">
        <input type="text" name="search" class="l50" placeholder="Tax Amount">
        <button class="add-p">Add Product</button>
        <div class="col-md-12">
        </div>
    </div>
</div>


<div id="edit-prod">

    <div class="pop-up-wrapper">

        <a href="" class="edit-prod_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Edit Product</h3>
        <div id="tabs2">
            <ul>
                <li><a href="#tabs2-1">Description</a></li>
                <li><a href="#tabs2-2">Batches</a></li>
                <li><a href="#tabs2-3">Lab Results</a></li>
            </ul>
            <div id="tabs2-1">

                <h4>High Standards</h4>
                Many Cannabis extracts are produced using trim or low-quality Cannabis, which results in final products with less cannabinoids and terpenes. The most medicinal extracts can be crafted only by using organic, highly potent buds.
                <h4>Extracted With Care</h4>
                Organic food-grade ethanol has been used for thousands of years by herbalists as their solvent of choice. It effectively pulls out the full spectrum of beneficial compounds from the plant matter in the safest manner possible. Through a low-and-slow heating method, the ethanol is efficiently evaporated out while preserving the cannabinoids and terpenes, resulting in solvent-free, powerful extracts that enable patients to easily consume their recommended doses.
                <h4>Is This Right For Me?</h4>
                For patients who need especially high therapeutic doses, full-strength Cannabis extracts are undoubtedly the best option. We recommend sublingual application for maximum bioavailability. The extract can also be ingested orally or use in a vaporizer pen. Available in 3g, 5g, and 10g oral syringes.
            </div>
            <div id="tabs2-2">
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
                <hr></hr>
            <div class="a-batches">
                <select name="carlist" form="carform" class="l50">
                    <option value="inventory">-- Select Inventory Item --</option>
                    <option value="zelda">OG Kush</option>
                    <option value="saab">Cannabis Oil</option>

                </select>
                <input type="text" name="search" class="r50" placeholder="Batch Number">
                <input type="text" name="search" class="l50" placeholder="Cost per item">
                <input type="text" name="search" class="r50" placeholder="Price">
                <input type="text" name="search" class="l50" placeholder="Quantity">
                <input type="text" name="search" class="r50" placeholder="Unit of Measure">
                <button class="r50">ADD</button>

            </div>
        </div>

        <div id="tabs2-3">
            <p></p>
        </div>
    </div>
</div>

</div>
<div id="void">
    <div class="pop-up-wrapper">
        <a href="" class="void_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Cancel Order</h3>
        <p>Are you sure you want to cancel this sale?</p>
        <div class="col-md-12">
            <button class="void-order">Yes</button>
            <button class="void_close">No</button>
        </div>
    </div>
</div>

<div id="save">
    <div class="pop-up-wrapper">
        <a href="" class="save_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Save Order</h3>
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-6">Customer</div>
                <div class="col-md-6 pu-small"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Customer</div>
            </div>
            <div class="col-md-4">
                <select name="customers">
                    <option value="volvo">Joe Smith</option>
                    <option value="saab">Joe Smith</option>
                    <option value="fiat">Joe Smith</option>
                    <option value="audi">Joe Smith</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>Hold Reference:</p>
            </div>
            <div class="col-md-4">
                <input type="text" class="ref pu" name="user">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="void-order">Save Order</button>
                <button class="save_close">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="note">
    <div class="pop-up-wrapper">
        <a href="" class="note_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Add a Note</h3>
        <textarea name="notes" class="a-note" rows="5"></textarea>
        <div class="row">
            <button class="void-order">Add Note</button>
            <button class="note_close">Close</button>
        </div>
    </div>
</div>

<div id="discount">
    <div class="pop-up-wrapper">
        <a href="" class="discount_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Apply Discount</h3>
        Enter a discount amount, (5% or $5)
        <textarea name="discount" class="a-note" rows="1"></textarea>
        <button class="discount_close">Close</button>
    </div>
</div>

<div id="the-product">
    <div class="pop-up-wrapper">
        <a href="" class="the-product_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Add to Cart</h3>
        <input type="text" name="search" class="l50" placeholder="1 gram">
        <input type="text" name="search" class="r50" placeholder="3.5 grams">
        <input type="text" name="search" class="l50" placeholder="7 grams">
        <input type="text" name="search" class="r50" placeholder="14 grams">
        <input type="text" name="search" class="l50" placeholder="28 grams">

        <button class="the-product_close">Add to Cart</button>
    </div>
</div>

<div id="employees">
    <div class="pop-up-wrapper">
        <a href="" class="employees_close exit"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        <h3>Add Employee</h3>
        <div class="col-md-12 no-pad customer-edit">

            <div class="user-forms">
                <input type="text" name="search" class="fname" placeholder="First Name">
                <input type="text" name="search" class="lname" placeholder="Last Name">
                <input type="text" name="search" class="d-license" placeholder="DRIVER's License #">
                <input type="text" name="search" class="d-license-st" placeholder="State">
                <input type="text" name="search" class="home" placeholder="Home Phone">
                <input type="text" name="search" class="cell" placeholder="Cell Phone">
                <input type="text" name="search" class="e-mail" placeholder="E-Mail">
                <input type="text" name="search" class="dob" placeholder="Date of Birth">
                <input type="text" name="search" class="address" placeholder="Address">
                <input type="text" name="search" class="city" placeholder="City">
                <input type="text" name="search" class="state" placeholder="State">
                <input type="text" name="search" class="zip" placeholder="Zip">
            </div>


        </div>
    </div>
</div>

