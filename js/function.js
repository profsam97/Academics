function tk(){
    api_key ='031e9be03fffd30038ed00ef72a8979d';
    return api_key;
}
function ok(){
    api_key ='f123e134';
    return api_key;
}

  function get_live_search(value){
    var values = value;    
    if(values != ''){
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movies = response.data.Search;
            let output = '';
           movies = movies.slice(0,5);
            $.each(movies, (index, movie)=>{
                var  dots = (movie.Title.length > 35)?'...':'';
                var movs =   movie.Title.match(/.{1,22}/);
               var movi = movs[0] + dots;
                output += `
                <div class='col-md-6 col-lg-4 col-sm-6 col-6 d-flex d-row opac whit p-1 m-0' onclick="movieSelected('${movie.imdbID}','${movie.Type}','${movie.Title}' )">
                    <img src='${movie.Poster}'  alt=''  class='img-fluid  justify-content-start h-75   w-50 h-50   max p-1 mr-2 '> 
                    <div class='ca mt-0 m-0 h-50 '>
                           <a onclick="movieSelected('${movie.imdbID}','${movie.Type}','${movie.Title}' )" href='#'  class='text-dark'>
                           <div class='card-body p-0 m-0'>
                                <div class='card-title p-0 mb-0 m-0 mt-0'>
                                 <h5 class='m-0 mt-0 p-0 text-light'>${movi}<br class='d-sm-block d-md-none'><span class='badge  ' style='background-color: #ffe799; color: #593d00;'></span></h5>
                                 <p class='m-0 text-light' >Type: ${movie.Type}</p> 
                                 <p class='text-muted m-0 p-0 d-md-none d-sm-block '>view more </p>
                                </div>
                                    <div class='card-text mt-0 m-0'>
                                    <p class='m-0'></p>
                                    <small class='text-muted m-0'> ${movie.Year}</small>
                                </div>
                                </a> 
                        </div>
                        </div>
                </div>
               
                `;
            })
            output += `
            <div class='borders-top mx-2'></div>";
            `;
            if(response.data.Search.length > 5)
            output +=`
           "<a onclick="moviesSelected('${values}')"  class='btn btn-light btn-block p-2 m-2'>About ${response.data.Search.length} results; Click here to see all </a>";`
            
            $('.search_res').html(output);
        })
    
        .catch((err)=>{
            // console.log(err);
        })
    }else{
        $('.search_res').html('');

    }
// $.ajax({
//     url:"live_search_result.php",
//     type: "POST",
//     data: {value: value},
//     cache: false,
//     success: function(response){
//         console.log(response);
//         $('.search_res').html(response);
//     }
// })
}
// window.onload = function() {
//     if(!window.location.hash) {
//         window.location = window.location + '#loaded';
//         window.location.reload();
//     }
// }downloadSelected
function movieSelected(id,type,title){
    sessionStorage.setItem('movieId',id);
    sessionStorage.setItem('movieSeries',type)
    sessionStorage.setItem('MovieTitle',title);
    var type = sessionStorage.getItem('MovieTitle');
    var type = sessionStorage.getItem('movieSeries');
    // console.log(type)
    if(type == 'movie' || type == 'series'){
        window.location.href = 'movie.php';
       
    }else{
        window.location.href = 'unsupportedRequest.php';
        var un = 'notSupported';
        sessionStorage.setItem('notSup',un);
    }
    return false;
}
function unsupport(){
    var unsupport = sessionStorage.getItem('notSup');
    if(unsupport == null || unsupport == ''){
        window.location.href  = 'https://movillla.com/index.php';
    }
}
function downloadSelected(id,type,title){
    sessionStorage.setItem('movieId',id);
    sessionStorage.setItem('movieSeries',type)
    sessionStorage.setItem('MovieTitle',title);
    // var type = sessionStorage.getItem('MovieTitle');
    // var type = sessionStorage.getItem('movieSeries');
    // console.log(type)
    window.location.href = 'movie.php#downloadmovie';
    return false;
}

