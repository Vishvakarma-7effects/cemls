									<div class="modal fade smodal" id="cemeteryListModal" tabindex="-1" role="dialog"  		aria-labelledby="searchModalLabel"
								aria-hidden="true">

								
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<!-- <button type="button" class="close px-2 pt-3" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
									</button> -->
									 <!-- <button data-target="#cemeteryListModal"  data-backdrop="static" data-keyboard="false"> -->

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h2 class="sheading">Total Cemetery {{ count($cemeteryList)}}</h2>
										<table class="table stable ">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">Address</th>
												</tr>
											</thead>
											<tbody>

            @foreach($cemeteryList as $cemeteryListKey=>$cemeteryListVal)
												<tr>
													<th scope="row"> {{$cemeteryListVal->id }}</th>
													<td>{{ $cemeteryListVal->cemetery_name }}</td>
													<td>{{ $cemeteryListVal->created_at }}</td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
										<div class="text-left">
											
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<!-- <a href="{{url('cemeteries')}}"><button class="btn_mid btn_green">View all listings</button></a> -->
										</div>
									</div>
								</div>
									</div>
