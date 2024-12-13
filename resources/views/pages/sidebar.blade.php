@extends('layouts.dashboard')
@section('nav')
<div class="sidebar">
    <a href="#" class="logo">
       <img src="{{ asset('assetsAdmin/images/ih-logo-design_695270-414-Photoroom.png') }}" alt="InteractionHub"
          width="30px" style="margin-right: 5px;margin-left: 24px;">
       <div class="logo-name"><span>Interac</span>Hub</div>
    </a>
    <ul class="side-menu">
       <li class="active"><a href="{{ route('dashboard') }}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
       {{-- <li><a href="{{ url('pages/user.php') }}"><i class='bx bx-group'></i>Users</a></li> --}}
       <li><a href="{{ route('customers.index') }}"><i class='bx bxs-user-detail'></i>Customer</a></li>
       {{-- <li><a href="{{ url('pages/agent/agent.php') }}"><i class='bx bx-analyse'></i>Agent</a></li>
       <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
       <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li> --}}
    </ul>
    <ul class="side-menu">
       <li>
          <a href="" class="logout">
             <i class='bx bx-log-out-circle'></i>
             Logout
          </a>
       </li>
    </ul>
 </div>
@endsection