function movieSelecte(id, type){
    sessionStorage.setItem('movieId',id);
    sessionStorage.setItem('movieSeries',type);
    // console.log(id);
    window.location.href = '../movie.php';
    return false;
}
function upcoming(){
    window.location.href = 'https://movillla.com/upcoming.php';
    return false;
}
function popularCasts(){
    window.location.href = 'popularCasts.php';
    return false;
}
function popularMovies(){
    window.location.href = 'https://movillla.com/popularMovies.php';
    return false;
}
function topRated(){
    window.location.href = 'https://movillla.com/topRated.php';
    return false;
}
function trending(){
    window.location.href = 'https://movillla.com/trending.php';
    return false;
}
function bestYear(){
    window.location.href = 'https://movillla.com/bestYear.php';
    return false;
}
function moviesSelected(values){
    sessionStorage.setItem('movie',values);
    // console.log('ys');
    window.location = 'search_results.php';
    return false;
}
function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
 }
 function tmdbSelected(id, ty){
    var imdb_id;     
    var title;
    var type;
    if(ty == undefined){
        type = 'movie'; 
    }
    else if(ty == 'movie'){
        type = 'movie'; 
    }
     else if(ty == 'tv'){
        type = 'series'; 
    }
    if(type == 'movie'){
    $.ajax({
            async: false,
            url: 'https://api.themoviedb.org/3/movie/'+id+'?api_key='+tk()+'&language=en-US',
            success: function(response){
                const element  = response.imdb_id;
                const tits  = response.original_title;
                imdb_id = element;
                title = tits;
            }
        })
    }else{
        $.ajax({
            async: false,
            url: 'https://api.themoviedb.org/3/tv/'+id+'/external_ids?api_key='+tk()+'&language=en-US',
            success: function(response){
                const element  = response.imdb_id;
                // const tits  = response.original_title;
                imdb_id = element;
                // title = tits;
            }
        })
        $.ajax({
            async: false,
            url: 'http://www.omdbapi.com/?i='+imdb_id+'&apikey='+ok()+'',
            success: function(response){
                // const element  = response.imdb_id;
                const tits  = response.Title;
                // imdb_id = element;
                title = tits;
            }
        })
    }
        // console.log(imdb_id);
        // console.log(title);
    //   let type;
    //     $.ajax({
    //         async: false,
    //         url: 'http://www.omdbapi.com/?i='+imdb_id+'&apikey='+ok()+'',
    //         success: function(response){
    //             type = response.Type;
    //         }
    //     })
        sessionStorage.setItem('movieId',imdb_id);
        sessionStorage.setItem('movieSeries',type)
        sessionStorage.setItem('tmdb_id',id);
        sessionStorage.setItem('MovieTitle',title);
    window.location.href = 'movie.php';
    return false;   
 }
 function tmdbSeriesSelected(id,title){
    var imdb_id;     
    // var title;
   
    $.ajax({
            async: false,
            url: 'https://api.themoviedb.org/3/tv/'+id+'/external_ids?api_key='+tk()+'&language=en-US',
            success: function(response){
                const element  = response.imdb_id;
                // const tits  = response.original_title;
                imdb_id = element;
                // title = tits;
            }
        })
        // console.log(imdb_id);
        // console.log(title);
      let type = 'series';
        // $.ajax({
        //     async: false,
        //     url: 'http://www.omdbapi.com/?i='+imdb_id+'&apikey='+ok()+'',
        //     success: function(response){
        //         type = response.Type;
        //     }
        // })
        sessionStorage.setItem('movieId',imdb_id);
        sessionStorage.setItem('movieSeries',type)
        sessionStorage.setItem('tmdb_id',id);
        sessionStorage.setItem('MovieTitle',title);
    window.location.href = 'movie.php';
    return false;   
 }
 function forBestYear(){
    axios.get('https://api.themoviedb.org/3/discover/movie?api_key='+tk()+'&language=en-US&sort_by=vote_count.desc&include_adult=false&include_video=false&page=1&primary_release_year=2020&year=20201')
    .then((response)=>{
    //   console.log(response);
      let output =`
      <h3 class= 'mt-5'> Best of 2020</h3>
      `;
      for (let i = 0; i < response.data.results.length; i++) { 
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
      //   var monthName = months[d.getMonth()];
      var year = Number(releaseDate.substr(0, 4)); 
      let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a>
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block' > &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'>      ${date}, ${month} ${year}   </h5>
                                   
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.result').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/discover/movie?api_key='+tk()+'&language=en-US&sort_by=vote_count.desc&include_adult=false&include_video=false&page=2&primary_release_year=2020&year=2020')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
      //   var monthName = months[d.getMonth()];
        var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
        <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                       <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
    
                       <a  >
                       <div class='ca mt-0 m-0 h-50 '>
                              <div class='card-body p-0 m-0'>
                              
                                   <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                    <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                    </h5>
                                    <div class='d-flex'> 
                                    <i class="fas fa-star text-warning"></i>${vote_average}/10
                                   <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                   <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                  Based on imdb </span>
                                   </div>
                                   </div>
                                       <div class='card-text mt-0 m-0'>
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                       <p class='m-0  d-block d-md-none'>View More</p>
                                       <h5 class=' m-0'>      ${date}, ${month} ${year}   </h5>

                                   </div>
                                   </a> 
                           </div>
                           </div>
                   </div>
                   `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.results').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/discover/movie?api_key='+tk()+'&language=en-US&sort_by=vote_count.desc&include_adult=false&include_video=false&page=3&primary_release_year=2020&year=2020')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a  >
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'>      ${date}, ${month} ${year}   </h5>

                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.resultss').html(output);
    //   console.log(output)
    
    })
 }
 function forTrending(){
     
axios.get('https://api.themoviedb.org/3/trending/all/week?api_key='+tk()+'&page=1')
.then((response)=>{
    // console.log(response)
    let output =`
    <h3 class= 'mt-5'>Trending</h3>
    `;
    for (let i = 0; i < response.data.results.length; i++) {
    const element = response.data.results[i];
  let releaseDate = element.release_date;
  let overview = element.overview;
  var  dots = (overview.length > 30)?'...':'';
  var movs =   overview.match(/.{1,50}/);
  var overview1 = movs[0] + dots;
  let first_to_air = element.first_air_date;
  let original_name = element.original_name;
  let media_type = element.media_type;
//   let imgs = element.poster_path;
  let original_title = element.original_title;
  if(original_title == undefined){
      original_title ='';
  }
  if(original_name == undefined){
      original_name ='';
  }
  if(first_to_air == undefined){
      first_to_air ='';
  }
  if(releaseDate == undefined){
      releaseDate ='';
  }
  

  let id = element.id;
  let img = element.poster_path;
  let vote = element.vote_average;

   output += `
   <div class='col-md-12 col-lg-11 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}')">
    <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid card-img-top    w-25 h-50  max p-1 mr-2 '> 
                
                  <a>
                  <div class='ca mt-0 m-0 '>
                         <div class='card-body p-0 m-0'>
                         
                              <div class='card-title p-0 mb-0 m-0 mt-0'>
                               <h5 class='m-0 mt-0 p-0 text-dark'>${original_name} ${original_title}<br class='d-sm-block '>
                              </div>
                                  <div class='card-text mt-0 m-0'>
                                  <div class="d-flex d-row">
                                  <p class='m-0'>Type:${media_type}</p>
                                  <span class='badge  ml-auto' style='background-color: #ffe799; color: #593d00;'>${vote}</span></h5>
                                  </div>
                                  <p class='m-0 lead d-none d-sm-block'>${overview}</p>
                                  <p class='m-0 lead  d-sm-none'>${overview1}</p>
                                  <h6 class=' m-0'>Date:${releaseDate}${first_to_air} </h6>
                              </div>
                              </a> 
                      </div>
                      </div>
              </div>
             
              `;

            }
            $('.result').append(output);

})
      
axios.get('https://api.themoviedb.org/3/trending/all/week?api_key='+tk()+'&page=2')
.then((response)=>{
    // console.log(response)
    for (let i = 0; i < response.data.results.length; i++) {
    const element = response.data.results[i];
  let releaseDate = element.release_date;
  let first_to_air = element.first_air_date;
  let overview = element.overview;
  var  dots = (overview.length > 30)?'...':'';
  var movs =   overview.match(/.{1,50}/);
  var overview1 = movs[0] + dots;
  let original_name = element.original_name;
  let media_type = element.media_type;
//   let imgs = element.poster_path;
  let original_title = element.original_title;
  if(original_title == undefined){
      original_title ='';
  }
  if(original_name == undefined){
      original_name ='';
  }
  if(first_to_air == undefined){
      first_to_air ='';
  }
  if(releaseDate == undefined){
      releaseDate ='';
  }
  

  let id = element.id;
  let img = element.poster_path;
  let vote = element.vote_average;
  let output =`
  `;
   output += `
   <div class='col-md-12 col-lg-11 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}')">
    <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid card-img-top    w-25 h-50  max p-1 mr-2 '> 
                
                  <a>
                  <div class='ca mt-0 m-0  '>
                         <div class='card-body p-0 m-0'>
                         
                              <div class='card-title p-0 mb-0 m-0 mt-0'>
                               <h5 class='m-0 mt-0 p-0 text-dark'>${original_name} ${original_title}<br class='d-sm-block '>
                              </div>
                                  <div class='card-text mt-0 m-0'>
                                  <div class="d-flex d-row">
                                  <p class='m-0'>Type:${media_type}</p>
                                  <span class='badge  ml-auto' style='background-color: #ffe799; color: #593d00;'>${vote}</span></h5>
                                  </div>
                                  <p class='m-0 lead d-none d-sm-block'>${overview}</p>
                                  <p class='m-0 lead  d-sm-none'>${overview1}</p>
                                  <h6 class=' m-0'>Date:${releaseDate}${first_to_air} </h6>
                              </div>
                              </a> 
                      </div>
                      </div>
              </div>
             
              `;
              $('.results').append(output);

            }


})
       
axios.get('https://api.themoviedb.org/3/trending/all/week?api_key='+tk()+'&page=3')
.then((response)=>{
    // console.log(response)
    for (let i = 0; i < response.data.results.length; i++) {
    const element = response.data.results[i];
  let releaseDate = element.release_date;
  let overview = element.overview;
  var  dots = (overview.length > 30)?'...':'';
  var movs =   overview.match(/.{1,50}/);
  var overview1 = movs[0] + dots;
  let first_to_air = element.first_air_date;
  let original_name = element.original_name;
  let media_type = element.media_type;
//   let imgs = element.poster_path;
  let original_title = element.original_title;
  if(original_title == undefined){
      original_title ='';
  }
  if(original_name == undefined){
      original_name ='';
  }
  if(first_to_air == undefined){
      first_to_air ='';
  }
  if(releaseDate == undefined){
      releaseDate ='';
  }
  

  let id = element.id;
  let img = element.poster_path;
  let vote = element.vote_average;
  let output =`
  `;
   output += `
   <div class='col-md-12 col-lg-11 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}')">
    <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid card-img-top    w-25 h-50  max p-1 mr-2 '> 
                
                  <a>
                  <div class='ca mt-0 m-0  '>
                         <div class='card-body p-0 m-0'>
                         
                              <div class='card-title p-0 mb-0 m-0 mt-0'>
                               <h5 class='m-0 mt-0 p-0 text-dark'>${original_name} ${original_title}<br class='d-sm-block '>
                              </div>
                                  <div class='card-text mt-0 m-0'>
                                  <div class="d-flex d-row">
                                  <p class='m-0'>Type:${media_type}</p>
                                  <span class='badge  ml-auto' style='background-color: #ffe799; color: #593d00;'>${vote}</span></h5>
                                  </div>
                                  <p class='m-0 lead d-none d-sm-block'>${overview}</p>
                                  <p class='m-0 lead  d-sm-none'>${overview1}</p>
                                  <h6 class=' m-0'>Date:${releaseDate}${first_to_air} </h6>
                              </div>
                              </a> 
                      </div>
                      </div>
              </div>
             
              `;
              $('.resultss').append(output);

            }

})
   
 }
 function tvDownload(){
     no_of_season = sessionStorage.getItem('no_of_season');
     title = sessionStorage.getItem('MovieTitle');
     window.location.href = 'seriesdl.php?n='+no_of_season+'&t='+title+'';
     return false

 }
 function kDownload(){
    no_of_season = sessionStorage.getItem('no_of_season');
    title = sessionStorage.getItem('MovieTitle');
    window.location.href = 'kdramadl.php?n='+no_of_season+'&t='+title+'';
    return false

}
 function streamMovie(title){
    id = sessionStorage.getItem('movieId');
    title = sessionStorage.getItem('MovieTitle');
    img = sessionStorage.getItem('movieImage');
    // console.log(title)
    window.location.href = 'streamMovie.php?id='+id+'&t='+title+'&img='+img+'';
    return false
}
function streamSeries(){
    id = sessionStorage.getItem('movieId');
    no_of_seasons = sessionStorage.getItem('no_of_season');
    title = sessionStorage.getItem('MovieTitle');
    episode_count = sessionStorage.getItem('episodeCount');
    images = sessionStorage.getItem('images');
    t_id = sessionStorage.getItem('t_id');
    window.location.href = 'streamSeries.php?id='+id+'&t='+title+'&im='+images+'&ns='+no_of_seasons+'&ep='+episode_count+'&t_id='+t_id+'';
    return false
}

 function forTopRated(){
    axios.get('https://api.themoviedb.org/3/movie/top_rated?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
    //   console.log(response);
      let output =`
      <h3 class= 'mt-5'> Top Rated</h3>
      `;
      for (let i = 0; i < response.data.results.length; i++) { 
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a  >
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'> ${date}, ${month} ${year}    
                                        </h5>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.result').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key='+tk()+'&language=en-US&page=2')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
        <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                       <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
    
                       <a  >
                       <div class='ca mt-0 m-0 h-50 '>
                              <div class='card-body p-0 m-0'>
                              
                                   <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                    <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                    </h5>
                                    <div class='d-flex'> 
                                    <i class="fas fa-star text-warning"></i>${vote_average}/10
                                   <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                   <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                  Based on imdb </span>
                                   </div>
                                   </div>
                                       <div class='card-text mt-0 m-0'>
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                       <p class='m-0  d-block d-md-none'>View More</p>
                                       <h5 class=' m-0'> ${date}, ${month} ${year}    
                                       </h5>
                                   </div>
                                   </a> 
                           </div>
                           </div>
                   </div>
                   `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.results').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key='+tk()+'&language=en-US&page=3')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a  >
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'> ${date}, ${month} ${year}    
                                        </h5>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.resultss').html(output);
    //   console.log(output)
    
    })
 }
 function forUpcoming(){
    axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
    //   console.log(response);
      let output =`
      <h3 class= 'mt-5'> Upcoming Movies</h3>
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let type = 'movie';
        let vote_average = element.vote_average;
         output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${type}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '>
                        <a>
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class='text-muted m-0'>Released Date:         ${date}, ${month} ${year}
                                        </h5>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.result').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key='+tk()+'&language=en-US&page=2')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
        <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                       <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
    
                       <a  >
                       <div class='ca mt-0 m-0 h-50 '>
                              <div class='card-body p-0 m-0'>
                              
                                   <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                    <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                    </h5>
                                    <div class='d-flex'> 
                                    <i class="fas fa-star text-warning"></i>${vote_average}/10
                                   <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                   <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                  Based on imdb </span>
                                   </div>
                                   </div>
                                       <div class='card-text mt-0 m-0'>
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                       <p class='m-0  d-block d-md-none'>View More</p>
                                       <h5 class='text-muted m-0'>Released Date:         ${date}, ${month} ${year}
                                       </h5>
                                   </div>
                                   </a> 
                           </div>
                           </div>
                   </div>
                   `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="upcomingMovies()" >See All</div>`;
      $('.results').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key='+tk()+'&language=en-US&page=3')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
        <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                       <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
    
                       <a  >
                       <div class='ca mt-0 m-0 h-50 '>
                              <div class='card-body p-0 m-0'>
                              
                                   <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                    <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                    </h5>
                                    <div class='d-flex'> 
                                    <i class="fas fa-star text-warning"></i>${vote_average}/10
                                   <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                   <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                  Based on imdb </span>
                                   </div>
                                   </div>
                                       <div class='card-text mt-0 m-0'>
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                       <p class='m-0  d-block d-md-none'>View More</p>
                                       <h5 class='text-muted m-0'>Released Date:         ${date}, ${month} ${year}
                                       </h5>
                                   </div>
                                   </a> 
                           </div>
                           </div>
                   </div>
                   `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.resultss').html(output);
    //   console.log(output)
    
    })
 }
 function forPopularMovies(){
    axios.get('https://api.themoviedb.org/3/movie/popular?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
    //   console.log(response);
      let output =`
      <h3 class= 'mt-5'> Popular Movies</h3>
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
        <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                       <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
    
                       <a  >
                       <div class='ca mt-0 m-0 h-50 '>
                              <div class='card-body p-0 m-0'>
                              
                                   <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                    <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                    </h5>
                                    <div class='d-flex'> 
                                    <i class="fas fa-star text-warning"></i>${vote_average}/10
                                   <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                   <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                  Based on imdb </span>
                                   </div>
                                   </div>
                                       <div class='card-text mt-0 m-0'>
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                       <p class='m-0  d-block d-md-none'>View More</p>
                                       <h5 class=' m-0'>Year:          ${date}, ${month} ${year}
                                       </h5>
                                   </div>
                                   </a> 
                           </div>
                           </div>
                   </div>
                   `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.result').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/popular?api_key='+tk()+'&language=en-US&page=2')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a  >
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'>Year:          ${date}, ${month} ${year}
                                        </h5>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.results').html(output);
    //   console.log(output)
    
    })
    axios.get('https://api.themoviedb.org/3/movie/popular?api_key='+tk()+'&language=en-US&page=3')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let releaseDate= element.release_date;
        var months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
        var mont = Number(releaseDate.substr(5, 2)); 
        newMonth= mont - 1;
        var date = releaseDate.substr(8,2)
        var month = months[newMonth];
         var year = Number(releaseDate.substr(0, 4)); 
        let title = element.title;
        let overview = element.overview;
        let img = element.poster_path;
        let id = element.id;
        let vote = element.vote_count;
        let vote_average = element.vote_average;
        output += `
         
         <div class='col-md-12 col-lg-12 d-flex d-row opac  p-1 m-0 mt-2' onclick="tmdbSelected('${id}', '${title}')">
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25  p-1 mr-2 '> 
     
                        <a  >
                        <div class='ca mt-0 m-0 h-50 '>
                               <div class='card-body p-0 m-0'>
                               
                                    <div class='card-title p-0 mb-0 m-0 mt-0 '>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${title}<br class='d-sm-block '> 
                                     </h5>
                                     <div class='d-flex'> 
                                     <i class="fas fa-star text-warning"></i>${vote_average}/10
                                    <div class='text-muted d-none d-sm-block'> &nbsp; -${vote} Vote(s)</div>
                                    <span class='badge p-1 ' style='background-color: #ffe799; color: #593d00;'>
                                   Based on imdb </span>
                                    </div>
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <p class='m-0 lead d-none d-md-block'>${overview}</p>
                                        <p class='m-0  d-block d-md-none'>View More</p>
                                        <h5 class=' m-0'>Year:          ${date}, ${month} ${year}
                                        </h5>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
                    `;
      }
    //   output += `<div class='btn btn-success btn-block ' onclick="popularMovies()" >See All</div>`;
      $('.resultss').html(output);
    //   console.log(output)
    
    })
 }
 function forPopularCasts(){
    axios.get('https://api.themoviedb.org/3/person/popular?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
    //   console.log(response);
      let output =`
      <h3 class= 'mt-5'> Popular Casts</h3>
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        // let releaseDate = element.release_date;
        let media_type = element.known_for[0].media_type;
        let img = element.profile_path;
        let name = element.name;
        let known = element.known_for[0].title;
        let overview = element.known_for[0].overview;
        let id = element.id;
         output += `
         
         <div class='col-md-12 col-lg-12  d-flex d-row opac  p-1 m-0 mt-2'  onclick="castSelected('${id}')">
                      
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25    p-1 mr-2 '> 
                        <div class='ca mt-0 m-0 h-50 '>
                               <a   onclick="castSelected('${id}')"> <div class='card-body p-0 m-0'>
    
                                    <div class='card-title p-0 mb-0 m-0 mt-0'>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${name}<br class='d-sm-block '>
                             
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <small class='text-muted m-0'>Known for: ${known}. Type: ${media_type}</small>                               
                                       <p class='m-0 lead d-none d-md-block'>${overview}</p> <br>
                                        <span class=" d-md-none">View more</span>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
    
                    `;
    
      }
    //   output += `<div class='btn btn-success btn-block mt-4  onclick="popularCast()"' >See All</div>`;
    
      $('.result').html(output);
    //   console.log(output)
    })
    axios.get('https://api.themoviedb.org/3/person/popular?api_key='+tk()+'&language=en-US&page=2')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let media_type = element.known_for[0].media_type;
        let img = element.profile_path;
        let name = element.name;
        let known = element.known_for[0].title;
        let overview = element.known_for[0].overview;
        let id = element.id;
         output += `
         
         <div class='col-md-12 col-lg-12  d-flex d-row opac  p-1 m-0 mt-2'  onclick="castSelected('${id}')">
                      
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25    p-1 mr-2 '> 
                        <div class='ca mt-0 m-0 h-50 '>
                               <a  > <div class='card-body p-0 m-0'>
    
                                    <div class='card-title p-0 mb-0 m-0 mt-0'>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${name}<br class='d-sm-block '>
                             
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <small class='text-muted m-0'>Known for: ${known}. Type: ${media_type}</small>                                            <p class='m-0 lead d-none d-md-block'>${overview}</p> <br>
                                        <span class=" d-md-none">View more</span>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
    
                    `;
    
      }
    //   output += `<div class='btn btn-success btn-block mt-4  onclick="popularCast()"' >See All</div>`;
    
      $('.resultss').html(output);
    //   console.log(output)
    })
    axios.get('https://api.themoviedb.org/3/person/popular?api_key='+tk()+'&language=en-US&page=3')
    .then((response)=>{
    //   console.log(response);
      let output =`
      `;
      for (let i = 0; i < response.data.results.length; i++) {
        const element = response.data.results[i];
        let media_type = element.known_for[0].media_type;
        let img = element.profile_path;
        let name = element.name;
        let known = element.known_for[0].title;
        let overview = element.known_for[0].overview;
        let id = element.id;
         output += `
         
         <div class='col-md-12 col-lg-12  d-flex d-row opac  p-1 m-0 mt-2'  onclick="castSelected('${id}')">
                      
                        <img src='https://image.tmdb.org/t/p/original${img}'  alt=''  class='img-fluid   justify-content-start    w-25 h-25    p-1 mr-2 '> 
                        <div class='ca mt-0 m-0 h-50 '>
                               <a   onclick="castSelected('${id}')"> <div class='card-body p-0 m-0'>
    
                                    <div class='card-title p-0 mb-0 m-0 mt-0'>
                                     <h5 class='m-0 mt-0 p-0 text-dark'>${name}<br class='d-sm-block '>
                             
                                    </div>
                                        <div class='card-text mt-0 m-0'>
                                        <small class='text-muted m-0'>Known for: ${known}. Type: ${media_type}</small>                                           <p class='m-0 lead d-none d-md-block'>${overview}</p> <br>
                                        <span class=" d-md-none">View more</span>
                                    </div>
                                    </a> 
                            </div>
                            </div>
                    </div>
    
                    `;
    
      }
    //   output += `<div class='btn btn-success btn-block mt-4  onclick="popularCast()"' >See All</div>`;
    
      $('.results').html(output);
    //   console.log(output)
    })
 }
function getCast(){

    let castId=  sessionStorage.getItem('castId');
    axios.get('https://api.themoviedb.org/3/person/'+castId+'/movie_credits?api_key='+tk()+'&language=en-US')
    .then((response)=>{
        console.log(response)
        let count = `${response.data.cast.length} Movie(s)` ;
       let  output = '';
        for (let i = 0; i < response.data.cast.length; i++) {
            const element = response.data.cast[i];
            let img = element.poster_path;
            let id = element.id;
            let title = element.title;
            let type = 'movie';
            let character = element.character;
             output = `
             <div class='col-md-3'>
           <div class="card  my-0 mx-1 opac whit " style="border: none;" >
           <a   onclick="tmdbSelected('${id}', '${type}')">    <img src="https://image.tmdb.org/t/p/original${img}" alt=""   class="card-img-top imagecheck w-100 myBorder p-1 img-fluid"></a>
    <div class="card-bod whit">
    <a href="#"  class="text-dark">
        <h4 class="my-0">${title}</h4>
        <small class="text-muted text-center">As ${character}</small>
        </a>
    </div>
    </div>
    </div>
            `;  
            $('.castt').append(output);
        }
        $('.count').append(count);

    })

    axios.get('https://api.themoviedb.org/3/person/'+castId+'?api_key='+tk()+'&language=en-US')
    .then((response)=>{
        // console.log(response)
        let out = '';
        let img = response.data.profile_path;
        let name = response.data.name;
        let birthday = response.data.birthday;
        let known = response.data.known_for_department;
        let biography = response.data.biography;
        let place_of_birth = response.data.place_of_birth;
        let age = getAge(birthday);
        out += `
        <div class="col-md-12 col-lg-11 d-md-flex d-md-row opacs whits p-3">
        <div class= 'd-sm-column'>
<a   class="">
    <img src='https://image.tmdb.org/t/p/original${img}' alt=""  class="img-fluid max myBorder mb-0   p-1 mr-2 "> </a>
    </div>
    <div class= 'd-sm-column'>
    <div class="ca mt-0 m-0 h-50 ">
           <a   class="text-dark">
           <div class="card-body p-0 m-0">
                <div class="card-title p-0 mb-0 m-0 mt-0">
                 <h5 class="m-0 mt-0 p-0">${name} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                 <p class="lead  m-0 p-0  ">${biography}</p>  
                 <h4 class=" m-0 p-0  ">Known for: ${known}</h4>    
                 <p class="m-0" >Birthday <i class="fa fa-birthday-cake" aria-hidden="true"></i>:  ${birthday} &nbsp; Age: ${age} </p> 
                </div>
                    <div class="card-text mt-0 m-0 mb-3">
                    <p class="m-0"></p>
                    <small class="text-muted m-0 ">Born : ${place_of_birth}.</small>
                </div>
                </a> 
        </div>
        </div>
        </div>
</div>
<div class="borders-top mx-4"></div>
       
        `;   
        // console.log(out);
        $('.castId').html(out);

    });
  
  
}
function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

function getHomeMovie(imdb, type){
    var movieId = imdb;
    if(type == 'movie'){
    axios.get('http://api.themoviedb.org/3/movie/'+movieId+'?api_key='+tk()+'&append_to_response=videos,images')
.then((response)=>{
    // console.log(response);
 
    $.each(response.data.videos.results, function(i, item){
        // console.log(item.key);
   
        var videoId =    item.key;
        let src = 'https://www.youtube.com/embed/'+videoId+'?auto =1';
        // console.log(src);
        let trailer = `
    
    <iframe  src='' frameborder="0" height="350" allowfullscreen width="100%">
    
  </iframe>
        `;
        $('.videod').html(trailer);
        // console.log(videoId)

        $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
            //   stop the video
            $("#videoModals iframe").attr("src", src);
            });
});
})
   .catch((err)=>{
        // console.log(err);
        let trailer = `
        
        Sorry This video isn't available right now please try again later
            `;
            $('.videod').html(trailer);
    })
    }
    else{
    var MyFind;

    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'https://api.themoviedb.org/3/find/'+movieId+'?language=en-US&external_source=imdb_id',
        Cache: false,
        dataType: "json",
        success: function(response){
            // console.log(response)
                // console.log(response.tv_results);
            for (let i = 0; i < response.tv_results.length; i++) {
                        const element = response.tv_results[i].id;
                        // console.log(element);
                        MyFind = element;                    }
        
            // var post = response;
            // sessionStorage.setItem('p_id',post);
            // var Mydata ;
        }
    });

    axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'?api_key='+tk()+'&language=en-US&append_to_response=videos,images')
    .then((response)=>{
        // console.log(response);
        $.each(response.data.videos.results, function(i, item){
            // console.log(item.key);
       
            var videoId =    item.key;
            let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';
            // console.log(src);
            let trailer = `
        
        <iframe  src='' frameborder="0" height="350" allowfullscreen width="100%">
        
      </iframe>
            `;
            $('.videoId').html(trailer);
            // console.log(videoId)
    
            $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
                //   stop the video
                $("#videoModals iframe").attr("src", src);
                });
    });
});
}
}
function getMovie(){
   let movieId=  sessionStorage.getItem('movieId');
   var movieTitle = sessionStorage.getItem('MovieTitle');
//    console.log(movieTitle);
//    console.log(movieId)

//    let movieTy=  sessionStorage.getItem('movieTY');
//    console.log(movieTy);
// console.log(makeid(38));
// axios.get('')
// .then((response)=>{
//     console.log(response.data.tv_results);
//     for (let i = 0; i < response.data.tv_results.length; i++) {
//         const element = response.data.tv_results[i].id;
//         sessionStorage.setItem('Movie',element);
//     }
// })
var movieSeries =sessionStorage.getItem('movieSeries');
console.log(movieSeries);
if(movieSeries == 'movie'){
    let reviews = `<div class="h5"> Top reviews</div>`;
    let review = `<div class="h5"> Top reviews</div>`;
    axios.get('https://api.themoviedb.org/3/movie/'+movieId+'/reviews?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '..<button class="btn btn-default readmore">read more</button>' : '';
            return str.substring(0, length)+dots;
          };
          for (let i = 0; i < response.data.results.length; i++) {
              const element = response.data.results[i];
              let unTouched = element.content;
              let author = element.author;
              let content = stringTruncate(element.content, 440)
              reviews += `
              <div class="media no-gutters ">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 w-50">
           <img src="icons/head_green_sea.png" alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
           </div>
              <div class="media-body mr-auto">
                  <div class="d-flex d-row">
              <h5>${author}</h5>
                  <p class="ml-auto">
                  <span class="badge " style="background-color: #ffe799; color: #593d00;">  Imdb </span></p>
                  </div>   
                  <p class="lead mr-a">${content}</p>
              </div>
          </div>
              `;
              review += `
              <div class="media no-gutters ">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 w-50">
           <img src="icons/head_green_sea.png" alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
           </div>
              <div class="media-body mr-auto">
                  <div class="d-flex d-row">
              <h5>${author}</h5>
                  <p class="ml-auto">
                  <span class="badge " style="background-color: #ffe799; color: #593d00;">  Imdb </span></p>
                  </div>   
                  <p class="lead mr-a">${unTouched}</p>
              </div>
          </div>
              `;
          }
         
          $('.review').html(reviews);
          $('.readmore').click(()=>{
            reviews = '';
           $('.review').html(review);
       });
    })
    let featured ='';
    axios.get('https://api.themoviedb.org/3/movie/'+movieId+'/reviews?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '..<button class="btn btn-light readmore">read more</button>' : '';
            return str.substring(0, length)+dots;
          };
          let unTouched = response.data.results[0].content;
          let content = stringTruncate(response.data.results[0].content, 440)
        featured= `
        <div class="card w-100 p-2 specs" >
        <div class="card-body">
            <div class="card-title">
             <h4 class="mb-0 no-gutters">${movieTitle}</h4>   
    <span class="badge " style="background-color: #ffe799; color: #593d00;"> Top Review </span>
            </div>
            <div class="d-flex d-row">
                <img src="icons/head_green_sea.png" alt=""  class="img-fluid mt-2  rounded-circle sol">
                <div class="ml-auto mx-2 my-0">
                <span class="lead mt-4 mr-auto">Review by :</span> ${response.data.results[0].author}
            </div>
            </div>
            <p class="lead">${content}</p>
            <div class="d-flex d-row">
        </div>
    </div>
    </div>
        `;
        feature= `
        <div class="card w-100 p-2 specs" >
        <div class="card-body">
            <div class="card-title">
             <h4 class="mb-0 no-gutters">${movieTitle}</h4>   
    <span class="badge " style="background-color: #ffe799; color: #593d00;"> Top Review </span>
            </div>
            <div class="d-flex d-row">
                <img src="icons/head_green_sea.png" alt=""  class="img-fluid mt-2  rounded-circle sol">
                <div class="ml-auto mx-2 my-0">
                <span class="lead mt-4 mr-auto">Review by :</span> ${response.data.results[0].author}
            </div>
            </div>
            <p class="lead">${unTouched}</p>
            <div class="d-flex d-row">
        </div>
    </div>
    </div>
        `

        $('.featured').html(featured);
        $('.readmore').click(()=>{
             featured = '';
            $('.featured').html(feature);
        });

    })
    let movieImages; 
    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'https://api.themoviedb.org/3/movie/'+movieId+'',
        Cache: false,
        dataType: "json",
        success: function(response){
            // console.log(response)
        movieImages = response.backdrop_path; 
        }
    });

   sessionStorage.setItem('movieImage', movieImages);
    let streamOnline =`
    <button class="btn btn-info btn-block" onclick='streamMovie()'>Stream Online</button>
    `;
    $('.streamOnline').html(streamOnline);
    let country;
    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'http://api.themoviedb.org/3/movie/'+movieId+'?api_key='+tk()+'&append_to_response=videos,images',
        Cache: false,
        dataType: "json",
        
        success: function(response){
            // console.log(response)
            if(response.production_countries.length == 0){
                country = ' ';
            }
            else{
                country = response.production_countries[0].iso_3166_1;
            }
            //  length = response.seasons.length;
        }
    })
    // alert(country)
    if(country != 'KR'){
let moviedownload =`
<section id="download" class="bg-dark p-2 mb-4">
  <div class="d-md-flex d-md-row">
        <div class="container  mb-4 col-md-4" >
            <h5 class="text-center text-light">Torrent link</h5>
            <small class="form-text text-muted text-center">Fast (recommended)</small>
            <div class="row torrent">
             
            </div>
        </div>
        <div class="container nonTorrent mb-4 col-md-4" >
            <h5 class="text-center text-light">Non Torrent link</h5>
            <small class="form-text text-muted text-center">May redirect  to another site</small>
            <div class="row ">
            <a  class="btn btn-success btn-block movieLink1" target='_blank'>
                <i class="fa fa-download" aria-hidden="true"></i> Link <span class="fhdsize"></span>  
                </a>
            </div>
        </div>
  </div>
    </section>
`;
$('#downloadmovie').html(moviedownload);

    } else{

        let moviedownload =`
<section id="download" class="bg-dark p-2 mb-4">
  <div class="d-md-flex d-md-row">
        <div class="container  mb-4 col-md-4" >
            <h5 class="text-center text-light">Torrent link</h5>
            <small class="form-text text-muted text-center">Fast (recommended)</small>
            <div class="row torrent">
             
            </div>
        </div>
  </div>
    </section>
`;
$('#downloadmovie').html(moviedownload);
    }
var movieYear = '';
$.ajax({
    type: 'get',
    async: false,
    data: { "api_key": "f123e134" },
    url: 'http://www.omdbapi.com/?i='+movieId+'&apikey='+ok()+'',
    Cache: false,
    dataType: "json",
    success: function(response){
        movieYear = response.Year;
        // var post = response;
        // sessionStorage.setItem('p_id',post);
        // var Mydata ;
    }
});

$('.movieLink1').attr('href', 'http://anilist1.ir/Movie/'+movieYear+'/'+movieTitle+'') ;
axios.get('https://yts.mx/api/v2/list_movies.json?query_term='+movieTitle+'/'+movieId+'')
.then((response)=>{
        // console.log(response)
        const count = response.data.data.movie_count;
        // console.log(count)
        if(count !== 0){
            const element = response.data.data.movies[0];
            const img = element.small_cover_image;
            let output ='';
            for (let i = 0; i < element.torrents.length; i++) {
                const el = element.torrents[i];
                const url = el.url;
                var quality = el.quality;
                var new_quality ='';
                if(quality == "720p"){
                     new_quality +=  ` 720p (HD)`;
                }
                if(quality == "1080p"){
                     new_quality +=  ` 1080p (FHD)`;
                }  
                 if(quality == "2160p"){
                     new_quality +=  ` 2160p (UHD-4K)`;
                } 
                  if(quality == "3D"){
                     new_quality +=  ` 3D`;
                }
                // console.log(url)
                output += `
                <a href="${url}" class="btn btn-success btn-block torr">
                <i class="fa fa-download" aria-hidden="true"></i> ${new_quality }<span class="fhdsize"> ${el.size}</span>  
                </a>
                `  }
                $('.torrent').html(output);
    //  console.log(response);
     let toast =`
     <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <!-- Position it -->
    <div style="position: absolute;top:1000px; z-index:100; left: 0;">
    <div class="toasts" role="alert" aria-live="assertive" aria-atomic="true" data-delay='3000'>
      <div class="toast-header">
        <img src="${img}" class="w-25 h-25 roundeds" alt="...">
        <small class="text-muted">Just now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <div class="toast-body">
      You're about to watch  <strong class="mr-auto">${movieTitle} </strong>
    
      </div>
    </div>
    </div>
         </div>
     `;
     
     $('.torr').click(()=>{
         $('.toastss').html(toast);
         $('.toastss').toast('show')
    
    })
        }
      else{
          let new_response = `
          <button class="btn btn-light" disabled >Sorry no download link available right now...check back later</button>
          `;
          $('.torrent').html(new_response);
      }
})


var castImage = [];
var castImages = [];
var tid ;
var tmdbid =     sessionStorage.getItem('tmdb_id');
$.ajax({
    type: 'get',
    async: false,
    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
    url: 'https://api.themoviedb.org/3/movie/'+movieId+'/credits',
    Cache: false,
    dataType: "json",
    success: function(response){
        // console.log(response);
        let ic = '';
        tmdbid = response.id;
        tid = response.id;
        for (let i = 0; i < 8; i++) {
                let img = (response.cast[i].profile_path);
                // console.log(img);
                let id = response.cast[i].id;
                let name =(response.cast[i].name);
                let character = response.cast[i].character;
                ic += `
            <div class="col-lg-6 col-md-3 col-sm-4 col-6 whit opac" onclick="castSelected(${id})">
                    <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-50 rounded-circle">
                    <h5>${name}</h5>
                    <small class='text-muted'>As ${character}</small>
            </div>
                `
            }
            $('.castimage').html(ic);

            // console.log(profile_path)
            // console.log(response.tv_results);
            for (let i = 0; i < 10; i++) {
                const element = response.cast[i].id;
                const general = response.cast[i];
                castImage.push(element);
               
            }
            castImages  =  castImage.join(", ");
           
        // var post = response;
        // sessionStorage.setItem('p_id',post);
        // var Mydata ;
    }
    
});

axios.get('https://api.themoviedb.org/3/movie/'+tmdbid+'/similar?api_key='+tk()+'&language=en-US&page=1')
.then((response)=>{
// console.log(response)
let relates = `
Recommendations (${response.data.results.length})
`
for (let i = 0; i < response.data.results.length; i++) {
    var stringTruncate = function(str, length){
        var dots = str.length > length ? '..' : '';
        return str.substring(0, length)+dots;
      };
    const element = response.data.results[i];
    const id  = element.id;
    const img = element.poster_path;
    const titl = element.title;
    var title = stringTruncate(titl, 19);
    const release_date = element.release_date;
    var dob = release_date.toString();
    var year = Number(dob.substr(0, 4));
    output = `
    <div class= 'col-md-3 col-6'>
  <div class="card  my-0 mx-1 opac whit " style="border: none;" >
  <a   onclick="tmdbSelected('${id}')">    <img src="https://image.tmdb.org/t/p/original${img}" alt=""   class="card-img-top  w-75 h-25 img-fluid myBorder opac"></a>
<div class="card-bod whit">
<a href="#"  class="text-dark">
<h4 class="my-0">${title}</h4>
<h2 class="text-muted ">${year} </h2>
</a>
</div>
</div>
</div>
   `;  
  
   $('.similar').append(output);
   $('.related').html(relates)

}

})
// console.log(castImage);
let out = '';
for (let i = 0; i < 10; i++) {
    const element = castImage[i];
    axios.get('https://api.themoviedb.org/3/person/'+castImage[i]+'?api_key='+tk()+'&language=en-US')
    .then((response)=>{
        // console.log(response)
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '...view more' : '';
            return str.substring(0, length)+dots;
          };
        let img = response.data.profile_path;
        let name = response.data.name;
        let id = response.data.id;
        let birthday = response.data.birthday;
        let biograph = response.data.biography;
        var biography = stringTruncate(biograph, 510);
        let place_of_birth = response.data.place_of_birth;
        out += `
        <div class="col-md-12 col-lg-11  d-flex d-row opacs whits p-3">
        <div class= 'col-md-4'>
<a  onclick="castSelected('${id}')" class="">
    <img src='https://image.tmdb.org/t/p/original${img}' alt=""  class="img-fluid max d-none d-sm-block  mb-0   p-1 mr-2 "> </a>
    <img src='https://image.tmdb.org/t/p/original${img}' alt=""  class="img-fluid  d-sm-none w-100 h-100  mb-0   p-1 mr-2 "> </a>
    </div>
    <div class= 'col-md-8'>
    <div class="ca mt-0 m-0 h-50 ">
           <a onclick="castSelected('${id}')"  class="text-dark">
           <div class="card-body p-0 m-0">
                <div class="card-title p-0 mb-0 m-0 mt-0">
                 <h5 class="m-0 mt-0 p-0">${name} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                 <p class="lead  m-0 p-0 d-none d-md-block">${biography}</p>   
                 <p class="m-0" ><span class='d-none d-sm-block'> Birthday</span> <i class="fa fa-birthday-cake" aria-hidden="true"></i>:  ${birthday}</p> 
                 <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                </div>
                    <div class="card-text mt-0 m-0">
                    <p class="m-0"></p>
                    <small class="text-muted m-0">Born : ${place_of_birth}.</small>
                </div>
                </a> 
        </div>
        </div>
        </div>
</div>
<div class="borders-top mx-4"></div>
       
        `;   
        // console.log(out);
        $('.castDetails').html(out);
    })

    // $.ajax({
    //                 type: 'get',
    //             data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
    //             url: 'https://api.themoviedb.org/3/person/'+castImage[1]+'&language=en-US',
    //             Cache: false,
    //             success: function(response){
    //                 // console.log(response);
    //                 let ic;
    //       let img = response.profile_path;
    //         //  console.log(img);
    //          let name =response.name
    //          ic += `
        
    //              <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
    //              <h5>${name}</h5>
    //              <p class="lead">Main Cast</p>
    //      </div>
    //      `
    //             }
    // });
}
// $.ajax({
//     type: 'post',
//     async: false,
//     url: 'insertimages.php',
//     data: {castImages:castImages, movieId:movieId} ,
//     Cache: false,
//     success: function(response){
//         console.log(response);
//         // Mydata = response;
//         // c_image =  response;
//         // var post = response;
//         // sessionStorage.setItem('p_id',post);
//         // var Mydata ;
//     }
// });
// console.log(c_image);
var MyFind;

    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'https://api.themoviedb.org/3/find/'+movieId+'?language=en-US&external_source=imdb_id',
        Cache: false,
        dataType: "json",
        success: function(response){
            // console.log(response)
                // console.log(response.tv_results);
            for (let i = 0; i < response.tv_results.length; i++) {
                        const element = response.tv_results[i].id;
                        // console.log(element);
                        MyFind = element;                    }
        
            // var post = response;
            // sessionStorage.setItem('p_id',post);
            // var Mydata ;
        }
    });
    // console.log(MyFind);
}else{

        
    var MyFind;

    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'https://api.themoviedb.org/3/find/'+movieId+'?language=en-US&external_source=imdb_id',
        Cache: false,
        dataType: "json",
        success: function(response){
                // console.log(response.tv_results);
            for (let i = 0; i < response.tv_results.length; i++) {
                        const element = response.tv_results[i].id;
                        // console.log(element);
                        MyFind = element;                    }
        
            // var post = response;
            // sessionStorage.setItem('p_id',post);
            // var Mydata ;
        }
    });
    let country;
    $.ajax({
        type: 'get',
        async: false,
        data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
        url: 'https://api.themoviedb.org/3/tv/'+MyFind+'?api_key='+tk()+'',
        Cache: false,
        dataType: "json",
        
        success: function(response){
            country = response.origin_country[0];
            //  length = response.seasons.length;
        }
    })
     if(country != 'KR'){
        let tvDownload =`
        <button class='btn btn-success btn-block m-2 p-2' onclick='tvDownload()'>Click Here to Download</button>
        `;
        $('#downloadmovie').html(tvDownload);
     }else{
        let kDownload =`
        <button class='btn btn-default btn-block m-5 p-2' disabled >Sorry this video isn't available for download right now</button>
        `;
        $('#downloadmovie').html(kDownload);
     }
    sessionStorage.setItem('t_id',MyFind);
    // console.log(MyFind)

    let reviews = `<div class="h5"> Top reviews</div>`;
    let review = `<div class="h5"> Top reviews</div>`;
    axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'/reviews?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '..<button class="btn btn-light readmore">read more</button>' : '';
            return str.substring(0, length)+dots;
          };
          for (let i = 0; i < response.data.results.length; i++) {
              const element = response.data.results[i];
              let unTouched = element.content;
              let author = element.author;
              let content = stringTruncate(element.content, 440)
              reviews += `
              <div class="media no-gutters ">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 w-50">
           <img src="icons/head_green_sea.png" alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
           </div>
              <div class="media-body mr-auto">
                  <div class="d-flex d-row">
              <h5>${author}</h5>
                  <p class="ml-auto">
                  <span class="badge " style="background-color: #ffe799; color: #593d00;">  Imdb </span></p>
                  </div>   
                  <p class="lead mr-a">${content}</p>
              </div>
          </div>
              `;
              review += `
              <div class="media no-gutters ">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 w-50">
           <img src="icons/head_green_sea.png" alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
           </div>
              <div class="media-body mr-auto">
                  <div class="d-flex d-row">
              <h5>${author}</h5>
                  <p class="ml-auto">
                  <span class="badge " style="background-color: #ffe799; color: #593d00;">  Imdb </span></p>
                  </div>   
                  <p class="lead mr-a">${unTouched}</p>
              </div>
          </div>
              `;
          }
         
          $('.review').html(reviews);
          $('.readmore').click(()=>{
            reviews = '';
           $('.review').html(review);
       });
    })
    let featured ='';
    axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'/reviews?api_key='+tk()+'&language=en-US&page=1')
    .then((response)=>{
        // console.log(response)
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '..<button class="btn btn-light readmore">read more</button>' : '';
            return str.substring(0, length)+dots;
          };
          let unTouched = response.data.results[0].content;
          let content = stringTruncate(response.data.results[0].content, 440)
        featured= `
        <div class="card w-100 p-2 specs" >
        <div class="card-body">
            <div class="card-title">
             <h4 class="mb-0 no-gutters">${movieTitle}</h4>   
    <span class="badge " style="background-color: #ffe799; color: #593d00;"> Top Review </span>
            </div>
            <div class="d-flex d-row">
                <img src="icons/head_green_sea.png" alt=""  class="img-fluid mt-2  rounded-circle sol">
                <div class="ml-auto mx-2 my-0">
                <span class="lead mt-4 mr-auto">Review by :</span> ${response.data.results[0].author}
            </div>
            </div>
            <p class="lead">${content}</p>
            <div class="d-flex d-row">
        </div>
    </div>
    </div>
        `;
        feature= `
        <div class="card w-100 p-2 specs" >
        <div class="card-body">
            <div class="card-title">
             <h4 class="mb-0 no-gutters">${movieTitle}</h4>   
    <span class="badge " style="background-color: #ffe799; color: #593d00;"> Top Review </span>
            </div>
            <div class="d-flex d-row">
                <img src="icons/head_green_sea.png" alt=""  class="img-fluid mt-2  rounded-circle sol">
                <div class="ml-auto mx-2 my-0">
                <span class="lead mt-4 mr-auto">Review by :</span> ${response.data.results[0].author}
            </div>
            </div>
            <p class="lead">${unTouched}</p>
            <div class="d-flex d-row">
        </div>
    </div>
    </div>
        `

        $('.featured').html(featured);
        $('.readmore').click(()=>{
             featured = '';
            $('.featured').html(feature);
        });

    })
