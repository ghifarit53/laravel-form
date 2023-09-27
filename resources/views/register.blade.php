@extends('layout.main')

@section('container')
<div class="flex flex-col items-center">
    <h1 class="text-3xl font-bold mb-8">Register for a new account</h1>

    <form method="POST">
        @csrf

        <div class="mb-4">
            <label class="mr-4">Name</label>
            <input type="text" name="name" class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. Ghifari">
        </div>

        <div class="mb-4">
            <label class="mr-4">Age</label>
            <input type="number" name="age" step=1 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. 20">
        </div>
        
        <div class="mb-4">
            <label class="mr-4">Occupation</label>
            <select name="occupation" class="px-2 py-1 bg-gray-100 rounded-md w-full">
                <option value="Student">Student</option>
                <option value="Entrepreneur">Entrepreneur</option>
                <option value="Civil Servant">Civil Servant</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Private Employee">Private Employee</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="mr-4">Height</label>
            <input type="number" name="height" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. 174.45">
        </div>

        <div class="mb-4">
            <label class="mr-4">Email</label>
            <input type="text" name="email" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. ghifari@mail.com">
        </div>

        <div class="mb-4">
            <label class="mr-4">Profile picture</label>
            <input type="file" name="profile" class="py-1 w-full">
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">
            Register
        </button>
    </form>
</div>
@endsection