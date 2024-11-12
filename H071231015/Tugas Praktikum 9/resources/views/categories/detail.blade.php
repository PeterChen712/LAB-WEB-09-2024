@extends('layouts.app')
@section('title', 'Category Details')
@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Category Details</h1>
        <a href="{{ route('categories.index') }}" 
           class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition">
            Back to List
        </a>
    </div>
    
    <div class="bg-white shadow-sm rounded-lg p-6">
        <dl class="grid grid-cols-1 gap-4">
            <div>
                <dt class="text-sm font-medium text-gray-500">Name</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->name }}</dd>
            </div>
            
            <div>
                <dt class="text-sm font-medium text-gray-500">Description</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->description ?: 'No description provided' }}</dd>
            </div>
            
            <div>
                <dt class="text-sm font-medium text-gray-500">Created At</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->created_at->format('F j, Y H:i') }}</dd>
            </div>
            
            <div>
                <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->updated_at->format('F j, Y H:i') }}</dd>
            </div>
        </dl>
    </div>
</div>
@endsection