var castImage = [];
var castImages = [];
$.ajax({
    type: 'get',
    async: false,
    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
    url: 'https://api.themoviedb.org/3/tv/'+MyFind+'/credits',
    Cache: false,
    dataType: "json",
    success: function(response){
        let ic = '';
        // console.log(response)
            for (let i = 0; i < response.cast.length; i++) {
                let img = (response.cast[i].profile_path);
                let name =(response.cast[i].name)
                let id = response.cast[i].id;
                let character = response.cast[i].character;
                ic += `
            <div class="col-lg-6 col-md-3 col-sm-4  col-6 opac whit" onclick="castSelected(${id})">
                    <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-50 rounded-circle">
                    <h5>${name}</h5>
                    <small class='text-muted'>As ${character}</small>
            </div>
                `
            }
            $('.castimage').html(ic);

            // console.log(profile_path)
            // console.log(response.tv_results);
            for (let i = 0; i < response.cast.length; i++) {
                // console.log(response.cast[i].id);
                const element = response.cast[i].id;
                const general = response.cast[i];
                castImage.push(element);
               
            }
            castImages  =  castImage.join(", ");
           
        // var post = response;
        // sessionStorage.setItem('p_id',post);
        // var Mydata ;
    }
    
});
// console.log(castImage);
let out = '';
for (let i = 0; i <castImage.length; i++) {
    const element = castImage[i];
    axios.get('https://api.themoviedb.org/3/person/'+castImage[i]+'?api_key='+tk()+'&language=en-US')
    .then((response)=>{
        // console.log(response)
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '...view more' : '';
            return str.substring(0, length)+dots;
          };
        let img = response.data.profile_path;
        let name = response.data.name;
        let id = response.data.id;
        let birthday = response.data.birthday;
        let biograph = response.data.biography;
        var biography = stringTruncate(biograph, 510);
        // console.log(biography);
        let place_of_birth = response.data.place_of_birth;
        // someString = 'the cat looks like a cat';
        let age = getAge(birthday);
        
        out += `
        <div class="col-md-12 col-lg-11 d-flex d-row opacs whits p-3">
        <div class= 'col-md-4'>
        <a onclick="castSelected('${id}')">
        <img src='https://image.tmdb.org/t/p/original${img}' alt=""  class="img-fluid d-none d-sm-block max  mb-0   p-1 mr-2 "> 
        <img src='https://image.tmdb.org/t/p/original${img}' alt=""  class="img-fluid d-sm-none w-100 h-100  mb-0   p-1 mr-2 "> 
        </a>
    </div>
    <div class= 'col-md-8'>
    <div class="ca mt-0 m-0 h-50 ">
    <a  onclick="castSelected('${id}')" class="text-dark">
           <div class="card-body p-0 m-0">
                <div class="card-title p-0 mb-0 m-0 mt-0">
                 <h5 class="m-0 mt-0 p-0">${name} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                 <p class="lead  m-0 p-0 d-none d-md-block">${biography}</p>   
                 <p class="m-0" >Birthday <i class="fa fa-birthday-cake" aria-hidden="true"></i>:  ${birthday}   &nbsp; Age: ${age}</p> 
                 <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                </div>
                    <div class="card-text mt-0 m-0">
                    <p class="m-0"></p>
                    <small class="text-muted m-0">Born : ${place_of_birth}.</small>
                </div>
                </a> 
        </div>
        </div>
        </div>
</div>
<div class="borders-top mx-4"></div>
       
        `;   
    //    console.log(out);
        $('.castDetails').html(out);
    })
}
// $.ajax({
//     type: 'post',
//     async: false,
//     url: 'insertimages.php',
//     data: {castImages:castImages, movieId:movieId} ,
//     Cache: false,
//     success: function(response){
//         console.log(response);
//         // Mydata = response;
//         // c_image =  response;
//         // var post = response;
//         // sessionStorage.setItem('p_id',post);
//         // var Mydata ;
//     }
// });
// console.log(c_image);

}
// console.log(castImage);
movieS =sessionStorage.getItem('Movie');

   if(movieId == null || movieId == ''){
       window.location.href  = 'https://movillla.com/index.php';
   }
