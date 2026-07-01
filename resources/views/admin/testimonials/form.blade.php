@extends('layouts.admin')
@section('title', $testimonial->id ? 'Edit Testimonial' : 'Add Testimonial')

@section('admin-content')
<div class="max-w-xl">
    <a href="{{ route('admin.testimonials.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <form action="{{ $testimonial->id ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" method="POST" class="space-y-5">
            @csrf @if($testimonial->id) @method('PUT') @endif
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Patient Name *</label>
                <input type="text" name="patient_name" required value="{{ old('patient_name', $testimonial->patient_name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Review *</label>
                <textarea name="review" required rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('review', $testimonial->review) }}</textarea>
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                    <select name="rating" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        @for($i = 5; $i >= 1; $i--)<option value="{{ $i }}" {{ old('rating', $testimonial->rating ?? 5) == $i ? 'selected' : '' }}>{{ str_repeat('★', $i) }}</option>@endfor
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Source</label>
                    <select name="source" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        @foreach(['Google', 'Facebook', 'On-site'] as $s)<option value="{{ $s }}" {{ old('source', $testimonial->source) === $s ? 'selected' : '' }}>{{ $s }}</option>@endforeach
                    </select>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" class="rounded" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
                <label class="text-sm font-medium text-gray-700">Visible on website</label>
            </div>
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Testimonial</button>
        </form>
    </div>
</div>
@endsection
