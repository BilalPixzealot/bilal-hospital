@extends('layouts.admin')
@section('title', 'Dashboard')

@section('admin-content')
<div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-blue-500">
        <div class="text-2xl font-bold text-gray-800">{{ $stats['appointments'] }}</div>
        <div class="text-sm text-gray-500 mt-1">Total Appointments</div>
        <i class="fas fa-calendar-check text-blue-400 text-2xl mt-2"></i>
    </div>
    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-red-400">
        <div class="text-2xl font-bold text-gray-800">{{ $stats['contacts'] }}</div>
        <div class="text-sm text-gray-500 mt-1">Unread Messages</div>
        <i class="fas fa-envelope text-red-400 text-2xl mt-2"></i>
    </div>
    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-green-500">
        <div class="text-2xl font-bold text-gray-800">{{ $stats['doctors'] }}</div>
        <div class="text-sm text-gray-500 mt-1">Total Doctors</div>
        <i class="fas fa-user-md text-green-400 text-2xl mt-2"></i>
    </div>
    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
        <div class="text-2xl font-bold text-gray-800">{{ $stats['departments'] }}</div>
        <div class="text-sm text-gray-500 mt-1">Departments</div>
        <i class="fas fa-building text-purple-400 text-2xl mt-2"></i>
    </div>
</div>

<div class="grid lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Recent Appointments</h3>
            <a href="{{ route('admin.appointments.index') }}" class="text-primary text-sm hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50"><tr class="text-left text-gray-500 text-xs uppercase"><th class="px-4 py-3">Patient</th><th class="px-4 py-3">Date</th><th class="px-4 py-3">Status</th></tr></thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recentAppointments as $a)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 font-medium text-gray-800">{{ $a->patient_name }}<br><span class="text-xs text-gray-400">{{ $a->phone }}</span></td>
                        <td class="px-4 py-3 text-gray-600">{{ $a->preferred_date?->format('d M Y') }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-medium {{ $a->status === 'confirmed' ? 'bg-green-100 text-green-700' : ($a->status === 'cancelled' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">{{ ucfirst($a->status) }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="px-4 py-6 text-center text-gray-400">No appointments yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Recent Messages</h3>
            <a href="{{ route('admin.contacts.index') }}" class="text-primary text-sm hover:underline">View All</a>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($recentContacts as $c)
            <a href="{{ route('admin.contacts.show', $c) }}" class="flex gap-3 p-4 hover:bg-gray-50 {{ !$c->is_read ? 'bg-blue-50/50' : '' }}">
                <div class="w-9 h-9 bg-primary/10 rounded-full flex items-center justify-center shrink-0 text-primary font-bold text-sm">{{ substr($c->name, 0, 1) }}</div>
                <div class="flex-1 min-w-0">
                    <div class="font-medium text-gray-800 text-sm flex items-center gap-2">{{ $c->name }} @if(!$c->is_read)<span class="w-2 h-2 bg-primary rounded-full inline-block"></span>@endif</div>
                    <div class="text-gray-500 text-xs truncate">{{ $c->subject ?? $c->message }}</div>
                </div>
            </a>
            @empty
            <div class="p-6 text-center text-gray-400 text-sm">No messages</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
