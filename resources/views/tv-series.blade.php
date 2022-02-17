@extends('template')
@section('title', 'TV Series')

@section('content')
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg w-100">
        <div class="grid grid-cols-1 md:grid-cols-1">
            <div class="p-6">
                <div class="ml-12 mr-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <form action="/tv-series">
                            <input value="{!! $search !!}" type="text" class="w-30 text-gray-600" name="search"
                                placeholder="Search by title...">
                            <input value="{!! $date !!}" type="text" class="text-gray-600 datepicker" name="date">
                            <input value="{!! $time !!}" type="text" class="text-gray-600 timepicker" name="time">
                            <input type="submit" value="Go">
                        </form>
                    </div>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <div class="ml-12 mr-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <h3 class="text-center">Next schedule from {!! $date." ".$time !!}</h3>
                        <table>
                            <tr>
                                <th>Week Day</th>
                                <th>Show Time</th>
                                <th>Channel</th>
                                <th>Title</th>
                                <th>Gender</th>
                            </tr>
                            @foreach ($intervals as $interval)
                                <tr>
                                    <td>{!! week_day($interval->week_day) !!}</td>
                                    <td>{!! date('H:i', strtotime($interval->show_time)) !!}</td>
                                    <td>{!! $interval->tvSerie->channel !!}</td>
                                    <td>{!! $interval->tvSerie->title !!}</td>
                                    <td>{!! $interval->tvSerie->gender !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".datepicker").datepicker({
            dateFormat: "yy/mm/dd"
        });
        $('.timepicker').timepicker({
            timeFormat: 'HH:mm',
            interval: 30,
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    </script>
@endsection
