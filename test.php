<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            width: 100%;
            height: 500px;
        }
        .child1 {
            background-color: aliceblue;
            height: 500px;
            width: 50%;
        }
        .child2 {
            background-color: greenyellow;
            width: 50%;
            height: 500px;
        }
        @media (min-width: 320px) and (max-width: 1000px) {
            .child1 {
                height: auto;
                width: 100%;
            }
            .child2 {
                height: auto;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="child1">

        </div>
        <div class="child2">

        </div>
    </div>
</body>
</html>