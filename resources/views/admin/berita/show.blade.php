@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">
          
            <div class="post__date">
              <time class="published" datetime="2021-11-27 17:57:23">
              <a href="#!" class="number">27</a>
              <span class="month">November 2021</span>
              <span class="day">Saturday</span>
              </time>
            </div>
            <div class="post__content-info">
              <h1 class="post__title entry-title">{{ $berita->judul}}</h1>
              <div class="post-additional-info">
              <div class="post-thumb">
            <td><img src="{{ $berita->cover }}">
                                              
</td> 
                <span class="post__author author vcard">
                By :
                <a href="#!" class="fn">{{$berita->user->name}}</a>
                </span>
                <span class="category">
                In
                <a href="{{ $berita->kategori->nama_kategori}}">{{ $berita->kategori->nama_kategori}}</a>
                </span> </div>
              </div>
            </div>
            <p style="text-align: justify;"><strong><p>{{ $berita->isi }}</strong> </p>
          </div>
          <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://hot-issue-no-hoax.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('berita.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection