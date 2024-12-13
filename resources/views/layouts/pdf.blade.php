<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer List</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
      }

      .header {
         text-align: center;
         padding: 20px;
         border-bottom: 2px solid #ddd;
         margin-bottom: 20px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-bottom: 20px;
      }

      table, th, td {
         border: 1px solid #ddd;
         text-align: center;
      }

      th {
         background-color: #f4f4f4;
         padding: 10px;
      }

      td {
         padding: 10px;
      }

      .footer {
         text-align: center;
         margin-top: 20px;
         font-size: 12px;
      }
   </style>
</head>

<body>
   <div class="header">
      <h1>Customer List</h1>
      <p>Generated on {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
   </div>

   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($customers as $index => $customer)
            <tr>
               <td>{{ $index + 1 }}</td>
               <td>{{ $customer->name }}</td>
               <td>{{ $customer->email }}</td>
               <td>{{ $customer->phone }}</td>
               <td>{{ $customer->address }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>

   <div class="footer">
      <p>InteractionHub &copy; {{ date('Y') }}</p>
   </div>
</body>

</html>
