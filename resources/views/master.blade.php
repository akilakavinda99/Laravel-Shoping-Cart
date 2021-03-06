<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Project</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
</body>
<style>
    .trending-image{
        height:150px;
        display:flex;
        
    }

    .trening-item{
        float:left;
        margin-left:100px;
        align-items:center;
    }

    .head{
        text-align:center;
        margin-bottom:120px;
    }
    .detail-img{
        width:600px
    }
    .pName{
        float:left;
        padding: 50px;
    }
    .wrap{
        margin:30px;
    }
    .Desc{
       padding-left:800px;
       position: absolute;
       margin-top:150px;
      
    }
    .btnn{
        margin-left:50px;
         position: absolute;
       margin-top:150px;
    }
    .cimg{
        height: 400px;
        width: 600px;
    }
.wrap-cart{
    padding-left:400px;
   
}
.details{
    margin-top:70px;
    margin-bottom:70px;
    
}
</html>