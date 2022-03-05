<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;



function getcemeteryname($cemeteryid) {
           $cemeteryname=DB::table('cemetery')->where('ID', $cemeteryid)->get();
     

    return $cemeteryname;
}
function getplotlocationtitle($plotid) {
           $locationtitlename=DB::table('cemetery')->where('ID', $plotid)->get();
     

    return $locationtitlename;
}
function getplotgallery($plotid) {
           $plotgallery=DB::table('plotgallery')->where('plot_id', $plotid)->get();
     

    return $plotgallery;
}
function getuserrolename($roleid) {
           $rolename=DB::table('roles')->where('id', $roleid)->get();
     

    return $rolename;
}

function getcemeterygallery($cemeteryid) {
           $cemeterygallery=DB::table('cemeterygallery')->where('cemetery_id', $cemeteryid)->get();
     

    return $cemeterygallery;
}
function getPermission($roleid) {
    $permissions=DB::table('permissions')
    ->join('role_has_permissions','permissions.id','=','role_has_permissions.permission_id')
    ->where('role_has_permissions.role_id', $roleid)->pluck('name','id');
    return $permissions;
}

function getcemeteryimage($cemeteryid) {
    $cemeterygallery=DB::table('cemeterygallery')->where('cemetery_id', $cemeteryid)->inRandomOrder()
    ->limit(20) ->get();
    return $cemeterygallery;

}