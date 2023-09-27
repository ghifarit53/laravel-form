@extends('layout.main')

@section('container')
<div class="flex flex-col items-center">
    <h1 class="text-3xl font-bold mb-8">Register for a new account</h1>

    <form method="POST">
        @csrf

        <div class="mb-2">
            <label class="mr-4">Name</label>
            <input type="text" name="name" class="px-2 py-1 bg-gray-100 rounded-md w-full">
        </div>

        <div class="mb-2">
            <label class="mr-4">Age</label>
            <input type="number" name="age" step=1 class="px-2 py-1 bg-gray-100 rounded-md w-full">
        </div>

        <div class="mb-2">
            <label class="mr-4">Height</label>
            <input type="number" name="height" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full">
        </div>
    </form>
</div>
@endsection