//   let Quota = makeid(38);
//   console.log(Quota);
//    var php = <?php echo $string = base64_encode(openssl_random_pseudo_bytes(30));  ?>
// /
// const myData = function(data) {
//     name = data.name;
//     console.log('name:', name)
//     return name;
//   }
// var movieAs = sessionStorage.getItem('MovieS');
// // console.log(movieAs);
// var movieTitles = sessionStorage.getItem('MovieTitle');
// $.get('https://www.googleapis.com/customsearch/v1?key=AIzaSyB6YkK3XLaADkFO0n1EzSZxTOw3O2jHZUY&cx=494e0530ead5d15d6&searchType=image&quotaUser='+Quota+'&q='+movieTitles+'')
// .then((response)=>{
//     let imag = '';
//    console.log(response);
//    $.each(response.items, function(i,item){
//     //    console.log(item.link);
//     let image =    item.link;
//        imag += ` 
//        <div class="col-md-4 no-gutters">
//          <a href="${image}" data-toggle="lightbox" data-gallery="img-gallery" data-height="860" data-width="560" >     
//              <img src="${image}" alt="" class="img-fluid">
//          </a>
//        </div>
//        `;
//    });
//    $('#moves').html(imag);  
// })
 axios.get('http://www.omdbapi.com/?i='+movieId+'&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data;
            // const dataType = movie.Type;
           
            let typ = movie.Type;
            let Title = movie.Title;
            let country= movie.Country;
            let imdb_rating = movie.imdbRating;
            // var check = document.getElementById('inputval');
            // sessionStorage.setItem('movieTyp',typ);
            // var check = document.getElementById('inputval').value = typ;

            // var check = document.getElementById('inputval').value = typ;
            // inputid.value(typ);
            // console.log(inputid);
            var types = typ;
            let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
            let movieIm;
            let tyear;
            if(movieSeries == 'movie')
            $.ajax({
                type: 'get',
                async: false,
                data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
                url: 'https://api.themoviedb.org/3/movie/'+movieId+'?append_to_response=videos,images',
                Cache: false,
                dataType: "json",
                success: function(response){
                     console.log(response)
                    movieIm = response.images.backdrops[0].file_path; 
                    tyear = Number(response.release_date.substr(0, 4)) ;
                }
            });else{
                $.ajax({
                    type: 'get',
                    async: false,
                    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
                    url: 'https://api.themoviedb.org/3/tv/'+MyFind+'api_key='+tk()+'',
                    Cache: false,
                    dataType: "json",
                    success: function(response){
                        console.log(response)
                        tyear = Number(response.first_air_date.substr(0, 4));          
                        movieIm = response.backdrop_path; 
                    }
                })
            }

    //             if( window.localStorage )
    //   {
    //     if( !localStorage.getItem('firstLoad') )
    //     {
    //       localStorage['firstLoad'] = true;
    //       window.location.reload();
    //     }  
    //     else
    //       localStorage.removeItem('firstLoad');
    // }
            // var types = type;
            let output = '';
         
                output += `
                <div class="car mt-0   "style="color:white">
        <div class="card-body p-4">
        <h4 class="card-title d-none d-sm-block">${movie.Title} &nbsp;
        <i class="fa fa-star text-warning " aria-hidden="true"></i> ${imdb_rating}<small class='text-muted'>(${movie.imdbVotes})</small></h4>
            <h5 class="card-title d-sm-none">${movie.Title} &nbsp;  <i class="fa fa-star text-warning" aria-hidden="true"></i>${imdb_rating}<small>(${movie.imdbVotes})</small></h5>
            <div class="d-flex d-row">
            <p class="card-text text-muted"> Year: &nbsp; </p>
                 ${tyear}
               </div>
            <div class="" style="color:rgba(255, 255, 255, 0.7)">
            <div class="d-flex d-row my-auto" >
            <p class="text-muted">Genres</p> &nbsp; ${movie.Genre}
        </div>
        <div class="d-flex d-row  my-2">
            <p class="text-muted">Cast</p> &nbsp;${movie.Actors}
        </div>
        <div class="d-flex d-row  my-2">
            <p class="text-muted">Country</p> &nbsp;${country}
        </div>
        <div class="d-flex d-row my-auto">
          <a class="btn btn-primary text-light w-75 mr-2" href="#downloadmovie" ><i class="fas fa-download"></i> Download</a>
          <button class="btn btn-dark w-75 text-light w atch_later_true d-none" disabled  data-toggle="toolitp" data-placement="top" title="already added to watch later" data-content="">Added to Watch later</button>
            <button class="btn btn-dark w-75 text-light watch_later_false" onclick="watchFunction()"><i class="fas fa-plus "></i> Watch later</button>
           
        </div>
        <button class="btn btn-dark w-100 favourites_true d-none my-1" disabled  data-toggle="toolitp" data-placement="top" title="already added to favourites" data-content="">Added to favourites</button>
        <button class="btn btn-dark w-100 favourites_false my-1" onclick="favFunction()">
        <i class="fas favheart fa-heart "></i>   Add to Favourites</button>
        <div class="d-flex d-row my-2">
        <p class="text-muted" id= 'mes'>Type:</p> &nbsp;
            ${type}  &nbsp; <p class="text-muted">Runtime:</p> &nbsp;
            ${movie.Runtime}
        </div>
        <p class="text-muted" id= 'mes'><i class="fas fa-award"></i>:&nbsp; ${movie.Awards}</p>  
        </div>
    </div>
        </div>
            
            
                `;
                // console.log(movieId);

                let img = `
                <img src="https://image.tmdb.org/t/p/original${movieIm}" alt="" class="img-fluid wid mb-0  h-100 ml-3 w-100" style="border: 0px;" >
                `
                let about = `
            ${movie.Plot}
                `;
                let actors = `${movie.Actors}`;
                let genre = `
                ${movie.Genre}
                `;
                let title = `
            ${movie.Title}
                `;
                let rated = `${movie.Rated}`;
                let rates = `${movie.imdbRating}`;
                let Year = `  ${movie.Year}`;
                let Indie = `  ${movie.Type}`;
                    let images =` ${movie.Poster} `;
                let image = `
                <img src="https://image.tmdb.org/t/p/original${movieIm}" alt="" class=" pt-1 img-fluid h-25 w-100 iam">
                `
                let limages = 'https://image.tmdb.org/t/p/original'+movieIm+'';
            $('.unique').html(output);
            $('.wids').html(img);
            $('.abouts').html(about);
            $('.titles').html(title);
            $('.image').html(image);
            $.ajax({
            type: 'post',
            url: 'insertQuery.php',
            data: {images:limages, title: title, about:about,movieId:movieId, genre:genre, actors:actors, rated:rated, Year:Year, rates:rates, Indie:Indie, castImages:castImages} ,
            Cache: false,
            success: function(response){
                // console.log(response);
                var post = response;
                sessionStorage.setItem('p_id',post);
  
            $.ajax ({
            type: 'post',
            url: 'watchconfirm.php',
            data: { post:post} ,
            Cache: false,
            success: function(response){
                // console.log(response);
                var val = response;
                $(document).ready(()=>{
                    if(val == 'true'){
                        $('.watch_later_true').removeClass('d-none')
                        $('.watch_later_false').addClass('d-none')

                    }
                })

            }
            })
            $.ajax ({
                type: 'post',
                url: 'favconfirm.php',
                data: {post:post} ,
                Cache: false,
                success: function(response){
                    // console.log(response);
                    var val = response;
                    $(document).ready(()=>{
                        if(val == 'true'){
                            $('.favourites_true').removeClass('d-none')
                            $('.favourites_false').addClass('d-none')
    
                        }
                    })
    
                }
                })

            }
            
        })
     
        // return dataType;
        }) 
        // var Mydata ;

        // setTimeout(()=>{
        //     $.ajax({
        //         type: 'post',
        //         async: false,
        //         url: 'selectQuery.php',
        //         data: {movieId:movieId} ,
        //         Cache: false,
        //         success: function(response){
        //             // console.log(response);
        //             Mydata = response;
        //             // var post = response;
        //             // sessionStorage.setItem('p_id',post);
        //             // var Mydata ;
        //         }
        //     });
        //     // console.log(Mydata);
        //     var casts = Mydata.split(',');
        //     console.log(casts[0]);
        //    ;
           
