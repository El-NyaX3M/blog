<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto px-4">
        <h1 class="color-blue">Página principal</h1>
    
        
        <x-alert type="danger">
            <x-slot name="title">
                ¡ALERTA!
            </x-slot>
            Me la pelan 
        </x-alert>
    </div>
    
</body>
</html>
