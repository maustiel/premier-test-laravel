<x-layouts.company title="entreprise">
    <h1>L'entreprise<h1>
        <ul>
            @foreach ($info as $key => $value)
                <li>{{$key}}:{{$value}}</li>
            @endforeach
        </ul>
</x-layouts.company>