//                    $.ajax({
//                        type: 'get',
//                 //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
//                    async: false,
//                    url: 'https://api.themoviedb.org/3/person/'+castImage[0]+'?api_key='+tk()+'&language=en-US',
//                 //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
//                    Cache: false,
//                    success: function(response){
//                        console.log(response);
//                        let ic;
//              let img = response.profile_path;
//                 console.log(img);
//                 let name =response.name
//                 ic += `
         
//                     <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//                     <h5>${name}</h5>
//                     <p class="lead">Main Cast</p>
//             </div>
//                 `
//             $('.castimage1').html(ic);
//                        // var post = response;
//                        // sessionStorage.setItem('p_id',post);
//                        // var Mydata ;
                
//                    }
//                 });
        
//                 $.ajax({
//                     type: 'get',
//              //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
//                 async: false,
//                 url: 'https://api.themoviedb.org/3/person/'+castImage[1]+'?api_key='+tk()+'&language=en-US',
//              //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
//                 Cache: false,
//                 success: function(response){
//                     console.log(response);
//                     let ic;
//           let img = response.profile_path;
//              console.log(img);
//              let name =response.name
//              ic += `
      
//                  <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//                  <h5>${name}</h5>
//                  <p class="lead">Main Cast</p>
//          </div>
//              `
//          $('.castimage2').html(ic);
//                     // var post = response;
//                     // sessionStorage.setItem('p_id',post);
//                     // var Mydata ;
             
