@extends('layouts.admin')

@section('content')



<section class="panelrht">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Role</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </nav>
  <h1 class="mheading">Communication</h1>
  <section class="bxshadow">
<table class="table mb-0  table-hover plot_table">
  <tr class="border-bottom">
    <td style="padding: 15px;" class="col-form-label">
      <input class="" type="checkbox" value="" id="">
    </td>
    <td class="" style="padding: 15px; color: #6A7175;">
      <b>All</b>
      <select class="form-control" style="width: auto;">
        <option>one</option>
        <option>two</option>
        <option>three</option>
      
      </select>
    </td>
    <td style="padding: 15px; color: #6A7175;">
     
    </td>
    <td style="padding: 15px; color: #6A7175;">
    </td>
    <td style="padding: 15px; color: #6A7175;">
      25 Jan 2022
    </td>
  </tr>
  @for($i=0; $i<=4;$i++)
  <tr  class="border-bottom" data-toggle="collapse" data-target="#collapseme_{{$i}}">
    <td style="padding: 15px;" class="col-form-label">
     <input class="" type="checkbox" value="" id="">
    </td>
    <td class=""style="padding: 15px; color: #6A7175;">
      <b>dfghjklpfhgsjgdjagfotrwueyjrgffvdjfdhgfjk</b>
    </td>
    <td style="padding: 15px; color: #6A7175;">
      Rozet Cemetry
    </td>
    <td style="padding: 15px; color: #6A7175;">
      CemLS#30543
    </td>
    <td style="padding: 15px; color: #6A7175;">
      25 Jan 2022
    </td>
  </tr>
  <tr id="collapseme_{{$i}}" class="collapse out">
    <td style="padding: 15px;" colspan="5">
      <div>Should be collapsed</div>
    </td>
  </tr>
  @endfor
  {{-- @for($i=0; $i<=4;$i++) --}}
  {{-- <tr>
    <td data-toggle="collapse" data-target="collapseme">
        <input class="form-check-input" type="checkbox"  value="" id="" >  
    </td>
    <td>
       dfghjklpfhgsjgdjagfotrwueyjrgffvdjfdhgfjk
    </td>
    <td>
      Rozet Cemetry
    </td>
    <td>
      CemLS#30543
    </td>
    <td>
      25 Jan 2022
    </td>
  </tr>
  <tr id="collapseme}" class="collapse out">
    <td>
      <div>Should be collapsed</div>
    </td> --}}
  {{-- </tr> --}}
  {{-- @endfor --}}
</table>
</section>

@endsection