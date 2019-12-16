
    function getFilm(keyword) {
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {

    let films = JSON.parse(xhr.response);
    showFilm(films.Search);
    }
    }
    xhr.open('get', 'http://www.omdbapi.com/?apikey=1e36500c&s=' + keyword);
    xhr.send();
    }


    //tampil film
    function showFilm(films) {
        if (!films) {
            filmList.innerHTML = '<p class="alert alert-danger">not found</p>';
            return;
        }
        let cards = '';
        films.forEach(function (film) {
            cards += `<div class="col-4 my-3">
            <div class="card">
            <img src="${film.Poster}" class="card-img-top" height="600">
            <div class="card-body">
            <h5 class="card-title">${film.Title}</h5>
            <h6 class="card-subtitle mb-2 text-muted">${film.Year}</h6>
            <a href="detail.php?id=${film.imdbID}" class="btn btn-primary">Show Detail</a>
            </div>
            </div>
            </div>`;
        });
        filmList.innerHTML = cards;
    }

    let filmList = document.querySelector('.movie-list');
    let inputKeyword = document.querySelector('.input-keyword');
    let buttonSearch = document.querySelector('.button-search');

    getFilm('Transformers');

    buttonSearch.addEventListener('click', function () {
        getFilm(inputKeyword.value);
    });