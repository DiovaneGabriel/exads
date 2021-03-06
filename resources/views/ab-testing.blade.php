@extends('template')
@section('title', 'A/B Testing')

@section('content')

<style>
    @media (min-width: 1000px) {
        .custom-grid {
            grid-template-columns: repeat(1,1fr);
            border-bottom-width: 0px;
        }
        .grid-head{
            grid-column-end: 2;
        }
    }
</style>

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid custom-grid">
        <div class="p-6 grid-head flex">
            <form action="" class="m-auto">
                <label for="promo" class="text-gray-600">Select an option</label>
                <select name="promo_id" required id="promo" class="text-gray-600">
                    @for($i=1;$i<=3;$i++)
                        <option value="{{$i}}" {{ ( $i == $promotionId) ? 'selected' : '' }}>Promo {{$i}}</option>
                    @endfor
                </select>
                <div class="w-100 text-center">
                    <h2>
                        {{$promotionName}}
                    </h2>
                </div>
            </form>
        </div>
        <div class="p-6">
            <div class="design">
                <span class="title" title="{{$design['designId']}}">
                    {{$design['designName']}}
                </span>
                <span class="percent best green">
                    {{$design['splitPercent']}}%
                </span>
            </div>
        </div>
    </div>
</div>
<script>
    $("#promo").on("change",function(){
        $(this).closest("form").submit();
    });
</script>
@endsection