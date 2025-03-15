<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased">


   <!-- component -->
<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
        </a>
    </header>

    <main class="mt-8">

  <div>

  </div>

        <h2 class="mt-6 text-gray-700 dark:text-gray-200">{{ $contact['full_name'] }},</h2>

       <p>Thank you for reaching out to us! We have received your message and appreciate you taking the time to contact us.</p>

        <div class="mt-2 text-gray-600 dark:text-gray-300">
            <ul>
 <li><strong>Name:</strong> {{ $contact['full_name'] }}</li>
        <li><strong>Email:</strong> {{ $contact['email'] }}</li>
        <li><strong>Message:</strong> {{ $contact['message'] }}</li>
    </ul>
        </div>

            <p>Our team is currently reviewing your inquiry, and we will get back to you as soon as possible. Please expect a response within 1-2 business days.</p>

    <p>If you have any additional information or questions in the meantime, feel free to reply to this email.</p>

    <p>Thank you again for choosing us. We look forward to assisting you!</p>

    <p>Best regards,</p>
    <p><strong>{{ config('app.name') }}</strong></p>
    <p><em>Your Trusted Partner</em></p>
    </main>

</section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
</body>

<style>

</style>

</html>
