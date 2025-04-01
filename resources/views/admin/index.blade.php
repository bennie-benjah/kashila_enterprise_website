<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashila Enterprise - Admin Dashboard</title>
    <link rel="shortcut icon" href="./image/logo7.jpg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @include('admin.css')


</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Main Content -->
        @include('admin.content')
    </div>

    <!-- Category and Product Modals -->
    @include('admin.body')

    <!--Scripts-->
    @include('admin.scripts')
</body>

</html>
