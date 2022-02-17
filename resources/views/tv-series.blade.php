@extends('template')
@section('title', 'TV Series')

@section('content')
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg w-100">
    <div class="grid grid-cols-1 md:grid-cols-1">
        <div class="p-6">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <form action="">
                        <input value="{!!$search!!}" type="text" class="w-50 text-gray-600" name="search" placeholder="Search by title...">
                        <input value="{!!$date!!}" type="datetime" class="w-auto text-gray-600 right" name="date" placeholder="Next after">
                    </form>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="ml-12 mr-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <table>
                        <tr>
                            <th>Week Day</th>
                            <th>Show Time</th>
                            <th>Channel</th>
                            <th>Title</th>
                            <th>Gender</th>
                        </tr>
                        @foreach($intervals as $interval)
                        <tr>
                            <td>{!!week_day($interval->week_day)!!}</td>
                            <td>{!!date('H:i',strtotime($interval->show_time))!!}</td>
                            <td>{!!$interval->tvSerie->channel!!}</td>
                            <td>{!!$interval->tvSerie->title!!}</td>
                            <td>{!!$interval->tvSerie->gender!!}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection