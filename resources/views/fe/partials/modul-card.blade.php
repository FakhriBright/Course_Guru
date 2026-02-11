<div class="bg-white rounded-xl shadow p-4 flex gap-3">

    <div class="flex-1">

        <h2 class="font-semibold text-sm">
            {{ $modul->title }}
        </h2>

        <p class="text-xs text-gray-500 line-clamp-3 mt-1">
            {{ $modul->description }}
        </p>

        <div class="text-xs text-gray-400 mt-2">
            📄 {{ $modul->unit }} Unit Pembelajaran
        </div>

        @php
            $routeMap = [
                'PPG'=>'course.index',
                'PKL'=>'coursepkl.index',
                'SelfDev'=>'courseself.index',
                'AddTrain'=>'coursetraining.index',
            ];
            $route = $routeMap[$modul->category] ?? 'course.index';
        @endphp

        <a href="{{ route($route) }}"
           class="inline-block mt-2 text-xs px-3 py-1 bg-blue-500 text-white rounded">
            Masuk
        </a>

    </div>

    @if($modul->icon)
        <img src="{{ $modul->icon }}" class="w-12 h-12">
    @endif

</div>