//                 }
//              });
//              $.ajax({
//                 type: 'get',
//          //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
//             async: false,
//             url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'?api_key='+tk()+'&language=en-US',
//          //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
//             Cache: false,
//             success: function(response){
//                 console.log(response);
//                 let ic;
//       let img = response.profile_path;
//          console.log(img);
//          let name =response.name
//          ic += `
  
//              <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//              <h5>${name}</h5>
//              <p class="lead">Main Cast</p>
//      </div>
//          `
//      $('.castimage3').html(ic);
//                 // var post = response;
//                 // sessionStorage.setItem('p_id',post);
//                 // var Mydata ;
         
//             }
//          });
//          $.ajax({
//             type: 'get',
//      //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
//         async: false,
//         url: 'https://api.themoviedb.org/3/person/'+castImage[3]+'?api_key='+tk()+'&language=en-US',
//      //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
//         Cache: false,
//         success: function(response){
//             console.log(response);
//             let ic;
//   let img = response.profile_path;
//      console.log(img);
//      let name =response.name
//      ic += `

//          <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//          <h5>${name}</h5>
//          <p class="lead">Main Cast</p>
//  </div>
//      `
//  $('.castimage4').html(ic);
//             // var post = response;
//             // sessionStorage.setItem('p_id',post);
//             // var Mydata ;
     
