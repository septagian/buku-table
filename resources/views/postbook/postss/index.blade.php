@extends('layouts.post')
@section('post')
<div class="container">
    <div class="row gx-5">
        <div class="releases hothome bg-dark text-white"><h3>Popular Today</h3></div>
        <div class="col-2 p-4 ms-5">
            <div class="card mb-3" style="width: 14rem;">
                <img src="https://i0.wp.com/oploverz.asia/wp-content/uploads/2021/01/Screenshot_1-1.jpg?resize=247,350">
                <div class="card-body">
                  <h5 class="card-title">Boruto</h5>
                  <p class="card-text">Some quick example text to build .</p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">read more..</a>
                </div>
              </div>
        </div>
        <div class="col-2 p-4 ms-5">
            <div class="card" style="width: 14rem;">
                <img src="https://i3.wp.com/oploverz.asia/wp-content/uploads/2022/04/SPY-x-FAMILY.jpg?resize=247,350">
                <div class="card-body">
                  <h5 class="card-title">Spy x Family</h5>
                  <p class="card-text">Some quick plebulk of the card's cot.</p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">read more...</a>
                </div>
              </div>
        </div>
        <div class="col-2 p-4 ms-5">
            <div class="card" style="width: 14rem;">
                <img src="https://i0.wp.com/oploverz.asia/wp-content/uploads/2020/03/Screenshot_3.jpg?resize=247,350">
                <div class="card-body">
                  <h5 class="card-title">One Piece</h5>
                  <p class="card-text">Some quick example texthe card's content.</p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">read more..</a>
                </div>
              </div>
        </div>
    </div>
    <h1>ANIME</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="https://i3.wp.com/oploverz.asia/wp-content/uploads/2022/04/SPY-x-FAMILY.jpg?resize=141,200" class="ts-post-image wp-post-image attachment-medium_large size-medium_large" loading="lazy" itemprop="image" title="Spy x Family Episode 03 Subtitle Indonesia" width="141" height="200">
                            </div>
                            <div class="col-sm-10">
                                <h3>{{ $buku[0]->name }}</h3>
                                <span><b>Status:</b> Ongoing </span>
                                <br>
                                <span><b>Studio:</b> adaaja  </span>
                                <br>
                                <span><b>Genre:</b> action</span>
                                <h5>sinopsis</h5>
                                <p>{{ $buku[0]->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="https://i1.wp.com/oploverz.asia/wp-content/uploads/2022/04/Kaguya-sama-wa-Kokurasetai-Ultra-Romantic--e1649396735295.jpg?resize=141,200" class="ts-post-image wp-post-image attachment-medium_large size-medium_large" loading="lazy" itemprop="image" title="Kaguya-sama wa Kokurasetai S3 Episode 03 Subtitle Indonesia" width="141" height="200">
                            </div>
                            <div class="col-sm-10">
                                <h3>{{ $buku[1]->name }}</h3>
                                <span><b>Status:</b> Ongoing </span>
                                <br>
                                <span><b>Studio:</b> adaaja  </span>
                                <br>
                                <span><b>Genre:</b> action</span>
                                <h5>sinopsis</h5>
                                <p>{{ $buku[1]->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection