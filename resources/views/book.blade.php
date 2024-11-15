@extends('base.base')

@section('content')

    <div class="container my-7 mx-auto max-w-full px-10">
        <form action="{{ route('ticket.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pb-3">
                <div class="mt-10 mb-2 flex justify-between">
                    <h1 class="font-bold text-3xl">Ticket Booking for</h1>
                    <h1 class="font-bold text-3xl">{{ $flight->flight_code }}</h1>
                </div>

                <hr class="mb-2">

                <div class="mb-4 flex justify-between">
                    <h2 class="text-slate-900 tracking-tight flex">
                            {{ $flight['origin'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 15" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                            {{ $flight['destination'] }}
                        </h2>
                    <div class="flex justify-between gap-3">
                        <h3 class="text-slate-900 text-sm tracking-tight">Departure <span class="font-bold italic">{{ date(' l, d F Y, H:i', strtotime($flight['departure_time'])) }}</span></h3>
                        <h3 class="text-slate-900 text-sm tracking-tight">Arrived <span class="font-bold italic">{{ date(' l, d F Y, H:i ', strtotime($flight['arrival_time'])) }}</span></h3>
                    </div>
                </div>

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
        
                <div class="mt-10 grid flex-row">
                    <input type="hidden" name="flight_id" id="flight_id" value="{{ $flight->id }}" required>
                    
                    <div class="sm:row-span-3">
                        <label for="passenger_name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="passenger_name" id="passenger_name" maxlength="100" 
                                   class="@error('passenger_name') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                   required>
                            @error('passenger_name')
                                <div class="border border-red-500 text-red-500 text-xs italic">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="sm:row-span-3">
                        <label for="passenger_phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <input type="text" name="passenger_phone" id="passenger_phone" maxlength="100" 
                                   class="@error('passenger_phone') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                   required>
                            @error('passenger_phone')
                                <div class="border border-red-500 text-red-500 text-xs italic">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="sm:row-span-3">
                        <label for="seat_number" class="block text-sm font-medium leading-6 text-gray-900">Seat Number</label>
                        <div class="mt-2">
                            <input type="text" name="seat_number" id="seat_number" maxlength="5" 
                                   class="@error('seat_number') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                   required>
                            @error('seat_number')
                                <div class="border border-red-500 text-red-500 text-xs italic">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 flex items-center justify-end gap-x-6">
                    <a href="/flights" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Book Ticket</button>
                </div>
            </div>
        </form>
    </div>  
@endsection