//         }
//      });
//      $.ajax({
//         type: 'get',
//  //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
//     async: false,
//     url: 'https://api.themoviedb.org/3/person/'+castImage[4]+'?api_key='+tk()+'&language=en-US',
//  //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
//     Cache: false,
//     success: function(response){
//         let ic;
//         console.log(response);
// let img = response.profile_path;
//  console.log(img);
//  let name =response.name
//  ic += `

//      <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//      <h5>${name}</h5>
//      <p class="lead">Main Cast</p>
// </div>
//  `
// $('.castimage5').html(ic);
//         // var post = response;
//         // sessionStorage.setItem('p_id',post);
//         // var Mydata ;
 
//     }
//  });
//  $.ajax({
//     type: 'get',
// //    data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
// async: false,
// url: 'https://api.themoviedb.org/3/person/'+castImage[5]+'?api_key='+tk()+'&language=en-US',
// //    url: 'https://api.themoviedb.org/3/person/'+castImage[2]+'&language=en-US',
// Cache: false,
// success: function(response){
// let ic = '';
// let img = response.profile_path;
// console.log(img);
// let name =response.name
// ic += `

//  <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="img-fluid w-25 rounded-circle">
//  <h5>${name}</h5>
//  <p class="lead">Main Cast</p>
// </div>
// `
// $('.castimage6').html(ic);
//     // var post = response;
//     // sessionStorage.setItem('p_id',post);
//     // var Mydata ;

// }
// });
    //  },2000);

        // .then(myData)
       


    var movieType = sessionStorage.getItem('movieSeries');

        if(movieType == 'movie'){
            // console.log(post);
            // console.log(movieType);
            // axios.get('https://api.themoviedb.org/3/person/1213278?api_key='+tk()+'&language=en-US')
            // .then((response)=>{ss
            //     // console.log(response);
            // })
        //  console.log(movieId)
            
        var movieTitle = sessionStorage.getItem('MovieTitle');
        // console.log(movieTitle);
        axios.get('http://api.themoviedb.org/3/movie/'+movieId+'?api_key='+tk()+'&append_to_response=videos,images')
    .then((response)=>{
        // console.log(response);
        // console.log(response.data.videos);
        var budget = response.data.budget;
        var revenue = response.data.revenue;
        var status = response.data.status;
        var tagline = response.data.tagline;
        if(response.data.production_countries.length == 0){
            country = ' ';
        }
        else{
            country = response.data.production_countries[0].name;
        }
        let orginal_language = response.data.original_language;
        let mytable ='';
        mytable += `
         <tr>
                        <td>Budget</td>
                        <td>${budget}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>${status}</td>
                    </tr>
                    <tr>
                    <td>Revenue</td>
                    <td>${revenue}</td>
                </tr>
                    <tr>
                        <td>Tagline</td>
                        <td>${tagline}</td>
                    </tr> 
                    <tr>
                        <td>Country</td>
                        <td>${country}</td>
                    </tr>
                     <tr>
                        <td>Language</td>
                        <td>${orginal_language}</td>
                    </tr>
        `;
        $('.myTable').html(mytable);
        // console.log(mytable)
        let count = response.data.videos.results.length;
        if(count != 0){
        $.each(response.data.videos.results, function(i, item){
                // console.log(item.length);
                var videoId =    item.key;
                let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';
                // console.log(src);
                let trailer = `
            
            <iframe class="embed-responsive-item" src='' frameborder="0" height="500px"  allowfullscreen width="100%">
            
          </iframe>
                `;
                $('.videoId').html(trailer);
                // console.log(videoId)

                $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
                    //   stop the video
                    $("#videoModals iframe").attr("src", src);
                    });
                
        });
        $.each(response.data.videos.results, function(i, item){
            // console.log(item.length);
            let trailer = '';
            var videoId =    item.key;
            
            let src = '<h4 class="lead font-weight-bold">Trailers and Clips('+count+')</h4>';
            // console.log(src);
             trailer += `

             <div class="col-md-5 col-sm-8 col-10 opac">
             <a class="mt-5 pt-5"  href='https://www.youtube.com/embed/${videoId}'  data-toggle="lightbox" data-gallery="youtubevideos" data-width="1000" >  <img src="https://img.youtube.com/vi/${videoId}/maxresdefault.jpg" class="img-fluid myBorder"> 
           </a>
           </div> 
            `;
            
            $('.treasers').append(trailer);
            $('.counttrailers').html(src);
            // console.log(videoId)
    });
        
    }
    else{
     
        axios.get('https://www.googleapis.com/youtube/v3/search?part=snippet&q='+movieTitle+'&type=video&maxResults=1&chart=mostPopular&key=AIzaSyCyTZbqU8fc3b9QfioJa8L0ZRZ4Ia4vq3o')
        .then((response)=>{
            $.each(response.data.items, function(i, item){
                    // console.log(item.id.videoId);
                    var videoId =    item.id.videoId;
                    let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';

                    let trailer = `
                
                <iframe src=""  frameborder="0" height="350" allowfullscreen width="100%">
                
              </iframe>
                    `;
                    $('.videoId').html(trailer);
                    $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
                        //   stop the video
                        $("#videoModals iframe").attr("src", src);
                        });                    
            });
            
            $('.treasers').append(trailer);
  
        })
        .catch((err)=>{
            // console.log(err);
            let trailer = `
            
            Sorry This video isn't available right now please try again later
                `;
                $('.videoId').html(trailer);
        })

       
    }
        var imag = '';
        let    mainImg = `(${response.data.images.posters.length})`;
        let  mobiImg = `
        <h4 class="lead font-weight-bold">Images(${response.data.images.posters.length})</h4>
        `;
        for (let i = 0; i < response.data.images.posters.length; i++) {
            // console.log(response.data.images.posters)
            const posterd = response.data.images.posters[i].file_path;
            // var posterd = file_path[i];
            // console.log('fwfw');
            // console.log(posterd);
 
            
                      imag += ` 
            <div class="col-md-4 col-sm-5 col-5 gallery">
              <a href="https://image.tmdb.org/t/p/original${posterd}" data-toggle="lightbox" data-gallery="img-gallery" data-height="860" data-width="1260" >     
                  <img src="https://image.tmdb.org/t/p/original${posterd}" alt="" class="img-fluid opac myBorder">
              </a>
            </div>
            `;
            
        }
        $('.countImg').html(mobiImg);
        $('.mobiImg').html(imag);
        $('#moves').html(imag);
        $('.mainImg').html(mainImg);
    

    //     $.each(response.data.images.posters, function(i, items){
    //         console.log(items.file_path);
       
    //         var posterd =    items.file_path;
           
    //         imag += ` 
    //         <div class="col-md-4">
    //           <a href="https://image.tmdb.org/t/p/original${posterd}" data-toggle="lightbox" data-gallery="img-gallery" data-height="860" data-width="560" >     
    //               <img src="https://image.tmdb.org/t/p/original${posterd}" alt="" class="img-fluid">
    //           </a>
    //         </div>
    //         `;
         
        
    // });
        // $('#moves').html(imag);
    })
       .catch((err)=>{
            // console.log(err);
            let trailer = `
            
            Sorry This video isn't available right now please try again later
                `;
                $('.videoId').html(trailer);
        })
        }
  
       else {
        // const configHeaders ={
        //     "content-type": "application/json",
        //     "Accept": "application/json",
        //     "Access-Control-Allow-Origin": "*",
        // }
        // var url = 'http://www.imdb.com/title/tt2661044';
        // axios({
        //     url:'https://oneom.tk/serial/562',
        //     method: 'get',
        //     headers: configHeaders,
            
        // })
        // .then((response)=>{
        // console.log(response);
        // })
     
        var movieTitle = sessionStorage.getItem('MovieTitle');
        var episode= [];
        var episodes = [];
        var length;
        let image;
        // console.log(movieTitle);
        $.ajax({
            type: 'get',
            async: false,
            data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
            url: 'https://api.themoviedb.org/3/tv/'+MyFind+'?api_key='+tk()+'',
            Cache: false,
            dataType: "json",
            
            success: function(response){
                image = response.backdrop_path;
                    //  length = response.seasons.length;
                for (let i = 0; i <response.seasons.length; i++) {
                    const element = response.seasons[i].episode_count;
                    episode.push(element);
                    // console.log(episode)

                }
                episodes = episode.join(',');
            }
        })
        sessionStorage.setItem('episodeCount',episodes);
        sessionStorage.setItem('images',image);
        let streamOnline =`
        <button class="btn btn-info btn-block" onclick='streamSeries()'>Stream Online</button>
        `;
        $('.streamOnline').html(streamOnline);
        let season_no;
        $.ajax({
            type: 'get',
            async: false,
            data: { "api_key": "031e9be03fffd30038ed00ef72a8979d" },
            url: 'https://api.themoviedb.org/3/tv/'+MyFind+'?api_key='+tk()+'',
            Cache: false,
            dataType: "json",
            
            success: function(response){
                 season_no = response.number_of_seasons;
            }
        })
        axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'?api_key='+tk()+'&language=en-US&append_to_response=videos,images')
