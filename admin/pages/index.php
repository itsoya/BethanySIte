<?php require "php/check_login.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bethany Negash Admin - Paypal Donations</title>
        <?php require "php/templates/heading.php";?>
    </head>
    <body>
        <div id="wrapper">
            <?php require "php/templates/nav.php";?>
            <div id="page-wrapper">
                <div class="row">
                    <!--The form for donation input into the database-->
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>Paypal Donation Form</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="fName"placeholder="First Name" required>
                                <p class="help-block"> * Required</p>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="lName"placeholder="Last Name" required>
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email"placeholder="Email" required>
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Amount ($)</label>
                                <input type="number" name="amount" value="1.00" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required>
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date"placeholder="Enter text" required>
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <?php require "php/templates/countryForm.php";?>
                            </div>
                            <div id="usaForm">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address" value="None" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" type="city" name="city" value="None" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input class="form-control" type="zip" name="zip" value="None" placeholder="zip">
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <?php require "php/templates/stateForm.php";?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Paypal Donation Report Table</h2>
                                <ul class="checkboxes">
                                    <li><input type="checkbox" name="fname" checked>First Name</li>
                                    <li><input type="checkbox" name="lname" checked>Last Name</li>
                                    <li><input type="checkbox" name="email" checked>Email</li>
                                    <li><input type="checkbox" name="amount" checked>Amount</li>
                                    <li><input type="checkbox" name="date" checked>Date</li>
                                    <li><input type="checkbox" name="country">Country</li>
                                    <li><input type="checkbox" name="address">Address</li>
                                    <li><input type="checkbox" name="city">City</li>
                                    <li><input type="checkbox" name="zip">Zip</li>
                                    <li><input type="checkbox" name="state">State</li>
                                </ul>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover donateTable" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="fname">First Name</th>
                                                <th class="lname">Last Name</th>
                                                <th class="email">Email</th>
                                                <th class="amount">Amount</th>
                                                <th class="date">Date</th>
                                                <th class="country">Country</th>
                                                <th class="address">Address</th>
                                                <th class="city">City</th>
                                                <th class="zip">Zip</th>
                                                <th class="state">State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fname">3</td>
                                                <td class="lname">2</td>
                                                <td class="email">s</td>
                                                <td class="amount">4</td>
                                                <td class="date">X</td>
                                                <td class="country">d</td>
                                                <td class="address">X</td>
                                                <td class="city">d</td>
                                                <td class="zip">X</td>
                                                <td class="state">d</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#wrapper -->
            <?php require "php/templates/footing.php";?>
        </body>
    </html>