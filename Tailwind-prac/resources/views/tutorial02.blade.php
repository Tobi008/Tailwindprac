@extends('layouts.app')

<div class="px-8 py-12">
    <img class="h-10" src=" {{url('/img/download.png')}}" alt="workcation" />
    <img class="mt-6 rounded-3xl shadow-xl" src=" {{url('/img/image.jpg')}}" alt="Woman working on Beach">
    <h1 class="mt-6 text-2xl font-bold text-gray-900">
        You can work from anywhere. <span class="text-indigo-500">Take advantage of it</span>
    </h1>

    <p class="mt-2 text-gray-900">
        workcation helps you find work-friendly rentals in beautiful locations so you can enjoy
        some nice weather even when you're not on vacation.
    </p>
    <div class="mt-4">
        <a class="inline-block text-white px-5 py-3 rounded-lg bg-indigo-500 uppercase tracking-wider font-semibold text-sm"> 
            Book your escape </a>
    </div>
</div>