<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
        <form action="{{url('sendemail',$data->id)}}" method="POST" >
            @csrf
            <div style="padding: 15px">
                <label>Greeting</label>
                <input type="text" style="color: black" name="greeting" required="">
            </div>
            <div style="padding: 15px">
                <label>Body</label>
                <input type="text" style="color: black" name="body"  required="">

            </div>

            <div style="padding: 15px">
                <label>Action Text</label>
                <input type="text" style="color: black" name="actiontext" required="">
            </div>


            <div style="padding: 15px">
                <label>Action Url</label>
                <input type="text" style="color: black" name="actionurl" required="">
            </div>


            <div style="padding: 15px">
                <label>End Part</label>
                <input type="text" style="color: black" name="endpart" required="">
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
