<?php require "php/check_login.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bethany Negash Admin - Visitor</title>
        <?php require "php/templates/heading.php";?>
    </head>
    <body>
        <div id="wrapper">
            <?php require "php/templates/nav.php";?>
            <div id="page-wrapper">
                <div class="row">
                    <!--The form for donation input into the database-->
                    <div class="col-lg-12">
                        <form role="form" action="/Minh/set_facility_visitor.php" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>Page Visitors Form</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Visitors</label>
                                <input type="number" name="visits" value="1" min="0" data-number-to-fixed="2" data-number-stepfactor="100" required>
                                <p class="help-block">* Required</p>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input id="datepicker" class="form-control" name="visitDate" required>
                                <p class="help-block"> * Required</p>
                                <select id="format">
                                    <option value="dd MM yy">Medium - dd MM y</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Money Donation Report Table</h2>
                                <ul class="checkboxes">
                                    <li><input type="checkbox" name="visitors" checked>Total Visitors</li>
                                    <li><input type="checkbox" name="dayDate" checked>Day</li>
                                    <li><input type="checkbox" name="monthDate" checked>Month</li>
                                    <li><input type="checkbox" name="yearDate" checked>Year</li>
                                </ul>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover donateTable" ><!-- id="dataTables-example" -->
                                    <thead>
                                        <tr>
                                            <th class="visitors">Visitors</th>
                                            <th class="dayDate">Day</th>
                                            <th class="monthDate">Month</th>
                                            <th class="yearDate">Year</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tableDataVisit">
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
