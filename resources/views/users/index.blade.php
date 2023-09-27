<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Team Settings') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white p-8">
                {{ $users->links() }}
                <ol class="py-4">
                    @foreach ($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ol>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
