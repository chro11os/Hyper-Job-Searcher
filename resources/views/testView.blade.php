<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="flex box-border bg-black text-2xl text-amber-50 backdrop-grayscale p-7 m-7 bg-center content-center text-center">
        <h1> Available Jobs </h1>

    </div>

    <button onclick="fetchData()">Pull Data (console only)</button>
    <script>
        function fetchData() {
            fetch("{{ route('testView.api') }}")
                .then(response => response.json())
                .then(data => {
                    console.log("Fetched Data:", data);
                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });
        }
    </script>

</body>
</html>
