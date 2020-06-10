<?php include 'firstload.php'?>
<link rel="stylesheet" href="css/styles.css">
<style type="text/css">
	html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url(img/slide1.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(2) {
    background: url(img/slide2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(3) {
    background: url(img/slide3.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: fixed;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  margin-top: 20px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
</style>
<script type="text/javascript">
$('.carousel').carousel();
</script>

<body>

<div class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>

<div class="title">
	  <strong>WELCOME TO THE</strong>
	  <br><br>
  <h2 style="color: green">Online Theatre Ticket Sales and Reservation System</h2>
  <br>
  <p>as</p>
  <h1>TTSRS</h1>
  <br><br><br><br><br><br><br><br>
  <strong>You can easily make a reservation for any theatre show.</strong>
  <br>
  <strong>Click <a href="biletal.php">HERE</a> to make a reservation</strong>
</div>

</body>



<?php include 'footer.php'?>