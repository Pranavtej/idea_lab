<style>
        .banner {
  position: relative;
  margin-top: 135px;
  overflow: hidden;
  background-image: -webkit-gradient(linear, left top, right top, from(#e9f3fa), to(#fbfbfb));
  background-image: linear-gradient(90deg, #e9f3fa 0%, #fbfbfb 100%);
  padding: 100px 0 40px;
}

.banner .banner-content {
  position: relative;
}

.banner .banner-content .banner-image {
  position: relative;
  padding: 0 40px;
}

.banner .banner-content .banner-image img {
  position: relative;
  -webkit-animation: bgshape 4s infinite;
          animation: bgshape 4s infinite;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
}


.banner-main {
  position: relative;
  padding-top: 135px;
  overflow: hidden;
}

.banner-main .h2-slider-list {
  position: relative;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  padding: 150px 0;
  overflow: hidden;
  z-index: 0;
}

.banner-main .h2-slider-list .slide-contain {
  position: relative;
  color: #fff;
  width: 60%;
  margin: auto;
  text-align: center;
  font-size: 22px;
  z-index: 1;
}

@media (max-width: 991px) {
  .banner-main {
    padding-top: 77px;
  }
  .banner-main .h2-slider-list .slide-contain {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .browse-main .browse-list {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 100%;
            flex: 1 1 100%;
  }
  .banner-main .h2-slider-list {
    text-align: center;
  }
  .banner-main .h2-slider-list .slide-contain h1 {
    font-size: 38px;
  }
  .banner-main .h2-slider-list .slide-contain p {
    font-size: 18px;
  }
  .banner-main .h2-slider-list .slide-contain .btn {
    padding: 21px 21px 19px;
  }
  .banner h1 {
    font-size: 38px;
  }
}

.svg-img-rotate {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.banner-slider .main-slide-image {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-size: cover;
  background-position: center;
  -webkit-transform-origin: 0;
          transform-origin: 0;
  -webkit-animation: kbrns_zoomOutIn 35s linear 0s infinite alternate;
          animation: kbrns_zoomOutIn 35s linear 0s infinite alternate;
}


.overlay-banner {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #204066;
  -webkit-transition: all ease-in-out 0.3s;
  transition: all ease-in-out 0.3s;
  opacity: 0.8;
}

@-webkit-keyframes bgshape {
  0% {
    top: 0px;
  }
  25% {
    top: 10px;
  }
  50% {
    top: 30px;
  }
  75% {
    top: 10px;
  }
  100% {
    top: 0px;
  }
}

@keyframes bgshape {
  0% {
    top: 0px;
  }
  25% {
    top: 10px;
  }
  50% {
    top: 30px;
  }
  75% {
    top: 10px;
  }
  100% {
    top: 0px;
  }
}

@media (max-width: 1200px) {
  .banner {
    padding-bottom: 60px;
  }
  .banner::before {
    right: -200px;
    width: 100%;
  }
}

@media (max-width: 991px) {
  .main_header_area .topbar-wrap {
    display: none;
  }
  .banner {
    margin-top: 77px;
    overflow: hidden;
  }
  .banner:after {
    background-position: center;
  }
  .banner .banner-ct-wrap {
    padding: 0 0 30px;
    text-align: center;
  }
}


@media (max-width: 639px) {
  .banner .slider .swiper-container-vertical > .swiper-pagination-bullets {
    display: none;
  }
}
        </style>

 			
