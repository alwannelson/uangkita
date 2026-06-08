@extends('layouts.dashboard-layout')

@section('content')
    <div class="max-w-7xl mx-auto">

        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl md:text-3xl font-bold text-text-main">
                Welcome back, <span style="color: var(--primary);">{{ Auth::user()->name }}</span>! 👋
            </h1>
            <p class="text-gray-500 mt-1">Here's what's happening with your savings groups today.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Groups</p>
                        <p class="text-2xl font-bold text-gray-800">0</p>
                    </div>
                    <div class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-folder text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Savings</p>
                        <p class="text-2xl font-bold text-gray-800">Rp 0</p>
                    </div>
                    <div class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-money-bill-wave text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Members</p>
                        <p class="text-2xl font-bold text-gray-800">0</p>
                    </div>
                    <div class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Active Groups</p>
                        <p class="text-2xl font-bold text-gray-800">0</p>
                    </div>
                    <div class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-chart-line text-primary"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity / Groups List -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Your Saving Groups</h2>
            </div>
            <div class="p-6 text-center text-gray-500">
                <i class="fas fa-folder-open text-4xl mb-3 opacity-50"></i>
                <p>No groups yet. Create your first saving group!</p>
                <a href="#"
                    class="inline-block mt-3 px-4 py-2 rounded-lg text-white text-sm font-medium transition-all hover:scale-105"
                    style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                    <i class="fas fa-plus mr-1"></i> Create Group
                </a>
            </div>
        </div>

    </div>
@endsection
