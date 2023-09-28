@extends('layout.main')

@section('container')
<div class="flex flex-col items-center justify-center">
    @if(isset($registerSuccess) && isset($data))
    <div class="bg-green-600 text-white py-2 px-6 rounded-sm">
        {{ $registerSuccess }}
    </div>

    <h1 class="text-3xl font-bold mb-8">Profile</h1>

    <img src="/storage/{{ $data['profile'] }}" alt="Profile" class="object-scale-down h-48 w-96 rounded-md">

    <ul>
        <li><b>Name:</b> {{ $data['name'] }}</li>
        <li><b>Age:</b> {{ $data['age'] }}</li>
        <li><b>Occupation:</b> {{ $data['occupation'] }}</li>
        <li><b>Weight:</b> {{ $data['weight'] }} kg</li>
        <li><b>Email:</b> {{ $data['email'] }}</li>
    </ul>

    @endif
</div>
@endsection