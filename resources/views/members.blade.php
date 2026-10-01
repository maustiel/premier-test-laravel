<x-layouts.company title="Membres">
    <h1>Membres du club</h1>
    
    <ul>
        @forelse ($members as $member)
            <li>
                {{ $loop->iteration }}. {{ $member['first_name'] }} : 
                @if ($member['age'] >= 18)
                    {{ $member['age'] }} ans
                @else
                    mineur
                @endif
            </li>
        @empty
            <li>Aucun membre</li>
        @endforelse
    </ul>
</x-layouts.company>