<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')
</div>
<!-- partial:partials/_sidebar.html -->
@include('admin.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <div class="contianer justify-center"  style="padding-top: 50px">
            @if(session()->has('message'))


                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
                </div>

            @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color: black" name="name" placeholder="write the name">
                </div>
                <div style="padding: 15px">
                    <label>Phone Number</label>
                    <input type="number" style="color: black" name="name" placeholder="write the name">

                </div>
                <div style="padding: 15px">
                    <label>Speciality</label>

                        <select name="speciality" style="color: black;width: 200px">
                        <option>--Select--</option>
                        <option value="skin">skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="nose">nose</option>
                        </select>

                </div>
                <div style="padding: 15px">
                    <label>Room Number</label>
                    <input type="text" style="color: black" name="name" placeholder="write the name">
                </div>
                <div style="padding: 15px">
                    <label>Doctor Image</label>
                    <input type="file" name="file" >
                </div>
                <div style="padding: 15px">
                    <input type="submit" value="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
<!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
