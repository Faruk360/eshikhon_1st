<?php include('header.php') ?>
    <script>
        window.onload = function(){
            document.getElementById("container").style.display = "none";
            document.getElementById("content").style.display = "block";
        }
        $(window).load(function(){
            $('#loading').fadeOut();
            $('#loading-img').delay(150).fadeOut('slow');
        }),4000;
    </script>
<style>
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-size: 20px;
    box-sizing: border-box;
}
#container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #576574;
}
#loading{
    width: 200px;
    height: 200px;
    position: relative;
    /* background: #fff; */
    border-radius: 50%;
    border-top: 10px solid #ff6b6b;
    animation: animate 2s linear infinite;
}
@keyframes animate {
    to{
        transform: rotate(360deg);
    }
}
#loading::after{
    transform: rotate(120deg);
    border-top: 10px solid #feca57;
}
#loading::before{
    transform: rotate(240deg);
    border-top: 10px solid #48dbfb;
}
#loading::after,
#loading::before{
    content: '';
    top: -10px;
    left: 0;
    width: 200px;
    height: 200px;
    position: absolute;
    /* background: #fff; */
    border-radius: 50%;
}
#loading span{
    position: absolute;
    width: 200px;
    height: 200px;
    text-align: center;
    line-height: 200px;
    color: #fff;
    animation: a2 2s linear infinite;
}
@keyframes a2 {
    to{
        transform: rotate(-360deg);
    }
}
#content{
    display: none;
}
    </style>
</head>
<body>
    <div id="container">
        <div id="loading">
            <span id="loading-img">Loading...</span>
        </div>
    </div>
    <div id="content">
        
    </div>
</body>
</html>