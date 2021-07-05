<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: BigBucket :: Table Basic</title>

    <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    @include('include.upbar')

    <div class="main_content" id="main-content">
        @include('include.sidebar');

        <div class="right_sidebar">
            <div class="setting_div">
                <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
            </div>
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings"
                        role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
                <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                        aria-controls="Contact" aria-selected="false">Contact</a></li>
            </ul>
            <hr>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                    <div class="sidebar-scroll">
                        <div class="sidebar-widget px-3">
                            <h5>Theme Setting</h5>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="azure">
                                    <div class="azure"></div>
                                </li>
                                <li data-theme="indigo" class="active">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Dark Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-dark">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Mini Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-sidebar">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>Language Setting</h5>
                            <select class="selectpicker" title="Select language">
                                <option>English</option>
                                <option>Spanish</option>
                                <option>Chinese</option>
                                <option>Hindi</option>
                                <option>Arabic</option>
                            </select>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>General Setting</h5>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Report Panel Usage</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Email Redirect</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Notifications</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Location Permission</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">New Project</h4>
                                <h4 class="progress-percentage text-uppercase">$950</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase"> Admin</h4>
                                <h4 class="progress-percentage text-uppercase">$10k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Balance</h4>
                                <h4 class="progress-percentage text-uppercase">$50k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Storage</h4>
                                <h4 class="progress-percentage text-uppercase">35GB</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                                <span class="btn-inner--visible">Upgrade Now</span>
                                <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                    <div class="sidebar-widget px-3">
                        <ul class="list-unstyled contact-list">
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Index</th>
                                                <th>Postingan</th>
                                                <th>Alasan Report</th>
                                                <th>Waktu</th>
                                                <th>ID User</th>
                                                <th>ID Utas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>System Architect</td>
                                                <td>Spam</td>
                                                <td>61</td>
                                                <td>91</td>
                                                <td>22</td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>Accountant</td>
                                                <td>Konten Dewasa</td>
                                                <td>63</td>
                                                <td>12</td>
                                                <td>65</td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td>Junior Technical Author</td>
                                                <td>Kredensial Tidak Pantas</td>
                                                <td>66</td>
                                                <td>55</td>
                                                <td>111</td>
                                            </tr>
                                            <tr>
                                                <td>004</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Kredensial Tidak Pantas</td>
                                                <td>22</td>
                                                <td>99</td>
                                                <td>34</td>
                                            </tr>
                                            <tr>
                                                <td>005</td>
                                                <td>Accountant</td>
                                                <td>Spam</td>
                                                <td>33</td>
                                                <td>66</td>
                                                <td>24</td>
                                            </tr>
                                            <tr>
                                                <td>006</td>
                                                <td>Integration Specialist</td>
                                                <td>Kredensial Tidak Pantas</td>
                                                <td>61</td>
                                                <td>77</td>
                                                <td>88</td>
                                            </tr>
                                            <tr>
                                                <td>007</td>
                                                <td>Sales Assistant</td>
                                                <td>Spam</td>
                                                <td>59</td>
                                                <td>34</td>
                                                <td>56</td>
                                            </tr>
                                            <tr>
                                                <td>008</td>
                                                <td>Integration Specialist</td>
                                                <td>Kredensial Tidak Pantas</td>
                                                <td>55</td>
                                                <td>19</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>009</td>
                                                <td>Javascript Developer</td>
                                                <td>Konten Dewasa</td>
                                                <td>39</td>
                                                <td>11</td>
                                                <td>90</td>
                                            </tr>
                                            <tr>
                                                <td>010</td>
                                                <td>Software Engineer</td>
                                                <td>Kredensial Tidak Pantas</td>
                                                <td>23</td>
                                                <td>98</td>
                                                <td>99</td>
                                            </tr>
                                            <tr>
                                                <td>011</td>
                                                <td>Office Manager</td>
                                                <td>Spam</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>012</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>013</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
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
    </div>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/bundles/datatablescripts.bundle.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="../assets/js/theme.js"></script>
    <!-- Custom Js -->
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
