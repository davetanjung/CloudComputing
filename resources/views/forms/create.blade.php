<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Load Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a202c; 
        }
        /* Custom styling for date input icon color */
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <!-- Container Card -->
    <div class="w-full max-w-lg bg-gray-800 p-8 md:p-10 rounded-xl shadow-2xl border border-blue-600/30">

        <h1 class="text-3xl font-extrabold text-white text-center mb-6 tracking-wide">
            CLOUD COMPUTING <span class="text-blue-400">REGISTRATION</span>
        </h1>
        <p class="text-center text-gray-400 mb-8">
            Create your account to proceed with Cloud Computing enrollment.
        </p>

        <!-- Form Start -->
        <!-- Note: Keeping the original route 'send-email' for compatibility, but it should ideally point to a registration controller. -->
        <form method="POST" action="{{ route('send-email') }}" class="space-y-6">
            @csrf

            <!-- Full Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required 
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                       placeholder="Your full name">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required 
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                       placeholder="you@example.com">
            </div>
            
            <!-- Birth Date Field -->
            <div>
                <label for="birth_date" class="block text-sm font-medium text-gray-300 mb-1">Birth Date</label>
                <input type="date" id="birth_date" name="birth_date" required 
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500 transition duration-150 appearance-none"
                       max="{{ date('Y-m-d') }}" title="Select your birth date">
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                <input type="password" id="password" name="password" required 
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                       placeholder="Min 8 characters">
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                       placeholder="Re-enter password">
            </div>


            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full py-3 mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg transition duration-300 transform hover:scale-[1.01] focus:outline-none focus:ring-4 focus:ring-blue-500/50">
                Register Account
            </button>

        </form>
        <!-- Form End -->

    </div>
    
</body>
</html>
