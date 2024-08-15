<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard</title>
</head>
<body class="font-roboto">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        
        <!-- Header -->
        @include('components.navbar-dashboard')
        <!-- Sidebar -->
        @include('components.sidebar-dashboard')
    
        <main class="h-auto p-4 pt-20 md:ml-64">
          {{ $slot }}
        </main>
      </div>

      {{-- import datatables --}}
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
      <script>let table = new DataTable('#TableList');</script>
</body>
</html>