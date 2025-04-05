
 
 
<x-layout>
    <x-slot:heading>
        <h1>jobs offert</h1>
      </x-slot:heading>

            @foreach ($jobs as $job)
                 
                <li> <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.<br></li>
          
            @endforeach

    
</x-layout>

