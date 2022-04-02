<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')

<!-- partial:partials/_sidebar.html -->
@include('admin.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding: 100px">
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div style="padding-top: 15px">
                    <label>Doctor Name</label>
                    <input name="name" type="text" value="{{$data->name}}" style="color: black">
                </div>
                <div style="padding-top: 15px">
                    <label>Phone</label>
                    <input name="phone" type="number" value="{{$data->phone}}" style="color: black">
                </div>
                <div style="padding-top: 15px">
                    <label>Speciality</label>
                    <input name="speciality" type="text" value="{{$data->speciality}}" style="color: black">
                </div>
                <div style="padding-top: 15px">
                    <label>Room</label>
                    <input name="room" type="text" value="{{$data->room}}" style="color: black">
                </div>
                <div style="padding-top: 15px">
                    <label>Old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>
                <div style="padding: 15px">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding: 15px">
                    <input type="submit" class="btn btn-primary">

                </div>
            </form>

        </div>
    </div>

<!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</div></body>
</html>
