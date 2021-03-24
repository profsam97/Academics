


  function get_live_search(value){
    var values = value;
    if(values != ''){
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movies = response.data.Search;
            let output = '';
           movies = movies.slice(0,5);
            $.each(movies, (index, movie)=>{
                var  dots = (movie.Title.length > 35)?'...':'';
                var movs =   movie.Title.match(/.{1,25}/);
               var movi = movs[0] + dots;
                output += `
                <div class='col-md-6 col-lg-4 d-flex d-row opac whit p-1 m-0'>
                    <img src='${movie.Poster}'  alt=''  class='img-fluid rounded-circle  justify-content-start h-75   w-50 h-25 h-md-25  max p-1 mr-2 '> 
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
           "<a onclick="moviesSelected('${values}')"  href='#' class='btn btn-success btn-block p-2 m-2'>About ${response.data.Search.length} results; Click here to see all </a>";`
            
            $('.search_res').html(output);
        })
    
        .catch((err)=>{
            console.log(err);
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
// }
function movieSelected(id,type, title){
    sessionStorage.setItem('movieId',id);
    sessionStorage.setItem('movieSeries',type)
    sessionStorage.setItem('MovieTitle',title);
 
    window.location.href = 'movie.php';
    return false;
}
function movieSelecte(id){
    sessionStorage.setItem('movieId',id);
    window.location.href = '../movie.php';
    return false;
}
function moviesSelected(values){
    sessionStorage.setItem('movie',values);
    console.log('ys');
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
 function movie (){
 let movieId=  sessionStorage.getItem('movieId');
 //    let movieTy=  sessionStorage.getItem('movieTY');
 //    console.log(movieTy);
 console.log(makeid(38));
 axios.get('https://api.themoviedb.org/3/find/'+movieId+'?api_key=031e9be03fffd30038ed00ef72a8979d&language=en-US&external_source=imdb_id')
 .then((response)=>{
     console.log(response.data.tv_results);
     for (let i = 0; i < response.data.tv_results.length; i++) {
         const element = response.data.tv_results[i].id;
         sessionStorage.setItem('Movie',element);
     }
 })

}


function getMovie(){

movieS =sessionStorage.getItem('Movie');

   if(movieId == null || movieId == ''){
       window.location.href  = 'index.php';
   }
  let Quota = makeid(38);
  console.log(Quota);
//    var php = <?php echo $string = base64_encode(openssl_random_pseudo_bytes(30));  ?>
// /
// const myData = function(data) {
//     name = data.name;
//     console.log('name:', name)
//     return name;
//   }
// var movieAs = sessionStorage.getItem('MovieS');
// console.log(movieAs);
var movieTitles = sessionStorage.getItem('MovieTitle');
$.get('https://www.googleapis.com/customsearch/v1?key=AIzaSyB6YkK3XLaADkFO0n1EzSZxTOw3O2jHZUY&cx=494e0530ead5d15d6&searchType=image&quotaUser='+Quota+'&q='+movieTitles+'')
.then((response)=>{
    let imag = '';
   console.log(response);
   $.each(response.items, function(i,item){
    //    console.log(item.link);
    let image =    item.link;
       imag += ` 
       <div class="col-md-4 no-gutters">
         <a href="${image}" data-toggle="lightbox" data-gallery="img-gallery" data-height="860" data-width="560" >     
             <img src="${image}" alt="" class="img-fluid">
         </a>
       </div>
       `;
   });
   $('#moves').html(imag);  
})
 axios.get('http://www.omdbapi.com/?i='+movieId+'&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movie = response.data;
            // const dataType = movie.Type;
            let typ = movie.Type;
            let Title = movie.Title;
            // var check = document.getElementById('inputval');
            // sessionStorage.setItem('movieTyp',typ);
            // var check = document.getElementById('inputval').value = typ;

            // var check = document.getElementById('inputval').value = typ;
            // inputid.value(typ);
            // console.log(inputid);
            var types = typ;
            let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();

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
            <h4 class="card-title">${movie.Title} &nbsp;<span class="badge p-1 bg-warning" style=" color: #fff; border: 1px solid white;"> PG ${movie.Rated}</span></h4>
            <div class="d-flex d-row">
            <p class="card-text text-muted"> Year: &nbsp; </p>
                 ${movie.Year}
               </div>
            <div class="" style="color:rgba(255, 255, 255, 0.7)">
            <div class="d-flex d-row my-auto" >
            <p class="text-muted">Genres</p> &nbsp; ${movie.Genre}
        </div>
        <div class="d-flex d-row  my-2">
            <p class="text-muted">Cast</p> &nbsp;${movie.Actors}
        </div>
        <div class="d-flex d-row my-auto">
          <a class="btn btn-primary w-75 mr-2" href="#download" ><i class="fas fa-download"></i> Download</a>
          <button class="btn btn-dark w-75 watch_later_true d-none" disabled  data-toggle="toolitp" data-placement="top" title="already added to watch later" data-content="hdwdhw">Added to Watch later</button>
            <button class="btn btn-dark w-75 watch_later_false" onclick="watchFunction()"><i class="fas fa-plus "></i> Watch later</button>
        </div>
        <div class="d-flex d-row my-2">
        <p class="text-muted" id= 'mes'>Type:</p> &nbsp;
            ${type}  &nbsp; <p class="text-muted">Runtime:</p> &nbsp;
            ${movie.Runtime}
        </div>
        </div>
    </div>
        </div>
            
            
                `;
                // console.log(movieId);

                let img = `
                <img src="${movie.Poster}" alt="" class="img-fluid wid mb-0  h-100 ml-3 w-100" style="border: 0px;" >
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
                <img src="${movie.Poster}" alt="" class="img-fluid h-25 w-100 iam">
                `

            $('.unique').html(output);
            $('.wids').html(img);
            $('.abouts').html(about);
            $('.titles').html(title);
            $('.image').html(image);
            $.ajax({
            type: 'post',
            url: 'insertQuery.php',
            data: {images:images, title: title, about:about,movieId:movieId, genre:genre, actors:actors, rated:rated, Year:Year, rates:rates, Indie:Indie} ,
            Cache: false,
            success: function(response){
                // console.log(response);
                var post = response;
                sessionStorage.setItem('p_id',post);
            var Mydata ;
                $.ajax ({
            type: 'post',
            url: 'watchconfirm.php',
            data: { post:post} ,
            Cache: false,
            success: function(response){
                console.log(response);
                var val = response;
                Mydata = val;
                $(document).ready(()=>{
                    if(val == 'true'){
                        $('.watch_later_true').removeClass('d-none')
                        $('.watch_later_false').addClass('d-none')

                    }
                })
   
            }

            
            })

            console.log(Mydata);
            
            }
            
        })
     
        // return dataType;
        }) 
        // .then(myData)
        //     axios.get('https://www.googleapis.com/youtube/v3/search?part=snippet&q=the 100&type=video&key=AIzaSyCyTZbqU8fc3b9QfioJa8L0ZRZ4Ia4vq3o')
    // .then((response)=>{
    //     $.each(response.data.items, function(i, item){
    //             console.log(item.id.videoId);
    //             var videoId =    item.id.videoId;
    //             let trailer = `
            
    //         <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1"  frameborder="0" height="350" allowfullscreen width="100%">
            
    //       </iframe>
    //             `;
    //             $('.videoId').html(trailer);
    //             console.log(videoId)
                
    //     });
        
        
    // })
    var movieType = sessionStorage.getItem('movieSeries');

        if(movieType == 'movie'){
            // console.log(post);
            console.log(movieType);
            axios.get('https://api.themoviedb.org/3/person/1213278?api_key=031e9be03fffd30038ed00ef72a8979d&language=en-US')
            .then((response)=>{
                console.log(response);
            })
            axios.get('https://api.themoviedb.org/3/search/person?api_key=031e9be03fffd30038ed00ef72a8979d&language=en-US&query=Eliza Taylor')
            .then((response)=>{
                console.log(response.data.results);
                for (let i = 0; i < response.data.results.length; i++) {
                    const element = response.data.results[i].id;
                    console.log(element);
                    
                }
            })
            
        var movieTitle = sessionStorage.getItem('MovieTitle');
        console.log(movieTitle);
        axios.get('http://api.themoviedb.org/3/movie/'+movieId+'?api_key=031e9be03fffd30038ed00ef72a8979d&append_to_response=videos,images')
    .then((response)=>{
        console.log(response);
        // console.log(response.data.videos);
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
        var imag;
        for (let i = 0; i < response.data.images.posters.length; i++) {
            // console.log(response.data.images.posters)
            const posterd = response.data.images.posters[i].file_path;
            // var posterd = file_path[i];
            // console.log('fwfw');
            // console.log(posterd);
                      imag += ` 
            <div class="col-md-4">
              <a href="https://image.tmdb.org/t/p/original${posterd}" data-toggle="lightbox" data-gallery="img-gallery" data-height="860" data-width="560" >     
                  <img src="https://image.tmdb.org/t/p/original${posterd}" alt="" class="img-fluid">
              </a>
            </div>
            `;
        }
        $('#moves').html(imag);

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
            console.log(err);
            let trailer = `
            
            Sorry This video isn't available right now please try again later
                `;
                $('.videoId').html(trailer);
        })
        }
  
       else {
        var movieTitle = sessionStorage.getItem('MovieTitle');
        console.log(movieTitle);
        axios.get('https://api.themoviedb.org/3/tv/'+movieS+'?api_key=031e9be03fffd30038ed00ef72a8979d&language=en-US&append_to_response=videos,images')
.then((response)=>{
    console.log(response);
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
  
  
        .catch((err)=>{
            console.log(err);
            let trailer = `
            
            Sorry This video isn't available right now please try again later
                `;
                $('.videoId').html(trailer);
        })
    
        }
    
        
     
};
  

function getMovies(){
    let value = sessionStorage.getItem('movie');
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movie = response.data.Search;
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
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
            $('.general').html(output);
            $('.count').html(count);
            $('.value').html(value);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            console.log(err);
        })
    axios.get('http://www.omdbapi.com/?s='+value+'&type=movie&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movie = response.data.Search;
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
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
            $('.genera').html(output);
            $('.coun').html(count);
            $('.valu').html(value);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            console.log(err);
        })
}



function getMoviess(value){
    axios.get('http://www.omdbapi.com/?s='+value+'&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movie = response.data.Search;
            let datas = response.data.Response;
            if(datas !='False'){
               
         
            let output = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                output += `
                <div class="col-md-12 col-lg-11 d-flex d-row opac whit p-3">
        <a onclick="movieSelected('${movies.imdbID}')" href='#' class="">
            <img src='${movies.Poster}' alt=""  class="img-fluid justify-content-start h-100 mb-0 no-gutters max p-1 mr-2 "> </a>
            <div class="ca mt-0 m-0 h-50 ">
                   <a onclick="movieSelected('${movies.imdbID}')" href='#' class="text-dark">
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
            console.log(err);
        })
        
    axios.get('http://www.omdbapi.com/?s='+value+'&type=movie&apikey=f123e134')
        .then((response)=>{
            console.log(response);
            let movie = response.data.Search;
            let outpu = '';
            $.each(movie, (index, movies)=>{
                // var typ = movies.Type;
                // let type = typ.charAt(0).toUpperCase() + typ.slice(1).toLowerCase();
                outpu += `
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
            $('.genera').html(outpu);
            $('#nos').text(count);

            if(count == 0){
                $('.empty_result').html(empty);
            }
        }) 
        .catch((err)=>{
            console.log(err);
        })
        
    axios.get('http://www.omdbapi.com/?s='+value+'&type=series&apikey=f123e134')
        .then((response)=>{
            console.log(response);
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
            console.log(err);
        })
        
}
     
