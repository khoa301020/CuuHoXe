@extends('layout_user')
@section('content')
<div class="xMDeox">
    profile
</div>
<script>
    window.onload = function()
    {
        var profile = document.getElementById("profile");
        var request = document.getElementById("request");
        var password = document.getElementById("password");
        profile.style.color = "#19448e";
        request.style.color = "black";
        password.style.color = "black";
    };
</script>
@endsection