<div class="modul-card">

<h3>{{ $modul->title }}</h3>
<p>{{ $modul->description }}</p>

@php
$routeMap = [
'PPG' => 'course.index',
'PKL' => 'coursepkl.index',
'SelfDev' => 'courseself.index',
'AddTrain' => 'coursetraining.index',
'Gemini' => 'coursegemini.index',
'BK' => 'coursebk.index',
];

$route = $routeMap[$modul->category] ?? 'course.index';
@endphp

<a href="{{ route($route) }}" class="btn-masuk">
Masuk
</a>

</div>
