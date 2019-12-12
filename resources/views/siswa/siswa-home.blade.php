{{Auth::user()->name}} <br>
{{Auth::user()->username}}
<br>
<form action="{{route('siswa.logout')}}" method="post">@csrf <input type="submit" value="Logout"></form>