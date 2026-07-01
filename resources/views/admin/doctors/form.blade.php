@extends('layouts.admin')
@section('title', $doctor->id ? 'Edit Doctor' : 'Add Doctor')

@section('admin-content')
<div class="max-w-2xl">
    <a href="{{ route('admin.doctors.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <h2 class="font-bold text-xl text-gray-800 mb-6">{{ $doctor->id ? 'Edit Doctor' : 'Add Doctor' }}</h2>
        <form action="{{ $doctor->id ? route('admin.doctors.update', $doctor) : route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if($doctor->id) @method('PUT') @endif

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Doctor Name *</label>
                    <input type="text" name="name" required value="{{ old('name', $doctor->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Designation</label>
                    <input type="text" name="designation" value="{{ old('designation', $doctor->designation) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Qualifications</label>
                <input type="text" name="qualifications" value="{{ old('qualifications', $doctor->qualifications) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                <select name="department_id" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">No Department</option>
                    @foreach($departments as $dept)
                    <option value="{{ $dept->id }}" {{ old('department_id', $doctor->department_id) == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                <textarea name="bio" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('bio', $doctor->bio) }}</textarea>
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">OPD Days</label>
                    <input type="text" name="opd_days" value="{{ old('opd_days', $doctor->opd_days) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g. Mon, Wed, Fri">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">OPD Timing</label>
                    <input type="text" name="opd_timing" value="{{ old('opd_timing', $doctor->opd_timing) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g. 10am - 1pm">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Photo</label>
                <input type="file" name="photo" accept="image/*" class="w-full text-sm border border-gray-300 rounded-lg px-4 py-3">
                @if($doctor->photo)<div class="mt-2"><img src="{{ asset('storage/' . $doctor->photo) }}" class="h-20 w-20 rounded-full object-cover"></div>@endif
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $doctor->sort_order) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="flex items-center gap-3 pt-8">
                    <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded" {{ old('is_active', $doctor->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" class="text-sm font-medium text-gray-700">Active</label>
                </div>
            </div>

            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Doctor</button>
        </form>
    </div>
</div>
@endsection
