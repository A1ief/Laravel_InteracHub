<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="{{ asset('assetsAdmin/css/style.css') }}">
   <link href="{{ asset('assetsAdmin/images/ih-logo-design_695270-414-Photoroom.png') }}" rel="icon">
   <title>Admin Dashboard</title>
</head>

<body>
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

   <!-- Main Content -->
   <div class="content">
      <nav>
         <i class='bx bx-menu'></i>
         <form action="#">
            <div class="form-input">
               <input type="search" placeholder="Search...">
               <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
         </form>
         <input type="checkbox" id="theme-toggle" hidden>
         <label for="theme-toggle" class="theme-toggle"></label>
         <a href="#" class="notif">
            <i class='bx bx-bell'></i>
            <span class="count">12</span>
         </a>
         <a href="#" class="profile">
            <img src="images/logo.png">
         </a>
      </nav>

      <main>
         <div class="header">
            <div class="left">
               <h1>Dashboard</h1>
               <ul class="breadcrumb">
                  <li><a href="#">
                        Admin
                     </a></li>
                  /
                  <li><a href="#" class="active">Dashboard</a></li>
               </ul>
            </div>
            <a href="{{ Route('download_pdf') }}" class="report">
               <i class='bx bx-cloud-download'></i>
               <span>Download PDF</span>
            </a>
         </div>

         <ul class="insights">
            <li onclick="openModal('Paid Order', '1,074')">
               <i class='bx bx-calendar-check'></i>
               <span class="info">
                  <h3>1,074</h3>
                  <p>Paid Order</p>
               </span>
            </li>
            <li onclick="openModal('Site Visit', '3,944')">
               <i class='bx bx-show-alt'></i>
               <span class="info">
                  <h3>3,944</h3>
                  <p>Site Visit</p>
               </span>
            </li>
            <li onclick="openModal('Searches', '14,721')">
               <i class='bx bx-line-chart'></i>
               <span class="info">
                  <h3>14,721</h3>
                  <p>Searches</p>
               </span>
            </li>
            <li onclick="openModal('Total Sales', '$6,742')">
               <i class='bx bx-dollar-circle'></i>
               <span class="info">
                  <h3>$6,742</h3>
                  <p>Total Sales</p>
               </span>
            </li>
         </ul>

         <!-- Modal Structure -->
         <div id="myModal" class="modal">
            <div class="modal-content">
               <span class="close">&times;</span>
               <h3 id="modalTitle"></h3>
               <p id="modalValue"></p>
            </div>
         </div>
         <!-- End of Insights -->

         <div class="bottom-data">
            <div class="orders">
               <div class="header">
                  <i class='bx bx-receipt'></i>
                  <h3>Customers</h3>
                  <i class='bx bx-filter'></i>
                  <i class='bx bx-search'></i>
               </div>
               <table style="text-align: center;">
                  <thead>
                     <tr style="justify-content: center;text-align:center;">
                        <th colspan="2" style="text-align: center;padding-left:100px">User</th>
                        <!-- <th>Status</th> -->
                        <th style="text-align: center;">email</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($customers as $customer)
                        <tr>
                           <td style="padding-right: 10px; text-align: center;">
                              <img src="{{ asset('assetsAdmin/images/profile-1.jpg') }}" alt="Profile Image"
                                 style="width: 50px; height: 50px; border-radius: 50%;">
                           </td>
                           <td style="padding-right:18px">{{ $customer->name }}</td>
                           <td>{{ $customer->email }}</td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>

            <!-- Reminders -->
            <div class="reminders">
               <div class="header">
                  <i class='bx bx-note'></i>
                  <h3>Remiders</h3>
                  <i class='bx bx-filter'></i>
                  <i class='bx bx-plus'></i>
               </div>
               <ul class="task-list">
                  <li class="completed">
                     <div class="task-title">
                        <i class='bx bx-check-circle'></i>
                        <p>Start Our Meeting</p>
                     </div>
                     <i class='bx bx-dots-vertical-rounded'></i>
                  </li>
                  <li class="completed">
                     <div class="task-title">
                        <i class='bx bx-check-circle'></i>
                        <p>Analyse Our Site</p>
                     </div>
                     <i class='bx bx-dots-vertical-rounded'></i>
                  </li>
                  <li class="not-completed">
                     <div class="task-title">
                        <i class='bx bx-x-circle'></i>
                        <p>Play Footbal</p>
                     </div>
                     <i class='bx bx-dots-vertical-rounded'></i>
                  </li>
               </ul>
            </div>
            <!-- End of Reminders-->

         </div>

      </main>
   </div>
   <script src="assetsAdmin/js/index.js"></script>
</body>

</html>
