<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Laravel Cache::flexible()
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800">

<div class="flex h-screen overflow-hidden">
    <div class="relative flex-1 flex-col overflow-y-auto overflow-x-hidden">

        <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-sm items-center px-6 py-4">

            <div class="text-xl">
                Financials Dashboard
            </div>

        </header>

        <main>
            <div class="mx-auto p-6">
                <div class="grid grid-cols-3 gap-4">

                    <div class="rounded-md bg-white px-7 py-6 drop-shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h4 class="text-3xl font-bold text-black">
                                    ${{ number_format($financials['revenue'], 2) }}
                                </h4>
                                <span class="text-sm font-medium">Revenue</span>
                            </div>
                        </div>

                    </div>

                    <div class="rounded-md bg-white px-7 py-6 drop-shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h4 class="text-3xl font-bold text-black">
                                    ${{ number_format($financials['expenses'], 2) }}
                                </h4>
                                <span class="text-sm font-medium">Expenses</span>
                            </div>
                        </div>

                    </div>

                    <div class="rounded-md bg-white px-7 py-6 drop-shadow-sm">

                        <div class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>

                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <h4 class="text-3xl font-bold text-black">
                                    ${{ number_format($financials['profit'], 2) }}
                                </h4>
                                <span class="text-sm font-medium">Profit</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-4 flex items-center justify-center text-white">
                    <div>
                        {{ number_format($runTime, 2) }}ms
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
