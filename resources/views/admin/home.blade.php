
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
   @include('admin.css')
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')

    <!-- partial:partials/_sidebar.html -->
    @include('admin.navbar')
        <!-- partial -->


<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</div></body>
</html>
