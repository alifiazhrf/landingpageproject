<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
<div class="header-pad"></div>

<div id="main">

<div class="top-content">
<div id="slider" style="width:100%">
<div class="swiper-wrapper">
<?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 10) as $row ) {
                ?>
<div class="swiper-slide" style="background-image: url(<?php echo $row['backdrop_path'];?>);">
<a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="slide-link" title="<?php echo $row['title'];?>"></a>
<span class="slide-caption">
<h2><?php echo $row['title'];?></h2>
<p class="sc-desc"><?php echo short($row['overview']);?></p>
<div class="slide-caption-info">
<div class="block">
<strong>Popularity:</strong>
<?php echo $row['popularity'];?></div>
<div class="block"><strong>Vote:</strong> <?php echo $row['vote_count'];?> Like</div>
<div class="block"><strong>Release:</strong> <?php echo $row['release_date'];?></div>
<div class="block"><strong>IMDb:</strong> <?php echo $row['vote_average'];?></div>
</div>
<a href="<?php echo seo_movie($row['id'],$row['title']);?>">
<div class="btn btn-successful mt20">Watch Now</div>
</a>
</span>
</div>
<?php 
                }
        endif; 
        ?>
</div>
<div class="swiper-pagination"></div>
<div class="clearfix"></div>
</div>

<div class="clearfix"></div>
</div>
<div class="container">

<div class="social-home">
<div class="sh-like">
<div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
</div>
<div class="addthis_native_toolbox"></div>
<span class="sh-text">Like and Share our website to support us.</span>
<a class="twitter-follow-button" href="http://twitter.com/<?php echo config('sitename') ?>">Follow @<?php echo config('sitename') ?></a>
<div class="clearfix"></div>
</div>

<div class="main-content">
<div class="bg-home"> <h1>Watch Free Movies Online</h1> <i class="fa fa-fire" aria-hidden="true"></i> [ <?php echo config('sitename') ?> ] -Best site to watch free movies online.</div>


<div class="movies-list-wrap mlw-topview mt20">
<div class="ml-title">
<span class="pull-left"><i class="fa fa-youtube-play" aria-hidden="true"></i> Movies</span>
<a href="<?php echo view_page( 'movies-nowplay' );?>" class="pull-right cat-more">View more <i class="fa fa-align-right" aria-hidden="true"></i></a>
<ul role="tablist" class="nav nav-tabs">
<li class="active"><a data-toggle="tab" role="tab" href="#tab-recommended" aria-expanded="false"><i class="fa fa-thumbs-o-up"></i> Recommended</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-mostwatched_today" aria-expanded="false"><i class="fa fa-calendar-o" aria-hidden="true"></i> Popular Movies</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-rating" aria-expanded="false"><i class="fa fa-calendar" aria-hidden="true"></i> Top Rating</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-imdb" aria-expanded="false"><i class="fa fa-star-o" aria-hidden="true"></i> Upcoming Movies</a></li>
</ul>
</div>
<div class="tab-content">
<div id="tab-recommended" class="movies-list movies-list-full tab-pane in fade active">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>

<div id="tab-mostwatched_today" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_popular_',$page, 'getPopularMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
<div id="tab-rating" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_toprated_',$page, 'getTopRatedMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
<div id="tab-imdb" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
</div>
</div>

<div class="movies-list-wrap mlw-topview mt20">
<div class="ml-title">
<span class="pull-left"><i class="fa fa-youtube-play" aria-hidden="true"></i> TV Series</span>
<a href="<?php echo view_page( 'tv-ontheair' );?>" class="pull-right cat-more">View more <i class="fa fa-align-right" aria-hidden="true"></i></a>
<ul role="tablist" class="nav nav-tabs">
<li class="active"><a data-toggle="tab" role="tab" href="#tab-recommend" aria-expanded="false"><i class="fa fa-thumbs-o-up"></i> Recommended</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-airing_today" aria-expanded="false"><i class="fa fa-calendar-o" aria-hidden="true"></i> Airing Today</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-onair" aria-expanded="false"><i class="fa fa-calendar" aria-hidden="true"></i> On The Air</a></li>
<li><a data-toggle="tab" role="tab" href="#tab-popular" aria-expanded="false"><i class="fa fa-star-o" aria-hidden="true"></i> Popular</a></li>
</ul>
</div>
<div class="tab-content">
<div id="tab-recommend" class="movies-list movies-list-full tab-pane in fade active">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 8) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 8) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>

<div id="tab-airing_today" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
<div id="tab-onair" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
<div id="tab-popular" class="movies-list movies-list-full tab-pane in fade">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php include('footer.php'); ?>