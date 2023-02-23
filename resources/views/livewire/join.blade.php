<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
        <div>
            <form wire:submit.prevent="join">
                    {{ $this->form }}
                <button type="submit">Join with Us</button>
            </form>
        </div>
        </div>
    </body>
</html>
