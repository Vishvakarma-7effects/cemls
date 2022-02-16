<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cemls</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/adminab.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>    
</head>
<body>

    <main class="maincnt">
      <header class="adm_header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg>
            </button>
            <a class="navbar-brand" href="#">
              <img src="images/logo.png" alt="Logo" />
            </a>
            

            <div class="navcollapse justify-content-end collapse navbar-collapse" id="mnbar">
              <div class="tcell twcell">
                <form class="form-inline sform" id="collapseSearch">
                  <img src="images/locicon.png" class="locicon" />
                  <input class="form-control" type="text" placeholder="Search" name="">
                  <select class="form-control">
                    <option>Products</option>
                  </select>
                  <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              <div class="tcell mmlist">
                <ul class="navbar-nav dtable">
                  <li class="nav-item tcell">
                    <a class="nav-link" href="#">List your Property</a>
                  </li>
                  <li class="nav-item tcell">
                    <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
                  </li>
                  <li class="nav-item tcell">
                    <a class="nav-link" href="#">Sell Products</a>
                  </li>
                  
                </ul>
              </div>
              <div class="tcell mnrht">
                <ul class="nrht dtable">
                  <li class="tcell dropdown msearch">
                    <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseSearch"><i class="fa fa-search"></i></a>
                  </li>
                  <li class="tcell">
                    <div class="dropdown">
                      <a href="#null" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="nbx">
                            <i class="fas fa-bell"></i>
                            <span class="ncount">2</span>
                            
                        </div>
                      </a>
                      <div class="nbx_popup dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <h3 class="clearfix">Notifications <a href="#">Mark all as read</a></h3>
                        <div class="nbx_inner clearfix">
                          <div class="nbx_lft">
                            <h4>John</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                          </div>
                          <div class="nbx_rht">2 min ago</div>
                        </div>
                        <div class="nbx_inner clearfix">
                          <div class="nbx_lft">
                            <h4>John</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                          </div>
                          <div class="nbx_rht">2 min ago</div>
                        </div>
                        <div class="nbx_inner clearfix">
                          <div class="nbx_lft">
                            <h4>John</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                          </div>
                          <div class="nbx_rht">2 min ago</div>
                        </div>

                      </div>
                    </div>
                  </li>
                  <li class="nu_profile tcell">
                      <div class="nu_pinner">
                        <span class="usericon">
                          <img src="images/user-img.png" alt="" />
                        </span>
                        <span class="untxt">Jimmy</span>
                        <i class="fa fa-caret-down"></i>
                      </div>
                      <ul class="nu_ullist">
                          <li><a href="#">Profile</a></li>
                          <li><a href="#">Logout</a></li>
                      </ul>
                  </li>
                  <li class="tcell"><a href="#"><span class="cartbx"><img src="images/carticon.png" /></span></a></li>
                </ul>
              </div>
              
            </div>
          </nav>
          <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </button>
      </header>

      <main class="adm_container clearfix collapse navbar-collapse" id="navbarSupportedContent">
        <aside class="asidelft" >
          <ul>
            <li class="active"><a href="#"><span><img src="images/lfticon1.png"></span> <bdi>Dashboard</bdi></a></li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><img src="images/lfticon2.png"></span> <bdi>Property</bdi></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="#"><span><img src="images/lfticon14.png"></span> <bdi>Cemetery</bdi></a>
                  <a class="dropdown-item active" href="CemeteryAdd.html"><span><img src="images/lfticon15.png"></span> <bdi>Add Cemetery</bdi></a>
                  <a class="dropdown-item" href="Plots.html"><span><img src="images/lfticon16.png"></span> <bdi>Plots</bdi></a>
                  <a class="dropdown-item" href="#"><span><img src="images/lfticon17.png"></span> <bdi>Add Plots</bdi></a>
                </div>
            </li>
            <li><a href="#"><span><img src="images/lfticon3.png"></span> <bdi>Products</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon4.png"></span> <bdi>Services</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon5.png"></span> <bdi>Orders</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon6.png"></span> <bdi>Payments</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon7.png"></span> <bdi>Communication</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon8.png"></span> <bdi>Data Sync</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon9.png"></span> <bdi>Widgets</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon10.png"></span> <bdi>Subscription</bdi></a></li>
            <li><a href="AllUsers.html"><span><img src="images/lfticon11.png"></span> <bdi>All Users</bdi></a></li>
            <li><a href="#"><span><img src="images/lfticon12.png"></span> <bdi>Roles</bdi></a></li>
            <li><a href="MyAccount.html"><span><img src="images/lfticon13.png"></span> <bdi>My Account</bdi></a></li>
          </ul>
        </aside>

        
        <section class="panelrht">
            <nav aria-label="breadcrumb " class="mt-3 mt-lg-0">
              <ol class="breadcrumb d-none d-lg-block">
                <li class="breadcrumb-item active" aria-current="page">&nbsp;</li>
              </ol>
            </nav>
            <h1 class="mheading">Dashboard</h1>
            <section class="bxshadow">
                <div class="cntbox">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-0 pr-lg-3">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#ttllistModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon1.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>74</h3>
                            <p>Total Litings</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-3 pr-lg-3 pr-md-0">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#lrecdModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon2.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>107</h3>
                            <p>Lead Recieved</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-0 pr-md-3">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#listingModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon3.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>39</h3>
                            <p>Top Listings</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-6 mb-lg-4 pr-3 pr-lg-3 pr-md-0">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#zcodeModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon4.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>17</h3>
                            <p>Top Zip Codes</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-6 pr-0 pr-lg-3 pr-md-0">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#smModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon5.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>28</h3>
                            <p>Social Media Leads</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-6">
                        <div class="dashbx clearfix" data-toggle="modal" data-target="#mbuModal">
                          <div class="dashbx_img">
                            <img src="images/dash-icon6.png" alt="" />
                          </div>
                          <div class="dashbx_cnt">
                            <h3>54%</h3>
                            <p>Mobile Users</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="px-3">
                  <div class="row">
                      <div class="col-lg-4 py-3 py-lg-4 dashlft text-center">
                        <h2 class="sheading text-center">My Cemeteries Progress</h2>
                        <svg class="progress blue noselect" data-progress="75" x="0px" y="0px" viewBox="0 0 80 80">
                          <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                          <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                          <text class="value" x="50%" y="55%">0%</text>
                        </svg>
                        <p class="mb-0"><span>Completing Phone will bring</span><br/><bdi class="cl_blue">Rozet Cemetery CCCD</bdi> to 85%.</p>
                      </div>
                      <div class="col-lg-8 py-3 py-lg-4 dashrht">
                          <h2 class="sheading mb-2">Rozet Cemetery CCCD</h2>
                          <div class="row">
                            <div class="col-lg-6">
                              <h4>Map views v Listing views</h4>
                            </div>
                            <div class="col-lg-6">
                              <div class="calbx">
                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control" name="" placeholder="03/01/2018 - 03/13/2018" />
                              </div>
                            </div>
                          </div>

                          <div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <canvas id="speedChart" width="600" height="270"></canvas>
                              </div>
                              
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <i class="fa fa-chevron-right"></i>
                            </a>
                          </div>
                          
                      </div>
                  </div>
                </div>

                <div class="cntbox border-top">
                  <h2 class="sheading mb-2">Visitor’s Location</h2>
                  <h4 class="hline">Top locations from where the listings are viewed</h4>
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="wmap">
                        <img src="images/worldmap.jpg" />
                      </div>
                    </div>

                    <div class="col-lg-5">
                        <table class="table stable">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Location</th>
                              <th scope="col"># of listing views</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                            <tr>
                              <th scope="row">1</th>
                              <td>California</td>
                              <td>1326</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>  
                </div>
                
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="pad38">
                      <h2 class="sheading">My Listings</h2>
                      <div class="plotbx clearfix">
                        <div class="plot_img">
                          <img src="images/list-img1.jpg" alt="">
                        </div>
                        <div class="plot_cnt">
                          <h3>CemLS #30543</h3>
                          <h4>3155 Barberry Ln, Sacramento, CA</h4>
                          <p>Burials, Cremation, Outdoor facilities</p>
                        </div>
                      </div>

                      <div class="plotbx clearfix">
                        <div class="plot_img">
                          <img src="images/list-img1.jpg" alt="">
                        </div>
                        <div class="plot_cnt">
                          <h3>CemLS #30543</h3>
                          <h4>3155 Barberry Ln, Sacramento, CA</h4>
                          <p>Burials, Cremation, Outdoor facilities</p>
                        </div>
                      </div>

                      <div class="plotbx clearfix">
                        <div class="plot_img">
                          <img src="images/list-img1.jpg" alt="">
                        </div>
                        <div class="plot_cnt">
                          <h3>CemLS #30543</h3>
                          <h4>3155 Barberry Ln, Sacramento, CA</h4>
                          <p>Burials, Cremation, Outdoor facilities</p>
                        </div>
                      </div>

                      <div class="plotbx clearfix">
                        <div class="plot_img">
                          <img src="images/list-img1.jpg" alt="">
                        </div>
                        <div class="plot_cnt">
                          <h3>CemLS #30543</h3>
                          <h4>3155 Barberry Ln, Sacramento, CA</h4>
                          <p>Burials, Cremation, Outdoor facilities</p>
                        </div>
                      </div>

                      <div class="plotbx clearfix">
                        <div class="plot_img">
                          <img src="images/list-img1.jpg" alt="">
                        </div>
                        <div class="plot_cnt">
                          <h3>CemLS #30543</h3>
                          <h4>3155 Barberry Ln, Sacramento, CA</h4>
                          <p>Burials, Cremation, Outdoor facilities</p>
                        </div>
                      </div>

                      <button class="btn_small btn_bgreen mt-3">View all listings</button>
                    </div>
                  </div>

                  <div class="col-lg-6 border-left dmbx">
                    <div class="pad38 dmbxinner">
                      <h2 class="sheading">Recent Messages</h2>
                      <table class="table stable mb-0 mt-4">
                          
                          <tbody>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                            <tr>
                              <td>Lorem ipsum dolor sit amet..</td>
                              <td>CemLS #30543</td>
                              <td>12 Jan 2018</td>
                            </tr>
                          </tbody>
                        </table>

                        <button class="btn_small btn_bgreen mt-3">View all Messages</button>
                    </div>
                  </div>
                </div>
            </section>
            
        </section>
      </main>

      <footer class="adm_footer">
        <div class="container-lg">
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="ftabt">
                  <h2 class="ft_head">About CemLS<sup>®</sup></h2>
                  <p class="ftpara"><span>CemLS<sup>®</sup></span> is a cemetery property Listing service, enabling you to showcase all your available property from your administrative location or remotely with a smartphone or tablet.</p>
                </div>
              </div>

              <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <h2 class="ft_head">Quick Navigation</h2>
                      <ul class="ftlinks">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Partner With Us</a></li>
                        <li><a href="#">360 Services</a></li>
                        <li><a href="#">Business Opportunity</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <h2 class="ft_head">For Cemeteries</h2>
                      <ul class="ftlinks">
                        <li><a href="#">List Cemetery</a></li>
                        <li><a href="#">Look Leads</a></li>
                        <li><a href="#">Add Agents</a></li>
                        <li><a href="#">FAQ</a></li>
                      </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <h2 class="ft_head">For Sellers</h2>
                      <ul class="ftlinks">
                        <li><a href="#">List Products</a></li>
                        <li><a href="#">List Services</a></li>
                        <li><a href="#">List Facilities</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Low on Commissions</a></li>
                      </ul>
                    </div>
                </div>
              </div>

              
            </div>

            <div class="ftbbx">
              <div class="row">
                <div class="col-lg-9 col-md-12">
                  <ul class="ft_qlink">
                    <li>© 2018 Cemetery360</li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Helpdesk</a></li>
                  </ul>
                  <ul class="ftinfo">
                    <li><i class="fa fa-phone"></i> <a href="tel:(916) 330-4126">(916) 330-4126</a></li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-12">
                  <ul class="ftsocial">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </footer>
    </main>


    <!-- Modal -->
    <div class="modal fade smodal" id="mbuModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Mobile User Statistics</h2>
          <p class="mb-2">% of mobile users: 54</p>
          <p class="mb-2 cl_grey">Here are the top mobile users percentage</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Device</th>
                <th scope="col">OS</th>
                <th scope="col">% of users</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>iPhone 7</td>
                <td>iOS</td>
                <td>37%</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Samsung S9</td>
                <td>Android</td>
                <td>21%</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Moto G5 Plus</td>
                <td>Android</td>
                <td>16%</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>iPhoneX</td>
                <td>iOS</td>
                <td>12%</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>iPhone 6</td>
                <td>iOS</td>
                <td>7%</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all mobile user statistics</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade smodal" id="smModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Social Media Leads</h2>
          <p class="mb-2">Number of social media leads <small>(Facebook & Twitter)</small>: 28</p>
          <p class="mb-2 cl_grey">Here are the latest social media leads</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Justine Henderson</td>
                <td>justine.henderson@mail.com</td>
                <td>Twitter</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Marcus Cruz</td>
                <td>marcus.cruz@mail.com</td>
                <td>Facebook</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Thalia Cobb</td>
                <td>thalia.cobb@mail.com</td>
                <td>Facebook</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Eddie Randolph</td>
                <td>eddie.randolph@mail.com</td>
                <td>Twitter</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Angela Walker</td>
                <td>angela.walker@mail.com</td>
                <td>Facbook</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all social media leads</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade smodal" id="zcodeModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Top Zip Codes</h2>
          <p class="mb-2">Number of top Zip Codes: 17</p>
          <p class="mb-2 cl_grey">Here are the top 5 Zip Codes</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Zip Code</th>
                <th scope="col">Number of Views</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>94244</td>
                <td>347</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>72217</td>
                <td>302</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>94209</td>
                <td>286</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>80201</td>
                <td>215</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>  24517</td>
                <td>191</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all top zip codes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade smodal" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Top Listings</h2>
          <p class="mb-2">Number of top listings: 39</p>
          <p class="mb-2 cl_grey">Here are the top 5 listings</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Location ID</th>
                <th scope="col">Number of Views</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CemLS #30543</td>
                <td>432</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>CemLS #30543</td>
                <td>398</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>CemLS #30543</td>
                <td>337</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>CemLS #30543</td>
                <td>289</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>CemLS #30543</td>
                <td>263</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all top listings</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade smodal" id="lrecdModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Leads Received</h2>
          <p class="mb-2">Total number of leads: 107</p>
          <p class="mb-2 cl_grey">Here are the latest leads</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Justine Henderson</td>
                <td>justine.henderson@mail.com</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Marcus Cruz</td>
                <td>marcus.cruz@mail.com</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Thalia Cobb</td>
                <td>thalia.cobb@mail.com</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Eddie Randolph</td>
                <td>eddie.randolph@mail.com</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Angela Walker</td>
                <td>angela.walker@mail.com</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all leads</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade smodal" id="ttllistModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="sheading">Total Listings</h2>
          <p class="mb-2">Total number of listings: 74</p>
          <p class="mb-2 cl_grey">Here are the latest listings</p>
          <table class="table stable ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Location ID</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CemLS #30543</td>
                <td>3155 Barberry Ln, Sacramento, CA</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>CemLS #30543</td>
                <td>3155 Barberry Ln, Sacramento, CA</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>CemLS #30543</td>
                <td>3155 Barberry Ln, Sacramento, CA</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>CemLS #30543</td>
                <td>3155 Barberry Ln, Sacramento, CA</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>CemLS #30543</td>
                <td>3155 Barberry Ln, Sacramento, CA</td>
              </tr>
            </tbody>
          </table>
          <div class="text-left">
            <button class="btn_mid btn_green">View all listings</button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      var forEach = function (array, callback, scope) {
        for (var i = 0; i < array.length; i++) {
          callback.call(scope, i, array[i]);
        }
      };
      window.onload = function(){
        var max = -219.99078369140625;
        forEach(document.querySelectorAll('.progress'), function (index, value) {
        percent = value.getAttribute('data-progress');
          value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
          value.querySelector('.value').innerHTML = percent + '%';
        });
      }



    </script>

</body>
</html>