@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Checkout</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Checkout</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            <main class="col-lg-7 order-1 order-lg-0 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-header">
                        <h6 class="b mb-0">Billing information</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_firstname" class="required">First name</label>
                                <input type="text" id="checkout_firstname" name="checkout[firstname]" required="required" class="form-control" />

                            </div>
                            <div class="col form-group">
                                <label for="checkout_lastname" class="required">Last name</label>
                                <input type="text" id="checkout_lastname" name="checkout[lastname]" required="required" class="form-control" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_company">Company (Optional)</label>
                                <input type="text" id="checkout_company" name="checkout[email]" class="form-control" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label class="required" for="checkout_country">Country / Region</label>
                                <select id="checkout_country" name="checkout[country]" required="required" class="select2 form-control"><option value="" selected="selected">Select an option</option><option value="91">Ethiopia</option><option value="244">Azerbaijan</option><option value="233">Armenia</option><option value="241">Aruba</option><option value="239">Australia</option><option value="228">Afghanistan</option><option value="234">Albania</option><option value="195">Germany</option><option value="227">Antigua and Barbuda</option><option value="226">Andorra</option><option value="246">Indonesia</option><option value="235">Angola</option><option value="229">Anguilla</option><option value="199">Uruguay</option><option value="103">Uzbekistan</option><option value="119">Uganda</option><option value="247">Ukraine</option><option value="245">Ireland</option><option value="231">Iceland</option><option value="96">Eritrea</option><option value="95">Spain</option><option value="124">British Indian Ocean Territory</option><option value="232">Iran</option><option value="88">Italy</option><option value="84">Estonia</option><option value="67">Palestinian Territory</option><option value="238">Argentina</option><option value="58">Jordan</option><option value="53">Greenland</option><option value="87">Ecuador</option><option value="225">United Arab Emirates</option><option value="22">Bahamas</option><option value="12">Bahrain</option><option value="21">Brazil</option><option value="69">Portugal</option><option value="5">Bosnia and Herzegovina</option><option value="97">Montenegro</option><option value="197">Algeria</option><option value="193">Denmark</option><option value="162">Cape Verde</option><option value="50">El Salvador</option><option value="181">Senegal</option><option value="188">Sweden</option><option value="83">Western Sahara</option><option value="92">Somalia</option><option value="149">China</option><option value="72">Iraq</option><option value="49">Gabon</option><option value="223">Vatican</option><option value="78">Philippines</option><option value="236">Antarctica</option><option value="100">Saint Martin</option><option value="203">Saint Lucia</option><option value="150">Cameroon</option><option value="180">Kuwait</option><option value="61">Hungary</option><option value="101">Morocco</option><option value="122">Mexico</option><option value="94">Saudi Arabia</option><option value="48">United Kingdom</option><option value="218">French Southern Territories</option><option value="133">Norway</option><option value="240">Austria</option><option value="137">Niger</option><option value="242">India</option><option value="198">United States</option><option value="42">Japan</option><option value="196">Yemen</option><option value="39">Greece</option><option value="75">Papua New Guinea</option><option value="71">Paraguay</option><option value="77">Pakistan</option><option value="68">Palau</option><option value="6">Barbados</option><option value="9">Bermuda</option><option value="10">Brunei</option><option value="2">Belgium</option><option value="4">Bulgaria</option><option value="25">Belize</option><option value="1">Bangladesh</option><option value="73">Panama</option><option value="14">Benin</option><option value="15">Bhutan</option><option value="18">Botswana</option><option value="66">Puerto Rico</option><option value="3">Burkina Faso</option><option value="13">Burundi</option><option value="80">Poland</option><option value="11">Bolivia</option><option value="74">French Polynesia</option><option value="79">Pitcairn</option><option value="76">Peru</option><option value="217">Thailand</option><option value="206">Taiwan</option><option value="31">Turkmenistan</option><option value="208">Turkey</option><option value="207">Trinidad and Tobago</option><option value="220">Chad</option><option value="151">Chile</option><option value="120">Tanzania</option><option value="219">Togo</option><option value="205">Tuvalu</option><option value="34">Tokelau</option><option value="57">Tunisia</option><option value="212">Tonga</option><option value="29">East Timor</option><option value="16">Jamaica</option><option value="54">Gibraltar</option><option value="243">Aland Islands</option><option value="174">Comoros</option><option value="113">Maldives</option><option value="201">United States Minor Outlying Islands</option><option value="221">Turks and Caicos Islands</option><option value="90">Solomon Islands</option><option value="130">Faroe Islands</option><option value="128">Falkland Islands</option><option value="230">U.S. Virgin Islands</option><option value="194">British Virgin Islands</option><option value="186">Cayman Islands</option><option value="144">Cook Islands</option><option value="152">Cocos Islands</option><option value="108">Marshall Islands</option><option value="115">Northern Mariana Islands</option><option value="118">Isle of Man</option><option value="159">Christmas Island</option><option value="17">Bouvet Island</option><option value="138">Norfolk Island</option><option value="155">Central African Republic</option><option value="157">Czech Republic</option><option value="190">Dominican Republic</option><option value="154">Republic of the Congo</option><option value="156">Democratic Republic of the Congo</option><option value="86">South Africa</option><option value="169">South Sudan</option><option value="41">Guadeloupe</option><option value="46">Georgia</option><option value="38">South Georgia and the South Sandwich Islands</option><option value="192">Djibouti</option><option value="23">Jersey</option><option value="248">Qatar</option><option value="191">Dominica</option><option value="27">Rwanda</option><option value="26">Russia</option><option value="24">Belarus</option><option value="33">Romania</option><option value="30">Reunion</option><option value="82">Zambia</option><option value="93">Zimbabwe</option><option value="146">Ivory Coast</option><option value="19">Samoa</option><option value="237">American Samoa</option><option value="182">San Marino</option><option value="8">Saint Barthelemy</option><option value="81">Saint Pierre and Miquelon</option><option value="224">Saint Vincent and the Grenadines</option><option value="173">Saint Kitts and Nevis</option><option value="125">Saint Helena</option><option value="175">Sao Tome and Principe</option><option value="70">Svalbard and Jan Mayen</option><option value="56">Oman</option><option value="176">Slovakia</option><option value="178">Slovenia</option><option value="187">Singapore</option><option value="164">Swaziland</option><option value="189">Sudan</option><option value="165">Syria</option><option value="170">Suriname</option><option value="147">Switzerland</option><option value="183">Sierra Leone</option><option value="209">Sri Lanka</option><option value="184">Seychelles</option><option value="166">Sint Maarten</option><option value="28">Serbia</option><option value="32">Tajikistan</option><option value="52">Gambia</option><option value="55">Ghana</option><option value="47">Grenada</option><option value="37">Guatemala</option><option value="36">Guam</option><option value="43">Guyana</option><option value="45">French Guiana</option><option value="44">Guernsey</option><option value="51">Guinea</option><option value="40">Equatorial Guinea</option><option value="35">Guinea-Bissau</option><option value="135">Vanuatu</option><option value="123">France</option><option value="65">Venezuela</option><option value="126">Finland</option><option value="89">Vietnam</option><option value="127">Fiji</option><option value="158">Cyprus</option><option value="167">Kyrgyzstan</option><option value="64">Heard Island and McDonald Islands</option><option value="185">Kazakhstan</option><option value="136">New Caledonia</option><option value="59">Croatia</option><option value="172">Cambodia</option><option value="153">Canada</option><option value="163">Cuba</option><option value="161">Curacao</option><option value="177">South Korea</option><option value="179">North Korea</option><option value="160">Costa Rica</option><option value="145">Kosovo</option><option value="148">Colombia</option><option value="171">Kiribati</option><option value="168">Kenya</option><option value="211">Latvia</option><option value="204">Laos</option><option value="202">Lebanon</option><option value="214">Luxembourg</option><option value="222">Libya</option><option value="215">Liberia</option><option value="213">Lithuania</option><option value="210">Liechtenstein</option><option value="216">Lesotho</option><option value="114">Martinique</option><option value="106">Macao</option><option value="112">Malawi</option><option value="111">Malta</option><option value="105">Mali</option><option value="121">Malaysia</option><option value="200">Mayotte</option><option value="99">Madagascar</option><option value="85">Egypt</option><option value="109">Macedonia</option><option value="107">Mongolia</option><option value="117">Mauritania</option><option value="110">Mauritius</option><option value="249">Mozambique</option><option value="98">Moldova</option><option value="102">Monaco</option><option value="116">Montserrat</option><option value="104">Myanmar</option><option value="129">Micronesia</option><option value="134">Namibia</option><option value="142">Nauru</option><option value="141">Nepal</option><option value="139">Nigeria</option><option value="131">Nicaragua</option><option value="140">New Zealand</option><option value="143">Niue</option><option value="60">Haiti</option><option value="63">Honduras</option><option value="132">Netherlands</option><option value="62">Hong Kong</option><option value="7">Wallis and Futuna</option><option value="20">Bonaire, Saint Eustatius and Saba</option></select>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_company" class="required">Street Address</label>
                                <input type="text" id="checkout_company" name="checkout[email]" class="form-control" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_city" class="required">City</label>
                                <input type="text" id="checkout_city" name="checkout[city]" required="required" class="form-control" />

                            </div>
                            <div class="col form-group">
                                <label for="checkout_postalcode" class="required">Zip</label>
                                <input type="text" id="checkout_postalcode" name="checkout[postalcode]" required="required" class="form-control" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_firstname" class="required">Email</label>
                                <input type="email" id="checkout_firstname" name="checkout[firstname]" required="required" class="form-control" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_lastname" class="required">Phone</label>
                                <input type="number" id="checkout_lastname" name="checkout[lastname]" required="required" class="form-control" />
                            </div>
                        </div>
                        <h3>Additional Information</h3>
                        <hr>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="checkout_lastname" class="required">Order Notes</label>
                                <textarea id="checkout_lastname" name="checkout[lastname]" required="required" class="form-control" rows="6" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <aside class="col-lg-5 pt-3 pt-lg-0 order-0 order-lg-1">
                <div class="card">
                    <div class="card-header">
                        <h6 class="b mb-0">Order summary</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                    <tr>
                                        <th style="width:55%;" scope="col">Event / Ticket</th>
                                        <th style="width:15%;" scope="col" width="100">Price</th>
                                        <th style="width:15%;" scope="col" width="100">Quantity</th>
                                        <th style="width:15%;" scope="col" class="text-right" width="100">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="55%">
                                            <figure class="media h-100">
                                                <figcaption class="media-body my-auto ">
                                                    <a href="/en/event/camping-trip">
                                                        <h6 class="title mb-2">Manali Video Trip</h6>
                                                    </a>
                                                    <dl class="dlist-inline small">
                                                        <dt></dt>
                                                        <dd class="mr-0">Trip Ticket <i class="fas fa-info-circle text-primary ml-2" data-toggle="tooltip" title="Bring your voucher with you"></i></dd>
                                                    </dl>
                                                    <dl class="dlist-inline small">
                                                        <dt>When</dt>
                                                        <dd>Wed 29 Sep 2021, 1:00 PM EDT</dd>
                                                    </dl>
                                                    <dl class="dlist-inline small">
                                                        <dt>Where</dt>
                                                        <dd>
                                                            ATLANTIQUE PARC: ATLANTIQUE PARC17570 Les Mathes, Charente-Maritime, France
                                                        </dd>
                                                    </dl>
                                                    <dl class="dlist-inline small">
                                                        <dt>Organizer</dt>
                                                        <dd><a href="/en/organizer/best-caming-trips" taget="_blank">Best Caming Trips</a></dd>
                                                    </dl>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td width="15%">
                                            <div class="price-wrap">
                                                <span class="price-new">$110</span>
                                            </div>
                                        </td>
                                        <td width="15%">
                                            1
                                        </td>
                                        <td width="15%" class="text-right">
                                            <div class="price-wrap">
                                                <var class="price">$110</var>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sub Total</th>
                                        <td></td>
                                        <td></td>
                                        <th>$110</th>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td></td>
                                        <td></td>
                                        <th>$110</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button id="checkout_submit" type="submit" class="btn btn-primary btn-block mt-4"><i class="fas fa-money-check"></i> Place Order</button>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
