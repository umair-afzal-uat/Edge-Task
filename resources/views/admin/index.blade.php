<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    </link>
    <title>Edge</title>

</head>

<body>
    <div class="waviy">
        <span style="--i:1">E</span>
        <span style="--i:2">D</span>
        <span style="--i:3">G</span>
        <span style="--i:4">E</span>
    </div>
    <header>
        <div class="main-nav">
            <nav>
                <div class="main-logo">
                    <h1>EDGE</h1>
                </div>
                <div class="log-btns">
                    <a href="/logout">Log out</a>
                </div>
            </nav>
        </div>
    </header>
    <main></main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.waviy').remove();
            }, 2000); // 3000 milliseconds = 3 seconds
        });
    </script>
</body>

</html>