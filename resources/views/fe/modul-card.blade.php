<div class="bg-white border rounded-lg p-4 mb-3 flex justify-between">

<div>
<h3 class="font-semibold">{{ $modul->title }}</h3>
<p class="text-sm text-gray-500">{{ $modul->description }}</p>

<a href="{{ route('course.index') }}"
class="text-blue-500 text-sm">Masuk</a>
</div>

@if($modul->icon)
<img src="{{ $modul->icon }}" class="w-12">
@endif

</div>