.then((response)=>{
    // console.log(response)
    var first_air_date = response.data.first_air_date;
    var status = response.data.status;
    var no_of_seaso = response.data.number_of_seasons;
    var no_of_episodes = response.data.number_of_episodes;
    var country = response.data.origin_country[0];
    let next_episode_to_air = response.data.next_episode_to_air;
    let orginalLanguage = response.data.original_language;
    let mytable ='';
    mytable += `
     <tr>
                    <td>First air Date</td>
                    <td>${first_air_date}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>${status}</td>
                </tr>
                <tr>
                    <td>No of season(s)</td>
                    <td>${no_of_seaso}</td>
                </tr> 
                <tr>
                <td>Country</td>
                <td>${country}</td>
            </tr> 
                <tr>
                    <td>Episodes count</td>
                    <td>${no_of_episodes}</td>
                </tr>
                <tr>
                <td>Next Episode</td>
                <td>${next_episode_to_air}</td>
            </tr>
                 <tr>
                    <td>Language(s)</td>
                    <td>${orginalLanguage}</td>
                </tr>
    `;
    $('.myTable').html(mytable);
    // console.log(mytable)
    response.data.seasons
    let count = response.data.videos.results.length;
    let no_of_season = response.data.number_of_seasons;
    sessionStorage.setItem('no_of_season', no_of_season);
    if(count != 0){
        $.each(response.data.videos.results, function(i, item){
        // console.log(item.key);
   
        var videoId =    item.key;
        let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';
        // console.log(src);
        let trailer = `
    
    <iframe  src='' frameborder="0" height="500" class="" allowfullscreen width="100%">
    
  </iframe>
        `;
        $('.videoId').html(trailer);
        // console.log(videoId)

        $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
            //   stop the video
            $("#videoModals iframe").attr("src", src);
            });
});
$.each(response.data.videos.results, function(i, item){
    // console.log(item.length);
    let trailer = '';
    var videoId =    item.key;
    let src = '<h4 class="lead font-weight-bold">Trailers and Clips('+count+')</h4>';
    // console.log(src);
     trailer += `

     <div class="col-md-5 col-sm-8 col-10 opac ">
     <a class="mt-5 pt-5"  href='https://www.youtube.com/embed/${videoId}'  data-toggle="lightbox" data-gallery="youtubevideos" data-width="1000" >  <img src="https://img.youtube.com/vi/${videoId}/maxresdefault.jpg" class="img-fluid myBorder"> 
   </a>
   </div> 
    `;
    $('.treasers').append(trailer);
    $('.counttrailers').html(src);
    // console.log(videoId)
});
}
else{

    axios.get('https://www.googleapis.com/youtube/v3/search?part=snippet&q='+movieTitle+'&type=video&maxResults=1&chart=mostPopular&key=AIzaSyCyTZbqU8fc3b9QfioJa8L0ZRZ4Ia4vq3o')
        .then((response)=>{
            // console.log(response);
            $.each(response.data.items, function(i, item){
                    // console.log(item.id.videoId);
                    var videoId =    item.id.videoId;
                    let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';

                    let trailer = `
                
                <iframe src=""  frameborder="0" height="350" allowfullscreen width="100%">
                
              </iframe>
                    `;
                    $('.videoId').html(trailer);
                    $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
                        //   stop the video
                        $("#videoModals iframe").attr("src", src);
                        });       
                    
            });
            
            
        })
        .catch((err)=>{
            // console.log(err);
            let trailer = `
            
            Sorry This video isn't available right now please try again later
                `;
                $('.videoId').html(trailer);
        })
}

})
axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'/season/'+season_no+'?api_key='+tk()+'&language=en-US')
.then((response)=>{
// console.log(response)
var imag = '';
const mainImg = `
<span class="">(${response.data.episodes.length})</span>
`;
const mobiImg = `
<h4 class="lead font-weight-bold">Images(${response.data.episodes.length})</h4>
`;
for (let i = 0; i < response.data.episodes.length; i++) {
  const element = response.data.episodes[i];
  img = element.still_path;
  imag += ` 
  <div class="col-md-5 col-8 gallery">
    <a href="https://image.tmdb.org/t/p/original${img}" data-toggle="lightbox" class='h-100' data-gallery="img-gallery">     
        <img src="https://image.tmdb.org/t/p/original${img}" alt="" class="opac  img-fluid myBorder">
    </a>
  </div>
  `;
}
$('.mainImg').html(mainImg);
$('#moves').html(imag);
$('.countImg').html(mobiImg);
$('.mobiImg').html(imag);

})
   
axios.get('https://api.themoviedb.org/3/tv/'+MyFind+'/similar?api_key='+tk()+'&language=en-US&page=1')
.then((response)=>{
    // console.log(response)
    let relates =`
    Related
    `;
    for (let i = 0; i < 4; i++) {
        var stringTruncate = function(str, length){
            var dots = str.length > length ? '..' : '';
            return str.substring(0, length)+dots;
          };
        const element = response.data.results[i];
        const id  = element.id;
        const img = element.poster_path;
        const titl = element.original_name;
        var title = stringTruncate(titl, 19);
        const release_date = element.first_air_date;
        var dob = release_date.toString();
        var year = Number(dob.substr(0, 4));
        output = `
        <div class= 'col-md-3 col-6'>
      <div class="card  my-0 mx-1 opac whit " style="border: none;" >
      <a   onclick="tmdbSelected('${id}')">    <img src="https://image.tmdb.org/t/p/original${img}" alt=""   class="card-img-top  w-75 h-25 img-fluid myBorder opac"></a>
    <div class="card-bod whit">
    <a href="#"  class="text-dark">
    <h4 class="my-0">${title}</h4>
    <h2 class="text-muted ">${year} </h2>
    </a>
    </div>
    </div>
    </div>
       `;  
      $('.related').html(relates)
       $('.similar').append(output);
    }
    
    })

    //             axios.get('https://www.googleapis.com/youtube/v3/search?part=snippet&q='+movieTitle+'&type=video&maxResults=1&chart=mostPopular&key=AIzaSyCyTZbqU8fc3b9QfioJa8L0ZRZ4Ia4vq3o')
    // .then((response)=>{
    //     $.each(response.data.items, function(i, item){
    //             console.log(item.id.videoId);
    //             var videoId =    item.id.videoId;
    //             let src = 'https://www.youtube.com/embed/'+videoId+'?autoplay=1';
     
    //             let trailer = `
            
    //         <iframe src=""  frameborder="0"  height="350" allowfullscreen width="100%">
            
    //       </iframe>
    //             `;
    //             $('.videoId').html(trailer);
    //             console.log(videoId)
                
    //             $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
    //                 //   stop the video
    //                 $("#videoModals iframe").attr("src", src);
    //                 });
                
    //     });
        
        
    // })
  
  
        // .catch((err)=>{
        //     console.log(err);
        //     let trailer = `
            
        //     Sorry This video isn't available right now please try again later
        //         `;
        //         $('.videoId').html(trailer);
        // })
    
        }
    
        
     
};
  

function getMovies(){
    let value = sessionStorage.getItem('movie');
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey='+ok()+'')
        .then((response)=>{
            console.log(response);
            let movie = response.data.Search;
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )"  href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )"   class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;
            })
            let count = movie.length;
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('.general').html(output);
            $('.count').html(count);
            $('.value').html(value);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
    axios.get('http://www.omdbapi.com/?s='+value+'&type=movie&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data.Search;
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
           <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )" href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                      <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )" class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;
            })
            let dont = `
            <div class="p-2">
                <div class="border-top" ></div>
                <div class="d-flex d-row">
                    <h5 class="my-3 mr-4">Country</h5>
        
                    <span class="arrow mt-3 ">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="" id="hideme2">
                <div class="form-check"  >
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" onclick="showfun()" name="" id="" value="checkedValue" >
                   <div class='d-flex d-row'> Movie (<div id="nos"></div>)</div>
                </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" onclick="showfu()" name="" id="" value="checkedValue" >
                      <div class='d-flex d-row'> Series (<div id="noa"></div>)</div>
                  </label>
                  </div>
           
                </div>
                </div>
            `;
            $('#type_class').html(dont);

            let count = movie.length;
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('.genera').html(output);
            $('.coun').html(count);
            $('.valu').html(value);
            $('#nos').text(count);
            $('#noa').text(count);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
        axios.get('http://www.omdbapi.com/?s='+value+'&type=series&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data.Search;
            let outputs = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                outputs += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a onclick="movieSelected('${movies.imdbID}')" href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a onclick="movieSelected('${movies.imdbID}')"  class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;
            })
            let count = movie.length;
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('.gener').html(outputs);
            $('#noa').text(count);
            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
        
     
}



function getMoviess(value){
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data.Search;
            let datas = response.data.Response;
            if(datas !='False'){
               
         
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )"  href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )"  href='#' class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;

            })
   let dont = `
            <div class="p-2">
                <div class="border-top" ></div>
                <div class="d-flex d-row">
                    <h5 class="my-3 mr-4">Country</h5>
        
                    <span class="arrow mt-3 ">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="" id="hideme2">
                <div class="form-check"  >
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" onclick="showfun()" name="" id="" value="checkedValue" >
                   <div class='d-flex d-row'> Movie (<div id="nos"></div>)</div>
                </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" onclick="showfu()" name="" id="" value="checkedValue" >
                      <div class='d-flex d-row'> Series (<div id="noa"></div>)</div>
                  </label>
                  </div>
           
                </div>
                </div>
            `;
            $('.general').html(output);
            let counts = movie.length;
            $('.counts').html(counts);
            $('#type_class').html(dont);

        }else{
         
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('#empty_result').html(empty);
            let counts = 'No';
            $('.counts').html(counts);
        }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
        
    axios.get('http://www.omdbapi.com/?s='+value+'&type=movie&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data.Search;
            let outpu = '';
            $.each(movie, (index, movies)=>{
                
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                outpu += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a   <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )" href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a   <a onclick="movieSelected('${movies.imdbID}','${movies.Type}','${movies.Title}' )"  class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;
            })
            let count = movie.length;
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('.genera').html(outpu);
            $('#nos').text(count);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
        
    axios.get('http://www.omdbapi.com/?s='+value+'&type=series&apikey='+ok()+'')
        .then((response)=>{
            // console.log(response);
            let movie = response.data.Search;
            let outputs = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                outputs += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a onclick="movieSelected('${movies.imdbID}')" href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a onclick="movieSelected('${movies.imdbID}')"  class="text-dark">
                   <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0">${movies.Title} <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"></p>   
                         <p class="m-0" >Type:  ${movies.Type}</p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
                            <small class="text-muted m-0">Year: ${movies.Year}.</small>
                        </div>
                        </a> 
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
               
                `;
            })
            let count = movie.length;
            let empty = `
            <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
            `;
            $('.gener').html(outputs);
            $('#noa').text(count);
            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            // console.log(err);
        })
        
}
     
function castSelected(id){
    sessionStorage.setItem('castId',id);
    window.location.href = 'castimage.php';
    return false;
}
