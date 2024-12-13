<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer Management</title>
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('assetsAdmin/css/pages.css') }}">
   <link rel="stylesheet" href="{{ asset('assetsAdmin/css/style.css') }}">
   <link rel="icon" href="{{ asset('assetsAdmin/images/ih-logo-design_695270-414-Photoroom.png') }}">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
   <!-- Sidebar -->
   <div class="sidebar">
      <a href="#" class="logo">
         <img src="{{ asset('assetsAdmin/images/ih-logo-design_695270-414-Photoroom.png') }}" alt="InteractionHub"
            width="30px" style="margin-right: 5px; margin-left: 24px;">
         <div class="logo-name"><span>Interac</span>Hub</div>
      </a>
      <ul class="side-menu">
         <li><a href="{{ route('dashboard') }}"><i class="bx bxs-dashboard"></i>Dashboard</a></li>
         {{-- <li><a href="{{ route('users.index') }}"><i class="bx bx-group"></i>Users</a></li> --}}
         <li class="active"><a href="{{ route('customers.index') }}"><i class="bx bxs-user-detail"></i>Customers</a>
         </li>
         {{-- <li><a href="{{ route('agents.index') }}"><i class="bx bx-analyse"></i>Agents</a></li>
         <li><a href="#"><i class="bx bx-message-square-dots"></i>Tickets</a></li>
         <li><a href="#"><i class="bx bx-cog"></i>Settings</a></li> --}}
      </ul>
      <ul class="side-menu">
         <li>
            <a href="" class="logout">
               <i class="bx bx-log-out-circle"></i>Logout
            </a>
         </li>
      </ul>
   </div>

   <!-- Content -->
   <div class="content">
      <nav>
         <i class="bx bx-menu"></i>
         <form action="#" method="GET">
            <div class="form-input">
               <input type="search" placeholder="Search..." name="search">
               <button class="search-btn" type="submit"><i class="bx bx-search"></i></button>
            </div>
         </form>
         <a href="#" class="notif">
            <i class="bx bx-bell"></i>
            <span class="count">12</span>
         </a>
         <a href="#" class="profile">
            <img src="{{ asset('assetsAdmin/images/logo.png') }}" alt="Profile">
         </a>
      </nav>

      <main>
         <div class="header">
            <div class="left">
               <h1>Customer Management</h1>
               <ul class="breadcrumb">
                  <li><a href="#">Admin</a></li>/
                  <li><a href="#" class="active">Customers</a></li>
               </ul>
            </div>
            <a href="{{ route('customers.create') }}" class="report">
               <i class="bx bx-plus"></i>
               <span>Add New Customer</span>
            </a>
         </div>

         <!-- Customer Table -->
         <table>
            <thead>
               <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               @if ($customers->isEmpty())
                  <tr>
                     <td colspan="6" style="text-align: center;"><h4>Data is missing</h4></td>
                  </tr>
               @else
                  @foreach ($customers as $customer)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->address }}</td>
                        <td class="action-buttons">
                           <button type="button" class="btn-edit">
                              <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                           </button>
                           <button type="button" class="btn-delete"
                              onclick="confirmDelete({{ $customer->id }})">Delete</button>
                           <form id="delete-form-{{ $customer->id }}"
                              action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                              style="display: none;">
                              @csrf
                              @method('DELETE')
                           </form>
                        </td>
                     </tr>
                  @endforeach
                  @endif
            </tbody>
         </table>
      </main>
   </div>

   <script>
      function confirmDelete(customerId) {
         Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
            if (result.isConfirmed) {
               document.getElementById('delete-form-' + customerId).submit();
            }
         });
      }
   </script>
</body>

</html>
