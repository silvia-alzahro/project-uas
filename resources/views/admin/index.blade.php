

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portal Berita | Hot Issue No Hoax</title>
    </head>
    <body>
      <center><h1>Hot Issue No Hoax</h1></center>
<hr>
    
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-md-9">
              <div class="panel panel-default">
               <div class="panel-body">
                  <h3>Hari Guru</h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> 27 november, 2021 </li>
                            <li><i class="fa fa-eye"></i>21k</li>

                            <li><i class="fa fa-user"></i> Posting by
                            <a href= "">Putri Perdana</a>
                            <li class="pull-right">kategori : Education</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object " src = "{{asset('assets/assets/img/hariguru.jpg')}}" width="100%" height="200px" >
                       </a>
                       <div class = "media-body">
                       <p>Hari guru mewakili sebuah kepedulian, 
                       pemahaman dan apresiasi yang ditampilkan demi peran vital seorang guru, 
                       yaitu mengajarkan ilmu pengetahuan dan membangun generasi. 
                       Hari guru adalah hari dimana kita memperingati jasa yang selama ini telah
                        diberikan oleh sang pahlawan tanpa tanda jasa, siapa pahlawan tanpa tanda jasa itu?
                         Siapa lagi melainkan seorang guru sosok yang sangat berilmu.</p>
                       </div>
                        <p style="text-align:right;">
                            <a href="http://localhost:8000/user/berita/1">
                                <button class="btn btn-primary">Read More</button>
                            </a>
                        </p>
                    </div>
                    <hr>
                    <h3>Tip dan Trik dalam memilih laptop untuk penyuka game</h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> desember 3, 2021 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> Posting by Silvia alzahro</li>
                            <li class="pull-right">Category : Sport</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object" src = "{{asset('assets/assets/img/lap.jpg')}}" width="300px" height="200px">
                       </a>
                       
                       <div class = "media-body">
                          <p>Permintaan laptop gaming semakin meningkat karena banyaknya turnamen game yang diadakan secara nasional maupun internasional.  Laptop gaming hadir dengan berbagai varian yang bisa Anda pilih. Namun, pastikan Anda memperhatikan detail setiap komponen laptop agar menemukan mana yang paling tepat dan sesuai dengan kebutuhan. Untuk itu, Anda perlu menyimak  tips memilih laptop gaming yang tepat. 

                       </div>
                       <a href="http://localhost:8000/user/berita/2">
                        <p style="text-align:right;">
                            <button class="btn btn-primary">Read More</button>
                        </p>
                    </div>
               </div>
            </div>
         </div>  
        <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading"><h4 class="text-center">Latest News</h4></div>
               <div class="panel-body">
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>                
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4>
                            <a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
                        </h4>
                    </div>
                    
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>                           
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 5, 2016</li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4 class="entry-title">
                            <a href="">Tip dan Trik dalam memilih laptop untuk penyuka game</a>
                        </h4>
                    </div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>

</body>
</html>
    </body>
</html>
@endsection
