@extends('layouts.admin')
@section('title', 'Message from ' . $contact->name)

@section('admin-content')
<div class="max-w-2xl">
    <a href="{{ route('admin.contacts.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back to Messages</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <h2 class="font-bold text-xl text-gray-800 mb-6">{{ $contact->subject ?? 'Contact Message' }}</h2>
        <dl class="grid sm:grid-cols-2 gap-4 mb-6 pb-6 border-b border-gray-100 text-sm">
            <div><dt class="text-gray-500 font-medium mb-1">Name</dt><dd class="text-gray-800">{{ $contact->name }}</dd></div>
            <div><dt class="text-gray-500 font-medium mb-1">Phone</dt><dd class="text-gray-800">{{ $contact->phone }}</dd></div>
            <div><dt class="text-gray-500 font-medium mb-1">Email</dt><dd class="text-gray-800">{{ $contact->email ?? 'N/A' }}</dd></div>
            <div><dt class="text-gray-500 font-medium mb-1">Received</dt><dd class="text-gray-800">{{ $contact->created_at->format('d M Y, h:i A') }}</dd></div>
        </dl>
        <div>
            <dt class="text-gray-500 font-medium mb-2 text-sm">Message</dt>
            <dd class="text-gray-700 bg-gray-50 p-4 rounded-lg leading-relaxed">{{ $contact->message }}</dd>
        </div>
        <div class="mt-6 flex gap-3">
            @if($contact->email)
            <a href="mailto:{{ $contact->email }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors">Reply via Email</a>
            @endif
            @if($contact->phone)
            <a href="tel:{{ $contact->phone }}" class="bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-green-600 transition-colors"><i class="fas fa-phone mr-1"></i>Call</a>
            @endif
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete?')">
                @csrf @method('DELETE')
                <button class="bg-red-50 text-red-500 text-sm font-medium px-4 py-2 rounded-lg hover:bg-red-100 transition-colors">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
