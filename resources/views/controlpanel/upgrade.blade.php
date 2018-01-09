@extends('layouts.template')
@section('active')
<ul class="nav">
    <li >
        <a href="dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="user">
            <i class="material-icons">person</i>
            <p>User Profile</p>
        </a>
    </li>
    <li>
        <a href="table">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
        </a>
    </li>
    <li >
        <a href="typography">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li>
        <a href="icons">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li >
        <a href="maps">
            <i class="material-icons">location_on</i>
            <p>Maps</p>
        </a>
    </li>
    <li>
        <a href="notifications">
            <i class="material-icons text-gray">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="active-pro active">
        <a href="upgrade">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
</ul>
@overwrite
@section('page_titre')
<a class="navbar-brand" href="#"> Upgrade </a>
@overwrite

@section('contents')
<div class="content">
    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="card">
                                <div class="card-header text-center" data-background-color="purple">
                                    <h4 class="title">Material Dashboard PRO</h3>
                                        <p class="category">Are you looking for more components? Please check our Premium Version of Material Dashboard.</p>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <th></th>
                                                <th class="text-center">Free</th>
                                                <th class="text-center">PRO</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Components</td>
                                                    <td class="text-center">60</td>
                                                    <td class="text-center">200</td>
                                                </tr>
                                                <tr>
                                                    <td>Plugins</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">15</td>
                                                </tr>
                                                <tr>
                                                    <td>Example Pages</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">27</td>
                                                </tr>
                                                <tr>
                                                    <td>Login, Register, Pricing, Lock Pages</td>
                                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Mini Sidebar</td>
                                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Premium Support</td>
                                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-center">Free</td>
                                                    <td class="text-center">Just $49</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a target="_blank" href="http://www.creative-tim.com/product/material-dashboard-pro/?ref=md-free-upgrade-live" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
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

@overwrite