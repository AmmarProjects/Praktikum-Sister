$('#search-button').on('click', function(){
    $.ajax({
        url:'http://www.omdbapi.com',
        type:'get',
        dataType:'json',
        data:{
            'apikey' : 'f9de89c3',
            's' : $('#search-input').val()
        },
        success: function(result){
            let movies = result.Search
            if (result.Response == "True") {
                $.each(movies, function (i,data){
                    $('#movie-list').append(`
                    <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="`+data.Poster+`" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">`+data.Title+`</h5>
                            <p class="card-text">`+data.Year+`</p>
                            <a href="#" class="btn btn-primary see-detail" data-toggle="modal" data-target="#exampleModal" data-id="`+data.imdbID+`">View</a>
                        </div>
                    </div>
                </div>
                    `)
                })
            } else {
                $('#movie-list').html(`<div class="col">
                <h1 class="text-center">Movie Not Found</h1>
            </div>`)
            }
        }
    })
})

$('#movie-list').on('click', '.see-detail', function(){
    console.log($(this).data('id'))
    $.ajax({
        url:'http://www.omdbapi.com',
        type:'get',
        dataType:'json',
        data:{
            'apikey' : 'f9de89c3',
            'i' : $(this).data('id')
        },

        success: function(data){
            $('.modal-body').html(`<div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="`+data.Poster+`" alt="" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <ul class="list-grup">
                        <li class="list-group-item"><h1>`+data.Title+`</h1></li>
                        <li class="list-group-item">`+data.Genre+`</li>
                        <li class="list-group-item">`+data.Actors+`</li>
                    </ul>
                </div>
            </div>
        </div>`)
        }
    })
})