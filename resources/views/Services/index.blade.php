@extends('layouts.app')

@section('content')
<div class="w-full p-4">
    <h1 class="text-2xl text-green-800 font-bold">HireMe</h1>
</div>

<div class="text-center p-4 bg-cover bg-center" style="background-image: url('/path/to/your/image.jpg');">
    <p class="text-lg mb-4">Choisissez HireMe pour des services exceptionnels à domicile!</p>
</div>

<div class="w-full mx-auto mt-4">
        <a href="{{ route('services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create New Service</a>
    </div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8 p-4">
    @foreach([
    [
    'titre' => 'Service 1',
    'description' => 'Description du service 1.',
    'price' => 19.99,
    'categorie' => 'Catégorie 1',
    'email_user' => 'service1@example.com',
    'tel_user' => '123-456-7890',
    ],
    [
    'titre' => 'Service 2',
    'description' => 'Description du service 2.',
    'price' => 29.99,
    'categorie' => 'Catégorie 2',
    'email_user' => 'service2@example.com',
    'tel_user' => '987-654-3210',
    ],
    [
    'titre' => 'Service 3',
    'description' => 'Description du service 3.',
    'price' => 39.99,
    'categorie' => 'Catégorie 3',
    'email_user' => 'service3@example.com',
    'tel_user' => '555-123-4567',
    ],
    ] as $service)
    <div class="bg-white p-4 rounded-md shadow-md">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-3 py-1 rounded  border border-blue-400">{{ $service['categorie'] }}</span>

        <p class="text-gray-600">Email : {{ $service['email_user'] }}</p>
        <p class="text-gray-600">Téléphone : {{ $service['tel_user'] }}</p>
        <h3 class="text-xl font-bold my-2">{{ $service['titre'] }}</h3>
        <p class="text-gray-600">{{ $service['description'] }}</p>
        <div class="mt-4 flex justify-between items-center">
            <p class="text-red-500 font-bold">${{ $service['price'] }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection