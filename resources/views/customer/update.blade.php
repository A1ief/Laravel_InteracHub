<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assetsAdmin/css/pages.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/css/style.css') }}">
    <link href="../../images/ih-logo-design_695270-414-Photoroom.png" rel="icon">
</head>

<body>
    <div class="sidebar">
        <a href="#" class="logo">
            <img src="{{ asset('assetsAdmin/images/ih-logo-design_695270-414-Photoroom.png') }}" alt="InteractionHub"
                width="30px" style="margin-right: 5px;margin-left: 24px;">
            <div class="logo-name"><span>Interac</span>Hub</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="{{ url('/') }}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            {{-- <li><a href="{{ url('pages/user.php') }}"><i class='bx bx-group'></i>Users</a></li> --}}
            <li><a href="{{ route('customers.index') }}"><i class='bx bxs-user-detail'></i>Customer</a></li>
            {{-- <li><a href="{{ url('pages/agent/agent.php') }}"><i class='bx bx-analyse'></i>Agent</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li> --}}
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../logout.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
        </nav>

        <main>
            <div class="container">
                <h1>Add New Customer</h1>
                <form action="{{ route('customers.update', $customer->id) }}" method="POST" id="formUpdate" class="form">
                    @method('PUT')
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ $customer->name }}" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ $customer->email }}" required>

                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" id="phone" placeholder="Enter your phone number" value="{{ $customer->phone }}" required>

                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" placeholder="Enter your address" value="{{ $customer->address }}" required>

                    <button type="submit" id="submitButton">Submit</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('formUpdate');
            document.getElementById('submitButton').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent form from submitting immediately
                Swal.fire({
                    title: 'Create Data',
                    text: "Are you sure you want to submit this data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, submit it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form if confirmed
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assetsAdmin/js/index.js"></script>
</body>

</html>
