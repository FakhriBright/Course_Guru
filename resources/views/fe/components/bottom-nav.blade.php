@php $route = Route::currentRouteName(); @endphp

<div class="fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around p-3 text-sm">

<a href="{{ route('home') }}" class="{{ $route=='home'?'text-blue-600 font-semibold':'' }}">Home</a>

<a href="{{ route('modul.index') }}" class="{{ $route=='modul.index'?'text-blue-600 font-semibold':'' }}">My Course</a>

<a href="{{ route('setting') }}" class="{{ $route=='setting'?'text-blue-600 font-semibold':'' }}">Setting</a>

</div>
