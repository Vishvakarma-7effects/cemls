 <!-- Modal -->
      <div class="modal fade smodal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      
            <div id="searchcarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="protab">
                    <div class="protabinner active"><span class="protabcircle"></span></div>
                    <div class="protabinner"><span class="protabcircle"></span></div>
                    <div class="protabinner"><span class="protabcircle"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <h2 class="pt-2">I am looking for..</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                      <div class="cirserv active">
                        <div class="cirserv_img">
                          <span><img src="{{ asset('newPublic/images/popupicon1.png') }}" /></span>
                        </div>
                        <h3>Cemeteries</h3>
                      </div>
                    </div>
      
                    <div class="col-lg-3 col-md-3 col-6">
                      <div class="cirserv">
                        <div class="cirserv_img">
                          <span><img src="{{ asset('newPublic/images/popupicon2.png') }}" /></span>
                        </div>
                        <h3>Facilities</h3>
                      </div>
                    </div>
      
                    <div class="col-lg-3 col-md-3 col-6">
                      <div class="cirserv">
                        <div class="cirserv_img">
                          <span><img src="{{ asset('newPublic/images/popupicon3.png') }}" /></span>
                        </div>
                        <h3>Products</h3>
                      </div>
                    </div>
      
                    <div class="col-lg-3 col-md-3 col-6">
                      <div class="cirserv">
                        <div class="cirserv_img">
                          <span><img src="{{ asset('newPublic/images/popupicon4.png') }}" /></span>
                        </div>
                        <h3>Services</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="protab">
                    <div class="protabinner filled"><span class="protabcircle"></span></div>
                    <div class="protabinner active"><span class="protabcircle"></span></div>
                    <div class="protabinner"><span class="protabcircle"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <h2 class="pt-2">What type of property do you prefer?..</h2>
                      <ul class="typeul">
                        <li>
                          <div class="myradio d-inline-block">
                            <input type="radio" id="rdbx1" name="prefer" checked>
                            <label for="rdbx1">Burial</label>
                          </div>
                        </li>
                        <li>
                          <div class="myradio d-inline-block">
                            <input type="radio" id="rdbx2" name="prefer">
                            <label for="rdbx2">Cremation</label>
                          </div>
                        </li>
                      </ul>
      
                      <div class="pnbx">
                        <a href="#" class="linktxt">Skip this step <i class="fa fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="protab">
                    <div class="protabinner filled"><span class="protabcircle"></span></div>
                    <div class="protabinner filled"><span class="protabcircle"></span></div>
                    <div class="protabinner active"><span class="protabcircle"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <h2 class="pt-2">Select the price Range</h2>
                      <h3 class="srprice">Price</h3>
                      <div slider id="slider-distance">
                        <div>
                          <div inverse-left style="width:70%;"></div>
                          <div inverse-right style="width:70%;"></div>
                          <div range style="left:0%;right:70%;"></div>
                          <span thumb style="left:0%;"></span>
                          <span thumb style="left:30%;"></span>
                          <div sign style="left:0%;">
                            <span id="value">0</span>
                          </div>
                          <div sign style="left:30%;">
                            <span id="value">30</span>
                          </div>
                          <div class="dprice clearfix">
                            <span class="dplft">0</span>
                            <span class="dprht">100</span>
                          </div>
                        </div>
                        <input type="range" tabindex="0" value="0" max="100" min="0" step="1" oninput="
                            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                            var children = this.parentNode.childNodes[1].childNodes;
                            children[1].style.width=value+'%';
                            children[5].style.left=value+'%';
                            children[7].style.left=value+'%';children[11].style.left=value+'%';
                            children[11].childNodes[1].innerHTML=this.value;" />
      
                        <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                            var children = this.parentNode.childNodes[1].childNodes;
                            children[3].style.width=(100-value)+'%';
                            children[5].style.right=(100-value)+'%';
                            children[9].style.left=value+'%';children[13].style.left=value+'%';
                            children[13].childNodes[1].innerHTML=this.value;" />
                      </div>
      
                      <div class="pnbx">
                        <a href="#" class="linktxt">Skip this step <i class="fa fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
              <a class="carousel-control-prev disabled" href="#searchcarousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
              </a>
              <a class="carousel-control-next" href="#searchcarousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>|