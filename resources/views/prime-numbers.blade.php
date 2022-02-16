@extends('template')
@section('title', 'Prime Numbers')

@section('content')
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-4">
        @foreach($numbers as $column)
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    @foreach($column as $number)
                    <div>
                        <span>
                            {!!$number->number!!}
                        </span>
                        @if($number->prime)
                        <span class="green">
                            [prime]
                        </span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection