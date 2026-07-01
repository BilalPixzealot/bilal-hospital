@extends('layouts.admin')
@section('title', 'Contact Messages')

@section('admin-content')
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="p-4 border-b border-gray-100"><h3 class="font-bold text-gray-800">Contact Messages</h3></div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-xs uppercase text-gray-500">
                <tr><th class="px-4 py-3 text-left">Name</th><th class="px-4 py-3 text-left">Subject</th><th class="px-4 py-3 text-left">Date</th><th class="px-4 py-3 text-left">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($contacts as $c)
                <tr class="hover:bg-gray-50 {{ !$c->is_read ? 'bg-blue-50/30' : '' }}">
                    <td class="px-4 py-3">
                        <div class="font-medium text-gray-800 flex items-center gap-2">{{ $c->name }} @if(!$c->is_read)<span class="w-2 h-2 bg-blue-500 rounded-full inline-block"></span>@endif</div>
                        <div class="text-xs text-gray-400">{{ $c->phone }}</div>
                    </td>
                    <td class="px-4 py-3 text-gray-600 max-w-xs truncate">{{ $c->subject ?? Str::limit($c->message, 60) }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs">{{ $c->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-3">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.contacts.show', $c) }}" class="text-primary hover:underline text-xs">View</a>
                            <form action="{{ route('admin.contacts.destroy', $c) }}" method="POST" onsubmit="return confirm('Delete this message?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:underline text-xs">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-4 py-8 text-center text-gray-400">No messages</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4">{{ $contacts->links() }}</div>
</div>
@endsection
