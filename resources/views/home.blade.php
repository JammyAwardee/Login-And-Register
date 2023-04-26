<x-app>
    @include('partials._usernav')
    <main class="sm:container mx-5 sm:mx-auto pt-28 mb-20">
        <div class="w-full sm:px-6">
    
            @include('partials._session')
    
            <section class="flex flex-col break-words bg-white border-1 rounded-md shadow-lg">
    
                <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    Dashboard
                </header>
    
                <div class="w-full p-6">
                    <p class="text-gray-700">
                        You are logged in as a User!
                    </p>
                </div>
            </section>
            <!DOCTYPE html>
            <html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            ul, #myUL {
            list-style-type: none;
            }
            #myUL {
            margin: 0;
            padding: 0;
            }
            .caret {
            cursor: pointer;
            -webkit-user-select: none; /* Safari 3.1+ */
            -moz-user-select: none; /* Firefox 2+ */
            -ms-user-select: none; /* IE 10+ */
            user-select: none;
            }
            .caret::before {
            content: "\25B6";
            color: black;
            display: inline-block;
            margin-right: 6px;
            }
            .caret-down::before {
            -ms-transform: rotate(90deg); /* IE 9 */
            -webkit-transform: rotate(90deg); /* Safari */'
            transform: rotate(90deg);
            }
            .nested {
            display: none;
            }
            .active {
            display: block;
            }
            </style>
            </head>
            <body>
            <h2>Territories</h2>
            <p>Here are the list of territories</p>
            <ul id="myUL">
            <li>
            <span class="caret">Central Luzon</span>
            <ul class="nested">
            <li>Bulacan</li>
            <li>Nueva Ecija</li>
            <li>Pampanga</li>
            <li>Tarlac</li>
            </ul>
            </li>
            <li>
            <span class="caret">Metro Manila</span>
            <ul class="nested">
    
        </div>
    </x-app>
    
    