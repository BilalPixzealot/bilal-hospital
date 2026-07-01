@extends('layouts.admin')
@section('title', 'Site Settings')

@section('admin-content')
<div class="max-w-3xl">
    <div class="bg-white rounded-xl shadow-sm p-8">
        <h2 class="font-bold text-xl text-gray-800 mb-6">Site Settings</h2>
        <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-5">
            @csrf @method('POST')
            @php
            $fields = [
                ['key'=>'site_name','label'=>'Hospital Name'],['key'=>'site_tagline','label'=>'Tagline'],
                ['key'=>'site_email','label'=>'Email'],['key'=>'site_phone','label'=>'Primary Phone'],
                ['key'=>'site_phone_2','label'=>'Secondary Phone'],['key'=>'emergency_number','label'=>'Emergency Number'],
                ['key'=>'site_address','label'=>'Address','textarea'=>true],
                ['key'=>'facebook_url','label'=>'Facebook URL'],['key'=>'instagram_url','label'=>'Instagram URL'],
                ['key'=>'whatsapp_number','label'=>'WhatsApp Number (with country code, no +)'],
            ];
            @endphp
            @foreach($fields as $f)
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ $f['label'] }}</label>
                @if(!empty($f['textarea']))
                <textarea name="{{ $f['key'] }}" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old($f['key'], $settings[$f['key']] ?? '') }}</textarea>
                @else
                <input type="text" name="{{ $f['key'] }}" value="{{ old($f['key'], $settings[$f['key']] ?? '') }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                @endif
            </div>
            @endforeach
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Settings</button>
        </form>
    </div>
</div>
@endsection
