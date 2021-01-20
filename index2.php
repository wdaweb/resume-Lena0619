<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Document</title>
  <style>
  .progress-title{
    font-size: 14px;
    font-weight: bold;
    color: #97a5b6;
    margin-bottom: 5px;
}
.progress{
    height: 20px;
    border: 1px solid #e0e0e0;
    background: transparent;
    border-radius: 50px;
    box-shadow: none;
    padding: 5px 8px;
    overflow: visible;
    margin-bottom: 30px;
}
.progress .progress-bar{
    position: relative;
    -webkit-animation: animate-positive 2s;
    animation: animate-positive 2s;
}
.progress .progress-bar:after{
    content: "";
    width: 1px;
    height: 28px;
    position: absolute;
    right: 0;
    top: -6px;
}
.progress .progress-value{
    font-size: 13px;
    font-weight: bold;
    color: #97a5b6;
    position: absolute;
    bottom: -25px;
    right: 5px;
}
.progress.red .progress-bar:after{
    background: #d9534f;
}
.progress.green .progress-bar:after{
    background: #5cb85c;
}
.progress.blue .progress-bar:after{
    background: #5bc0de;
}
.progress.yellow .progress-bar:after{
    background: #f0ad4e;
}
@-webkit-keyframes animate-positive{
    0% { width: 0%; }
}
@keyframes animate-positive{
    0% { width: 0%; }
}
  </style>
</head>
<body>

<!-- <div class="container m-5" style="width: 40%;">
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
</div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="progress-title">HTML5</h3>
            <div class="progress r">
                <div class="progress-bar" style="width:85%; background:#d9534f;">
                    <div class="progress-value">85%</div>
                </div>
            </div>
 
            <h3 class="progress-title">CSS3</h3>
            <div class="progress green">
                <div class="progress-bar" style="width:75%; background:#5cb85c;">
                    <div class="progress-value">75%</div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
</body>
</html>