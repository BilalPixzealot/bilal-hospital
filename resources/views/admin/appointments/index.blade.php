@extends('layouts.admin')
@section('title', 'Appointments')

@section('admin-content')
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="p-4 border-b border-gray-100">
        <h3 class="font-bold text-gray-800">All Appointments</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-xs uppercase text-gray-500">
                <tr><th class="px-4 py-3 text-left">Patient</th><th class="px-4 py-3 text-left">Department</th><th class="px-4 py-3 text-left">Date</th><th class="px-4 py-3 text-left">Time</th><th class="px-4 py-3 text-left">Status</th><th class="px-4 py-3 text-left">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($appointments as $a)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3"><div class="font-medium text-gray-800">{{ $a->patient_name }}</div><div class="text-xs text-gray-400">{{ $a->phone }}</div></td>
                    <td class="px-4 py-3 text-gray-600">{{ $a->department?->name ?? 'N/A' }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $a->preferred_date?->format('d M Y') }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $a->preferred_time }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 rounded-full text-xs font-medium {{ $a->status === 'confirmed' ? 'bg-green-100 text-green-700' : ($a->status === 'cancelled' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">{{ ucfirst($a->status) }}</span>
                    </td>
                    <td class="px-4 py-3">
                        <form action="{{ route('admin.appointments.status', $a) }}" method="POST" class="flex gap-1">
                            @csrf
                            <select name="status" onchange="this.form.submit()" class="text-xs border border-gray-300 rounded px-2 py-1">
                                <option value="pending" {{ $a->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $a->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="cancelled" {{ $a->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="px-4 py-8 text-center text-gray-400">No appointments yet</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4">{{ $appointments->links() }}</div>
</div>
@endsection
