<!DOCTYPE html>
<html lang="en">
<?php
require('includes/head.php');
?>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TechStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Admins</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Your name
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Show Order : id here</h3>
                <div class="card">
                    <div class="card-body p-5">
                        <table class="table table-bordered">
                            <thead>
                                <th colspan="2" class="text-center">Customer</th>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Name</th>
                                <td>kareem fouad</td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td>kareem@techstore.com</td>
                              </tr>
                              <tr>
                                <th scope="row">Phone</th>
                                <td>01012345678</td>
                              </tr>
                              <tr>
                                <th scope="row">Address</th>
                                <td>15 nasr city, cairo, Egypt</td>
                              </tr>
                              <tr>
                                <th scope="row">Time</th>
                                <td>2020-12-06</td>
                              </tr>
                              <tr>
                                <th scope="row">Status</th>
                                <td>pending</td>
                              </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Lenovo ideapad</td>
                                <td>2</td>
                                <td>$10000</td>
                              </tr>
                              <tr>
                                <td>Samsung note</td>
                                <td>1</td>
                                <td>$2000</td>
                              </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>Change Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>$22000</td>
                                <td>
                                    <a class="btn btn-success" href="#">Approve</a>
                                    <a class="btn btn-danger" href="#">Cancel</a>
                                </td>
                              </tr>
                            </tbody>
                        </table>

                        <a class="btn btn-dark" href="#">Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
require('includes/script.php');
?>
</body>
</html>