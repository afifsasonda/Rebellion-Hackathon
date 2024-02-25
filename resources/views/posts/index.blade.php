<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ ('Profile') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white p-2">{{ ('add') }}</a>
        </div>
    </x-slot>


    <div class="py-2">
        <div class="max-w-7xl mx-auto h-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Title</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Create</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Update</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($posts as $post)
                            <tr>
                                <td class="border-b border-slate-100"></td>
                                <td class="border-b border-slate-100 dark-border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $post->title }}</td>
                                <td class="border-b border-slate-100 dark-border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $post->created_at }}</td>
                                <td class="border-b border-slate-100 dark-border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $post->updated_at }}</td>
                                <td class="border-b border-slate-100 dark-border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                    <a href="{{ route('posts.show', $post->id) }}" class="border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">SHOW</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('delete')
                                        <button class="border border-red-300 hover:border-red-500 hover:text-gray-400 px-4 py-2 rounded-md">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
