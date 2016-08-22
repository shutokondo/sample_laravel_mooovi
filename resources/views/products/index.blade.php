@extends('review_site')

@section('content')
  <div id="main_cnt_wrapper">
    <div id="yjContentsBody">
      <div class="yjContainer">
        <span class="yjGuid"><a id="yjContentsStart" name="yjContentsStart"></a><img alt="ここから本文です" height="1" src="http://i.yimg.jp/yui/jp/tmpl/1.1.0/audionav.gif" width="1"></span>
        <div id="yjMain">
          <article class="section">
            <div class="container">
              <header class="header header--section">
                <h2 class="text-middle">
                  <i class="icon-movie color-gray-light"></i>新着作品
                </h2>
              </header>
              <ul class="thumbnails thumbnail--movies row grid4 js-lazy-load-images js-my-check-stats" id="list-module">
                <li class="col">
                  <a href="#"><div class="thumbnail__figure" style="background-image:url('http://image.eiga.k-img.com/images/movie/81541/poster2/200.jpg?1436408098')"></div></a>
                  <div class="thumbnail__caption">
                    <h3 class="text-xsmall text-overflow" title="">
                      タイトル
                    </h3>
                    <p class="text-small">
                      <span class="rating-star">
                        <i class="star-actived rate-[ここに評価を表示]0"></i>
                      </span>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </article>
        </div>
        <div id="yjSub">
@endsection