<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="w-full p-4">
        <h1 class="text-2xl text-center text-green-800 font-bold">Ajouter un nouveau service</h1>
    </div>

    <div class="max-w-md mx-auto bg-white p-8 mt-4 rounded-md shadow-md">
        <form action="" method="POST">
            @csrf

            <div class="mb-4">
                <label for="titre" class="block text-gray-600 text-sm font-semibold mb-2">Titre</label>
                <input type="text" name="titre" id="titre" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-600 text-sm font-semibold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded-md p-2" required></textarea>
            </div>

            <div class="mb-4">
                <label for="id_categorie" class="block text-gray-600 text-sm font-semibold mb-2">Catégorie</label>
                <select name="id_categorie" id="id_categorie" class="w-full border border-gray-300 rounded-md p-2" required>
                    <option value="1">Catégorie 1</option>
                    <option value="2">Catégorie 2</option>
                    <option value="3">Catégorie 3</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-600 text-sm font-semibold mb-2">Prix</label>
                <input type="number" name="price" id="price" class="w-full border border-gray-300 rounded-md p-2" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="email_user" class="block text-gray-600 text-sm font-semibold mb-2">Email de l'utilisateur</label>
                <input type="email" name="email_user" id="email_user" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <div class="mb-4">
                <label for="tel_user" class="block text-gray-600 text-sm font-semibold mb-2">Téléphone de l'utilisateur</label>
                <input type="tel" name="tel_user" id="tel_user" class="w-full border border-gray-300 rounded-md p-2" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Ajouter Service</button>
            </div>
        </form>
    </div>
@endsection
