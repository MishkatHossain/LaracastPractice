<x-layout>

    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li><strong>{{ $job['title']}}:</strong> Pays {{$job['salary']}} per year.</li>
        @endforeach
    </ul>


    
</x-layout>