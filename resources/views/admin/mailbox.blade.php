@extends('layouts.admin')

@section('content')



<section class="panelrht">
            <nav aria-label="breadcrumb" class="mt-3 mt-lg-0">
              <ol class="breadcrumb d-none d-lg-block">
                <li class="breadcrumb-item active" aria-current="page">&nbsp;</li>
              </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 col-12"><h1 class="mheading">Mailbox</h1></div>
            </div>

            <div class="mb-5 bxshadow">
              <table class="table thtable main_table mb-0">
                <tbody>
                  <tr>
                    <td width="40" class="text-center">
                      <div class="mycheck d-inline-block">
                          <input type="checkbox" id="chkbx2" name="chkbx2">
                          <label for="chkbx2">&nbsp;</label>
                      </div>
                    </td>
                    <td width="30">All </td>
                    <td width="125">
                      <select class="form-control">
                        <option>Select</option>
                      </select>
                    </td>
                    <td class="text-right navbtns">
                      <span>1-50</span> of <span>234</span> 
                      <a href="#" class="nlft_btn"><i class="fa fa-chevron-left"></i></a> 
                      <a href="#" class="nrht_btn"><i class="fa fa-chevron-right"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="table-responsive">
                <table class="table main_table mb-0">
                      <tbody>
                        <tr class="curpointer" data-toggle="collapse" href="#tablecnt" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                          <td width="40" class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx11" name="chkbx11">
                                <label for="chkbx11">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td ><small>12 Jan 2018</small></td>
                        </tr>
                        <tr class="collapse multi-collapse" id="tablecnt">
                          <td></td>
                          <td colspan="4">
                            <div class="row">
                                <div class="col-lg-5">
                                  <p class="clearfix"><b>Name:</b> <span>John Doe</span></p>
                                  <p class="clearfix"><b>Email:</b> <span>john.doe@rozetcemetery.com</span></p>
                                  <p class="clearfix"><b>Phone:</b> <span>(916) 330-4126</span></p>
                                </div>

                                <div class="col-lg-6">
                                  <p class="clearfix"><b>Message:</b> <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="text-right actionbtn pt-2">
                              <a href="#"><i class="fa fa-share-from-square" aria-hidden="true"></i></a> 
                              <a href="#"><i class="fa fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx12" name="chkbx12">
                                <label for="chkbx12">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx13" name="chkbx13">
                                <label for="chkbx13">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx14" name="chkbx14">
                                <label for="chkbx14">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx15" name="chkbx15">
                                <label for="chkbx15">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx16" name="chkbx16">
                                <label for="chkbx16">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx17" name="chkbx17">
                                <label for="chkbx17">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx18" name="chkbx18">
                                <label for="chkbx18">&nbsp;</label>
                            </div>
                          </td>
                          <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem..</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td><small>12 Jan 2018</small></td>
                        </tr>
                      </tbody>
                </table>
              </div>
            </div>
            
        </section>

@endsection