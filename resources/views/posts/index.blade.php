<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ ('Profile') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white p-2 rounded-md">{{ ('add') }}</a>
        </div>
    </x-slot>


    
</x-app-layout>
