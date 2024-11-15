@extends('base.base')

@section('content')

    <div class="mx-4 mb-2 px-4 justify-center text-center">
        @if (session('success'))
            <div class="p-4 mb-6 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="p-4 mb-6 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="container mb-5 mx-auto flex justify-center max-w-full px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($flights as $flight)
                <div class="bg-white dark:bg-slate-800 rounded-lg px-7 py-3 ring-1 ring-slate-900/5 shadow-xl">
                    <div class="flex justify-between mb-2">
                        <h2 class="text-slate-900 text-lg font-bold tracking-tight">{{ $flight['flight_code'] }}</h2>
                        <h2 class="text-slate-900 text-lg tracking-tight flex">
                            {{ $flight['origin'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 15" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                            {{ $flight['destination'] }}
                        </h2>
                    </div>
                    <h3 class="text-slate-900 text-sm tracking-tight">Departure</h3>
                    <h3 class="text-slate-900 text-sm font-bold italic tracking-tight">{{ date(' l, d F Y, H:i', strtotime($flight['departure_time'])) }}</h3>
                    <h3 class="text-slate-900 text-sm tracking-tight">Arrived</h3>
                    <h3 class="text-slate-900 text-sm font-bold italic tracking-tight">{{ date(' l, d F Y, H:i ', strtotime($flight['arrival_time'])) }}</h3>
                    <div class="mt-4 flex items-center justify-center gap-x-6">
                        <a href="{{ route('ticket.book', $flight->id) }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Book Ticket</a>
                        <a href="/flights/ticket/{{ $flight['id'] }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View Details</a> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection