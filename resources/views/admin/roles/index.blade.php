@extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roles</li>
            </ol>
        </nav>
 

        <div class="row">
        <div class="col-md-5 col-6">
            <h1 class="mheading">Roles</h1>
        </div>
        <div class="col-md-7 col-6 text-right"> <a href="{{route('roles.create')}}"><button class="btn_mid btn_green">Add Role</button></a>
        </div>
    </div>

      
 
         @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

 
        <div id="userTabContent" class="tab-content">
            <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade show active" id="cemetery" role="tabpanel" aria-labelledby="cemetery-tab">
                        <div class="table-responsive mb-5 bxshadow">
                            <table class="table  main_table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <!-- <th>Guard Name</th> -->

                                        <th  style=""width="40">Action</th>
                                    </tr>
                                </thead>
                                <tbody >

                                    @foreach($roles as $roleKey=>$roleVal)
                                        <tr class="">
                                            <td style="padding-left: 10%;">{{ $roleVal->name}}</td>
                                            <td style="">
                                                <a  href="{{route('roles.edit', $roleVal->id)}}" class="btn btn-outline-dark role-edit">Edit</a>
                                            </td>
                                            <td>
                                            <form action="{{ route('roles.destroy', $roleVal->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-outline-dark role-edit" onclick="return myFunction();">Delete</button>
                                            </form>
                                                <!-- <a  href="" class="btn btn-outline-dark role-edit">Delete</a> -->
                                            </td>
                                        </tr>

                                    @endforeach

                                    <!-- <tr>
                                        <td>Role2</td>
                                        <td>
                                            <a type="button" class="btn btn-outline-dark role-edit">Edit</a>
                                        </td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
            </div>

            <div class="tab-pane fade pb-4" id="switchtwo" role="tabpanel" aria-labelledby="switchtwo-tab">
                <div class="mframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>


    </section>
@endsection
<script>
	function myFunction()
	{
		if(!confirm("Are you sure to delete this?"))
		event.preventDefault();
	}
</script>