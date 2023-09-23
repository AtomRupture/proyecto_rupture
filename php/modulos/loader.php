<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .loader_bg{
    position: fixed;
    z-index: 9999;
    background: black;
    width: 100%;
    height: 100%;
    }
    .loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(49vw - 75px);
    }
    .loader:before, .loader:after{
    content: '';
    border: 1em solid #E40b0b;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
    }
    .loader:before{
    animation-delay: .5s;
    }
    @keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
    }


    </style>
<body>
      
<div class="loader_bg">
    <div class="loader"></div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
</html>