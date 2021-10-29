@extends('layouts.app')

<div class="bg-gray-100 grid lg:grid-cols-2 2xl:grid-cols-5"> 
    <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:px-12 lg:py-24 lg:max-w-full xl:mr-0 2xl:col-span-2">
        <div class="xl:max-w-xl">
        <img class="h-10" src="img/download.png" alt="workcation" />
        <img class="mt-6 rounded-3xl shadow-xl sm:h-64 sm:mt-8 sm:w-full sm:object-cover object-center lg:hidden" 
        src="img/image.jpg" alt="Woman working on Beach">
        <h1 class="sm:mt-8 sm:text-4xl mt-6 text-2xl font-bold text-gray-900 lg:text-3xl xl:text-4xl">
            You can work from anywhere. 
            <br class="hidden lg:inline">
            <span class="text-indigo-500">Take advantage of it</span>
        </h1>

        <p class="sm:mt-4 sm:text-xl mt-2 text-gray-900">
            workcation helps you find work-friendly rentals in beautiful locations so you can enjoy
            some nice weather even when you're not on vacation.
        </p>
        <div class="mt-4 sm:mt-6">
            <a class="inline-block text-white px-5 py-3 rounded-lg shadow-lg bg-indigo-500 
            hover:bg-indigo-400 uppercase hover:-translate-y-0.5 focus:outline-none 
            transform transition tracking-wider focus:ring focus:ring-offset-2 
            focus:ring-indigo-500 active:bg-indigo-600 font-semibold text-sm sm:text-base" href="#"> 
                Book your escape </a>

            <a class="inline-block text-gray-800 px-5 py-3 rounded-lg bg-gray-300 hover:bg-gray-400 uppercase focus:outline-none tracking-wider
                focus:ring focus:ring-offset-2 focus:ring-gray-500 active:bg-gray-600
                font-semibold text-sm sm:text-base" href="#"> 
                    Learn More </a>
        </div>
        </div>  
    </div>

    <div class="hidden relative lg:block 2xl:col-span-3">
        <img class="absolute inset-0 w-full h-full object-cover object-center"
        src="img/image.jpg" alt="Woman working on Beach">
        
    </div>
    </div>