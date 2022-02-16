@extends('template')
@section('title', 'ASCII Array')

@section('content')
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-1">
        <div class="p-6">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="text-center">
                        <h3>Before</h3>
                    </div>
                    <div>
                        @foreach($before_array as $char)
                        {!!$char!!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="text-center">
                        <h3>After</h3>
                    </div>
                    <div class="text-center">
                        @foreach($after_array as $char)
                        {!!$char!!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="text-center">
                        <h3>The character</h3>
                        <h1 class="green">{!!$removed_character!!}</h1>
                        <h3>was removed!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection