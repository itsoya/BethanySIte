<?php require "php/check_login.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bethany Negash Admin - Money Donations</title>
        <?php require "php/templates/heading.php";?>
    </head>
    <body>
        <div id="wrapper">
            <?php require "php/templates/nav.php";?>
            <div id="page-wrapper">
                <div class="row">
                    <!--The form for donation input into the database-->
                    <div class="col-lg-12">
                        <form role="form" action="/Minh/Donation/set_donation.php" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>Money Donation Form</h2>
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
                                <input id="datepicker" class="form-control" name="date" required>
                                <p class="help-block"> * Required</p>
                                <select id="format">
                                    <option value="d MM, yy">Medium - d MM, y</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Payment Type</label>
                                <select class="form-control" type="type" name="type" name="type">
                                    <option value="Paypal">Paypal</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                            <div class="form-group" style="float: left; clear: left;">
                                <label>Project</label>
                                <input class="form-control" type="project" name="project" value="N/A"placeholder="Related Projects">
                            </div>
                            <div class="form-group" style="float: left; clear: none;">
                                <label>Country</label>
                                <?php require "php/templates/countryForm.php";?>
                            </div>
                            <div id="addressForm">
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <input class="form-control" name="address1" value="N/A" placeholder="Address 1">
                                </div>
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <input class="form-control" name="address2" value="N/A" placeholder="Address 2">
                                </div>
                                <div class="form-group">
                                    <label>Address 3</label>
                                    <input class="form-control" name="address3" value="N/A" placeholder="Address 3">
                                </div>
                                <div class="form-group">
                                    <label>Address 4</label>
                                    <input class="form-control" name="address4" value="N/A" placeholder="Address 4">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Money Donation Report Table</h2>
                                <ul class="checkboxes">
                                    <li><input type="checkbox" name="fname" checked>First Name</li>
                                    <li><input type="checkbox" name="lname" checked>Last Name</li>
                                    <li><input type="checkbox" name="email" checked>Email</li>
                                    <li><input type="checkbox" name="amount" checked>Amount</li>
                                    <li><input type="checkbox" name="date" checked>Date</li>
                                    <li><input type="checkbox" name="type" checked>Type</li>
                                    <li><input type="checkbox" name="project">Project</li>
                                    <li><input type="checkbox" name="country">Country</li>
                                    <li><input type="checkbox" name="address1">Addr 1</li>
                                    <li><input type="checkbox" name="address2">Addr 2</li>
                                    <li><input type="checkbox" name="address3">Addr 3</li>
                                    <li><input type="checkbox" name="address4">Addr 4</li>
                                </ul>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover donateTable" ><!-- id="dataTables-example" -->
                                    <thead>
                                        <tr>
                                            <th class="fname">First Name</th>
                                            <th class="lname">Last Name</th>
                                            <th class="email">Email</th>
                                            <th class="amount">Amount</th>
                                            <th class="date">Date</th>
                                            <th class="type">Type</th>
                                            <th class="project">Project</th>
                                            <th class="country">Country</th>
                                            <th class="address1">Address 1</th>
                                            <th class="address2">Address 2</th>
                                            <th class="address3">Address 3</th>
                                            <th class="address4">Address 4</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableData">
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