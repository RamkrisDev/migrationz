<h1>Entire data</h1>

<ol>
    @foreach($datas as $d)
    <li>{{$d['name']}}</li>
    @endforeach
</ol>
<span>
    {{$datas->links()}}
</span>
<style>
    .w-5{
        display: none;
    }
</style>