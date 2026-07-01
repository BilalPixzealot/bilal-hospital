@extends('layouts.admin')
@section('title', $company->id ? 'Edit Company' : 'Add Company')

@section('admin-content')
<div class="max-w-md">
    <a href="{{ route('admin.insurance.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <form action="{{ $company->id ? route('admin.insurance.update', $company) : route('admin.insurance.store') }}" method="POST" class="space-y-5">
            @csrf @if($company->id) @method('PUT') @endif
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label><input type="text" name="name" required value="{{ old('name', $company->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Type *</label>
                <select name="type" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    @foreach(['insurance', 'tpa', 'government'] as $t)<option value="{{ $t }}" {{ old('type', $company->type) === $t ? 'selected' : '' }}>{{ ucfirst($t) }}</option>@endforeach
                </select>
            </div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label><input type="number" name="sort_order" value="{{ old('sort_order', $company->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary"></div>
            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" class="rounded" {{ old('is_active', $company->is_active ?? true) ? 'checked' : '' }}>
                <label class="text-sm font-medium text-gray-700">Active</label>
            </div>
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save</button>
        </form>
    </div>
</div>
@endsection
