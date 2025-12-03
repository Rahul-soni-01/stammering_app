<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Dashboard Data (Sample + Useful Metrics) -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Dashboard Metrics</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-blue-800">Total Users</h4>
                            <p class="text-2xl font-bold text-blue-900">1,248</p>
                            <p class="text-xs text-blue-600">All registered users</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-green-800">Active Users (This Week)</h4>
                            <p class="text-2xl font-bold text-green-900">318</p>
                            <p class="text-xs text-green-600">Logged in at least once</p>
                        </div>
                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-yellow-800">New Signups (This Month)</h4>
                            <p class="text-2xl font-bold text-yellow-900">92</p>
                            <p class="text-xs text-yellow-600">Count of new users</p>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-purple-800">Total Sessions</h4>
                            <p class="text-2xl font-bold text-purple-900">8,412</p>
                            <p class="text-xs text-purple-600">Track user activity</p>
                        </div>
                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-red-800">Success Rate (Exercises Completed)</h4>
                            <p class="text-2xl font-bold text-red-900">74%</p>
                            <p class="text-xs text-red-600">Speech practice completion rate</p>
                        </div>
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-indigo-800">Total Stammering Exercises</h4>
                            <p class="text-2xl font-bold text-indigo-900">356</p>
                            <p class="text-xs text-indigo-600">Lessons/training tasks</p>
                        </div>
                        <div class="bg-teal-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-teal-800">Resolved Issues / Queries</h4>
                            <p class="text-2xl font-bold text-teal-900">126</p>
                            <p class="text-xs text-teal-600">For support/admin dashboard</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Data -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Charts</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Weekly User Activity Chart (Line Chart) -->
                        <div>
                            <h4 class="text-md font-medium mb-2">Weekly User Activity</h4>
                            <canvas id="weeklyUserActivityChart" width="400" height="200"></canvas>
                        </div>
                        <!-- Monthly New Users (Bar Chart) -->
                        <div>
                            <h4 class="text-md font-medium mb-2">Monthly New Users</h4>
                            <canvas id="monthlyNewUsersChart" width="400" height="200"></canvas>
                        </div>
                        <!-- Stammering Exercise Completion Rate (Pie Chart) -->
                        <div>
                            <h4 class="text-md font-medium mb-2">Exercise Completion Rate</h4>
                            <canvas id="exerciseCompletionChart" width="400" height="200"></canvas>
                        </div>
                        <!-- Most Used Exercise Types (Horizontal Bar) -->
                        <div>
                            <h4 class="text-md font-medium mb-2">Most Used Exercise Types</h4>
                            <canvas id="mostUsedExercisesChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent User Activity (Activity Feed) -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Recent User Activity</h3>
                    <ul class="space-y-2">
                        <li>• Rahul completed "Breathing Technique Level 2"</li>
                        <li>• Neha created a new session</li>
                        <li>• Mohit updated profile</li>
                        <li>• Asha completed "Slow Speaking Level 1"</li>
                        <li>• User #1298 signed up</li>
                        <li>• System: Daily stats updated</li>
                    </ul>
                </div>
            </div>

            <!-- Quick Action Buttons / Shortcuts -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">➕ Add New User</a>
                        <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">📊 View Full Analytics</a>
                        <a href="#" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">🎤 Add New Exercise</a>
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">📁 Manage Lessons</a>
                        <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">🧑‍⚕️ Connect With Therapist</a>
                        <a href="#" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">📤 Export Report (PDF/CSV)</a>
                        <a href="#" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">🛠️ Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample data for charts - replace with actual data from backend
        const weeklyUserActivityData = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Active Users',
                data: [120, 150, 180, 200, 220, 190, 160],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        const monthlyNewUsersData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'New Users',
                data: [50, 60, 70, 80, 90, 100],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const exerciseCompletionData = {
            labels: ['Completed', 'Not Completed'],
            datasets: [{
                data: [74, 26],
                backgroundColor: ['#4CAF50', '#F44336']
            }]
        };

        const mostUsedExercisesData = {
            labels: ['Breathing', 'Slow Speaking', 'Tongue Twisters', 'Reading Aloud'],
            datasets: [{
                label: 'Usage Count',
                data: [150, 120, 100, 80],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        // Initialize charts
        new Chart(document.getElementById('weeklyUserActivityChart'), {
            type: 'line',
            data: weeklyUserActivityData
        });

        new Chart(document.getElementById('monthlyNewUsersChart'), {
            type: 'bar',
            data: monthlyNewUsersData
        });

        new Chart(document.getElementById('exerciseCompletionChart'), {
            type: 'pie',
            data: exerciseCompletionData
        });

        new Chart(document.getElementById('mostUsedExercisesChart'), {
            type: 'bar',
            data: mostUsedExercisesData,
            options: {
                indexAxis: 'y'
            }
        });
    </script>
</x-admin-layout>
