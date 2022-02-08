@extends('layouts.admin')

@section('content')

<style>
  td .message_box {
 white-space: nowrap; 
  overflow: hidden;
  text-overflow: ellipsis;
}
  </style>

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
                <!-- <tbody>
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
              </table> -->

              <div class="table-responsive">
                <table class="table main_table mb-0">
                      <tbody>
                       @foreach($mails as $mailKey=>$mailVal)
                       {{-- {{ dd($mailVal->creator->name)}} --}}
                        <tr class="curpointer" data-toggle="collapse" href="#tablecnt_{{$mailKey}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                          <td width="40" class="text-center">
                            <div class="mycheck d-inline-block">
                                <input type="checkbox" id="chkbx11" name="chkbx11">
                                <label for="chkbx11">&nbsp;</label>
                            </div>
                          </td>
                          <td class="message_box"><b>{{ $mailVal->message}}</b></td>
                          <td>Rozet Cemetery</td>
                          <td>CemLS #30543</td>
                          <td ><small>{{ $mailVal->created_at }}</small></td>
                        </tr>

                        <tr class="collapse multi-collapse" id="tablecnt_{{$mailKey}}">
                          <td></td>
                          <td colspan="4">
                            <div class="row">
                                <div class="col-lg-5">
                                  <p class="clearfix"><b>Name:</b> <span>{{ $mailVal->creator->name??'-' }}</span></p>
                                  <p class="clearfix"><b>Email:</b> <span>{{ $mailVal->creator->email??'-' }}</span></p>
                                  <p class="clearfix"><b>Phone:</b> <span>{{ $mailVal->creator->phone ??'-' }}</span></p>
                                </div>

                                <div class="col-lg-6">
                                  <p class="clearfix"><b>Message:</b> <span>{{ $mailVal->message}}</span></p>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="text-right actionbtn pt-2">
                              <a href="#"><i class="fa fa-share-from-square" aria-hidden="true"></i></a> 
                              <a href="#"><i class="fa fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                          </td>
                        </tr>
                        @endforeach


                       
                      </tbody>
                </table>
              </div>


                  <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link pn_arrow" href="#" aria-label="Previous">
                                    <i class="fa fa-caret-left"></i>
                                </a>
                            </li>
                            <li class="page-item "><a class="page-link " href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">12</a></li>
                            <li class="page-item">
                                <a class="page-link pn_arrow" href="#" aria-label="Next">
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>


              
                
            </div>
            
</section>


@endsection