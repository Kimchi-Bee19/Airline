@extends('base.base')

@section('content')

    <div class="mx-5 px-5">
        <div class="mt-10 mb-2 flex justify-between">
            <h1 class="font-bold text-3xl">Ticket Booking for {{ $flight->flight_code }}</h1>
            <div class="flex justify-end">
                <h1 class="font-bold text-3xl">{{ $passengers }} passengers || {{ $boardings }} boardings</h1>
            </div>
            
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

    <div class="flex mt-4 mb-5 mx-5 justify-center items-center">
        <div class="w-full max-w-6xl -m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 w-full">
                        <thead class="bg-gray-50 text-center"> 
                            <tr>
                                <th scope="col" class="w-10 px-6 py-3 text-xs font-bold text-black uppercase">No</th>
                                <th scope="col" class="w-1/3 px-6 py-3 text-xs font-bold text-black uppercase">Passenger Name</th>
                                <th scope="col" class="w-1/4 px-6 py-3 text-xs font-bold text-black uppercase">Passenger Phone</th>
                                <th scope="col" class="w-1/4 px-6 py-3 text-xs font-bold text-black uppercase">Seat Number</th>
                                <th scope="col" class="w-1/4 px-6 py-3 text-xs font-bold text-black uppercase">Boarding</th>
                                <th scope="col" class="w-1/4 px-6 py-3 text-xs font-bold text-black uppercase">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-center">
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($tickets as $ticket)
                                <tr class="odd:bg-white even:bg-slate-50">
                                    <td class="w-10 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $no++ }}</td>
                                    <td class="w-1/3 px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $ticket->passenger_name }}</td>
                                    <td class="w-1/4 px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $ticket->passenger_phone }}</td>
                                    <td class="w-1/4 px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $ticket->seat_number }}</td>
                                    <td class="w-1/4 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        @if ($ticket->is_boarding)
                                            {{ date('d-m-Y, H:i', strtotime($ticket->boarding_time)) }}
                                        @else
                                            <form action="{{ route('ticket.board', $ticket->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="inline-block rounded-full bg-blue-500 px-6 py-2.5 text-xs font-semibold uppercase leading-normal text-white shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition ease-in-out duration-150">
                                                    Confirm
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="w-1/4 px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex justify-center space-x-2"> 
                                            @if ($ticket->is_boarding)
                                                <button disabled class="inline-block rounded-full bg-red-500 bg-opacity-50 opacity-50 px-6 py-2.5 text-xs font-semibold uppercase leading-normal text-white shadow-md transition ease-in-out duration-150">
                                                    Delete
                                                </button>
                                            @else
                                                <form action="{{ route('ticket.delete', $ticket->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="inline-block rounded-full bg-red-500 px-6 py-2.5 text-xs font-semibold uppercase leading-normal text-white shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition ease-in-out duration-150">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">No passengers are found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5 flex items-center justify-center gap-x-6">
        <a href="/flights" class="text-sm font-semibold leading-6 text-gray-900">Back</a> 
    </div>
@endsection