@extends('template')
@section('title', 'Exads Code Test')

@section('content')

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" stroke-width="2" class="w-8 h-8 text-gray-500">
                    <path d="M320 448c0 17.67-14.33 32-32 32H32c-13.08 0-24.83-7.953-29.7-20.09c-4.859-12.12-1.859-26 7.594-35.03l193.6-185.1c31.36-30.17 33.95-80 5.812-113.4c-14.91-17.69-35.86-28.12-58.97-29.38C127.4 95.83 105.3 103.9 88.53 119.9L53.52 151.7c-13.08 11.91-33.33 10.89-45.2-2.172C-3.563 136.5-2.594 116.2 10.48 104.3l34.45-31.3c28.67-27.34 68.39-42.11 108.9-39.88c40.33 2.188 78.39 21.16 104.4 52.03c49.8 59.05 45.2 147.3-10.45 200.8l-136 130H288C305.7 416 320 430.3 320 448z" />
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <a href="/prime-numbers" class="underline text-gray-900 dark:text-white">Prime Numbers</a>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Write a PHP script that prints all integer values from 1 to 100.
                    Beside each number, print the numbers it is a multiple of (inside brackets and comma-separated). If only multiple of itself then print “[PRIME]”.
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" stroke-width="2" class="w-8 h-8 text-gray-500">
                    <path d="M381.5 435.7l-160-384C216.6 39.78 204.9 32.01 192 32.01S167.4 39.78 162.5 51.7l-160 384c-6.797 16.31 .9062 35.05 17.22 41.84c16.38 6.828 35.08-.9219 41.84-17.22l31.8-76.31h197.3l31.8 76.31c5.109 12.28 17.02 19.7 29.55 19.7c4.094 0 8.266-.7969 12.3-2.484C380.6 470.7 388.3 452 381.5 435.7zM119.1 320L192 147.2l72 172.8H119.1z" />
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <a href="/ascii-array" class="underline text-gray-900 dark:text-white">ASCII Array</a>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Write a PHP script to generate a random array containing all the ASCII characters from comma (“,”) to pipe (“|”). Then randomly remove and discard an arbitrary element from this newly generated array.
                    Write the code to efficiently determine the missing character.
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" stroke-width="2" class="w-8 h-8 text-gray-500">
                    <path d="M512 448H127.1C110.3 448 96 462.3 96 479.1S110.3 512 127.1 512h384C529.7 512 544 497.7 544 480S529.7 448 512 448zM592 0h-544C21.5 0 0 21.5 0 48v320C0 394.5 21.5 416 48 416h544c26.5 0 48-21.5 48-48v-320C640 21.5 618.5 0 592 0zM576 352H64v-288h512V352z" />
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <a href="/tv-series" class="underline text-gray-900 dark:text-white">TV Series</a>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Using OOP, write a code that tells when the next TV Series will air based on the current time-date or an inputted time-date, and that can be optionally filtered by TV Series title.
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="2" class="w-8 h-8 text-gray-500">
                    <path d="M200 32h-176C10.75 32 0 42.74 0 56C0 69.25 10.75 80 24 80H32v320C32 444.1 67.88 480 112 480S192 444.1 192 400v-320h8C213.3 80 224 69.25 224 56C224 42.74 213.3 32 200 32zM144 256h-64V80h64V256zM488 32h-176C298.7 32 288 42.74 288 56c0 13.25 10.75 24 24 24H320v320c0 44.13 35.88 80 80 80s80-35.88 80-80v-320h8C501.3 80 512 69.25 512 56C512 42.74 501.3 32 488 32zM432 256h-64V80h64V256z" />
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <a href="/ab-testing" class="underline text-gray-900 dark:text-white">A/B Testing</a>
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Exads would like to A/B test some promotional designs to see which provides the best conversion rate.
                    Write a snippet of PHP code that redirects end users to the different designs based on the data provided by this library: <a href="https://packagist.org/packages/exads/ab-test-data">packagist.org/exads/ab-test-data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection