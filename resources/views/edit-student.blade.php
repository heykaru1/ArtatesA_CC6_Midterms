<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-medium mb-4">Edit Student</h3>
            <form method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>


                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>


                    <div>
                        <label for="phone" class="block text-gray-700">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>


                    <div>
                        <label for="address" class="block text-gray-700">Address</label>
                        <input type="text" id="address" name="address" value="{{ old('address', $student->address) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
