<?php
require "php/check_login.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bethany Negash Admin - Cash Donations</title>
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
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="fName"placeholder="First Name">
                                <p class="help-block"> * Required</p>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="lName"placeholder="Last Name">
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date"placeholder="Enter text">
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Amount ($)</label>
                                <input type="number" name="amount" value="1.00" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address"placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email"placeholder="Email">
                                <p class="help-block">* Required</p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cash Donation Report Table
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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
                    <!-- /.row -->
                </div>
            </div>
            <!-- /#wrapper -->
            <?php require "php/templates/footing.php";?>
        </body>
    </html>