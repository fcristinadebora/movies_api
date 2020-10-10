# Endpoints


## List Upcoming movies


List the upcoming movies, showing 20 items each page

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movies/upcoming?page=17" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movies/upcoming"
);

let params = {
    "page": "17",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "results": [],
    "page": 17,
    "total_results": 264,
    "dates": {
        "maximum": "2020-11-02",
        "minimum": "2020-10-16"
    },
    "total_pages": 14
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/movies/upcoming`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>page</b></code>&nbsp; <small>integer</small>         <i>optional</i>    <br>
    The page number. Defaults to 1



## List Top rated movies


List the top rated movies, showing 20 items each page

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movies/top-rated?page=7" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movies/top-rated"
);

let params = {
    "page": "7",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "page": 7,
    "total_results": 7864,
    "total_pages": 394,
    "results": [
        {
            "popularity": 7.581,
            "vote_count": 231,
            "video": false,
            "poster_path": "\/A9UDEIiiQXzg8PLtbdimtV1bC5u.jpg",
            "id": 28422,
            "adult": false,
            "backdrop_path": "\/jEnh78WU2kxjCFaCdRh2r6ZDbfP.jpg",
            "original_language": "ja",
            "original_title": "愛のむきだし",
            "genre_ids": [
                28,
                35,
                18,
                10749
            ],
            "title": "Love Exposure",
            "vote_average": 8.2,
            "overview": "The story of a teenage boy named Yu, who falls for Yoko, a girl he runs into while working as an \"up-skirt\" photographer in an offshoot of the porn industry. His attempts to woo her are complicated by a spot of cross-dressing - which convinces Yoko that she is lesbian - dalliances with kung-fu and crime, and a constant struggle with the guilt that's a legacy of his Catholic upbringing.",
            "release_date": "2009-01-31"
        },
        {
            "popularity": 9.026,
            "vote_count": 813,
            "video": false,
            "poster_path": "\/wJUJROdLOtOzMixkjkx1aaZGSLl.jpg",
            "id": 455661,
            "adult": false,
            "backdrop_path": "\/6DwR9kIUvsWq434d7NFLWroHTdI.jpg",
            "original_language": "en",
            "original_title": "In a Heartbeat",
            "genre_ids": [
                16,
                35,
                10749,
                10751
            ],
            "title": "In a Heartbeat",
            "vote_average": 8.2,
            "overview": "A closeted boy runs the risk of being outed by his own heart after it pops out of his chest to chase down the boy of his dreams.",
            "release_date": "2017-06-01"
        },
        {
            "popularity": 13.32,
            "vote_count": 475,
            "video": false,
            "poster_path": "\/1G9r3rqtbFAQuyWKOZm4Y5J5s7Q.jpg",
            "id": 992,
            "adult": false,
            "backdrop_path": "\/v2SCnNZDZ7USonAWnsGtL4PUqHt.jpg",
            "original_language": "en",
            "original_title": "Sherlock Jr.",
            "genre_ids": [
                28,
                35,
                9648
            ],
            "title": "Sherlock Jr.",
            "vote_average": 8.2,
            "overview": "A film projectionist longs to be a detective, and puts his meagre skills to work when he is framed by a rival for stealing his girlfriend's father's pocketwatch.",
            "release_date": "1924-04-17"
        },
        {
            "popularity": 14.519,
            "id": 439,
            "video": false,
            "vote_count": 1100,
            "vote_average": 8.2,
            "title": "La Dolce Vita",
            "release_date": "1960-02-05",
            "original_language": "it",
            "original_title": "La dolce vita",
            "genre_ids": [
                35,
                18
            ],
            "backdrop_path": "\/zPbu0CFnAT2kYfbGWjgZBTajmzi.jpg",
            "adult": false,
            "overview": "Journalist and man-about-town Marcello struggles to find his place in the world, torn between the allure of Rome's elite social scene and the stifling domesticity offered by his girlfriend, all the while searching for a way to become a serious writer.",
            "poster_path": "\/xgqVtaGbITWeIYR3mkYo39bRd36.jpg"
        },
        {
            "popularity": 21.912,
            "id": 77,
            "video": false,
            "vote_count": 10067,
            "vote_average": 8.2,
            "title": "Memento",
            "release_date": "2000-10-11",
            "original_language": "en",
            "original_title": "Memento",
            "genre_ids": [
                9648,
                53
            ],
            "backdrop_path": "\/q2CtXYjp9IlnfBcPktNkBPsuAEO.jpg",
            "adult": false,
            "overview": "Leonard Shelby is tracking down the man who raped and murdered his wife. The difficulty of locating his wife's killer, however, is compounded by the fact that he suffers from a rare, untreatable form of short-term memory loss. Although he can recall details of life before his accident, Leonard cannot remember what happened fifteen minutes ago, where he's going, or why.",
            "poster_path": "\/uprP8rtOgMYJQ2h3ldDFvGsaBgH.jpg"
        },
        {
            "popularity": 15.357,
            "vote_count": 1026,
            "video": false,
            "poster_path": "\/nW0cCpfuGcR1JG7EinDbdL2Ijf2.jpg",
            "id": 996,
            "adult": false,
            "backdrop_path": "\/u546kDNwrZ1ii6q8NqqQgHwRvoW.jpg",
            "original_language": "en",
            "original_title": "Double Indemnity",
            "genre_ids": [
                80,
                18,
                9648,
                53
            ],
            "title": "Double Indemnity",
            "vote_average": 8.2,
            "overview": "A rich woman and a calculating insurance agent plot to kill her unsuspecting husband after he signs a double indemnity policy. Against a backdrop of distinctly Californian settings, the partners in crime plan the perfect murder to collect the insurance, which pays double if the death is accidental.",
            "release_date": "1944-06-14"
        },
        {
            "popularity": 81.482,
            "vote_count": 887,
            "video": false,
            "poster_path": "\/921q4gPNN4J6UxvKaw6SCNBe3F8.jpg",
            "id": 606856,
            "adult": false,
            "backdrop_path": "\/2Jr2OBzoLLOYqQWnyN4eicZv0sL.jpg",
            "original_language": "en",
            "original_title": "Togo",
            "genre_ids": [
                12,
                18,
                36,
                10751
            ],
            "title": "Togo",
            "vote_average": 8.2,
            "overview": "The untold true story set in the winter of 1925 that takes you across the treacherous terrain of the Alaskan tundra for an exhilarating and uplifting adventure that will test the strength, courage and determination of one man, Leonhard Seppala, and his lead sled dog, Togo.",
            "release_date": "2019-12-19"
        },
        {
            "popularity": 26.807,
            "vote_count": 7337,
            "video": false,
            "poster_path": "\/ekstpH614fwDX8DUln1a2Opz0N8.jpg",
            "id": 103,
            "adult": false,
            "backdrop_path": "\/a58oc5qGNazb3QOxEH8eG5S7gjr.jpg",
            "original_language": "en",
            "original_title": "Taxi Driver",
            "genre_ids": [
                80,
                18
            ],
            "title": "Taxi Driver",
            "vote_average": 8.2,
            "overview": "A mentally unstable Vietnam War veteran works as a night-time taxi driver in New York City where the perceived decadence and sleaze feed his urge for violent action, attempting to save a preadolescent prostitute in the process.",
            "release_date": "1976-02-09"
        },
        {
            "popularity": 12.723,
            "vote_count": 1076,
            "video": false,
            "poster_path": "\/bLzs8RpBe4IuNuUlQJjctzwq09G.jpg",
            "id": 399106,
            "adult": false,
            "backdrop_path": "\/5VntWbNVfT46Yl3UldqS6v1XxG6.jpg",
            "original_language": "en",
            "original_title": "Piper",
            "genre_ids": [
                16,
                10751
            ],
            "title": "Piper",
            "vote_average": 8.2,
            "overview": "A mother bird tries to teach her little one how to find food by herself. In the process, she encounters a traumatic experience that she must overcome in order to survive.",
            "release_date": "2016-06-16"
        },
        {
            "popularity": 33.518,
            "vote_count": 15476,
            "video": false,
            "poster_path": "\/7sfbEnaARXDDhKm0CZ7D7uc2sbo.jpg",
            "id": 16869,
            "adult": false,
            "backdrop_path": "\/50VD6QU0NX0aRB6ftKCVWun80bm.jpg",
            "original_language": "en",
            "original_title": "Inglourious Basterds",
            "genre_ids": [
                28,
                18,
                53,
                10752
            ],
            "title": "Inglourious Basterds",
            "vote_average": 8.2,
            "overview": "In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as \"The Basterds\" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis. The Basterds, lead by Lt. Aldo Raine soon cross paths with a French-Jewish teenage girl who runs a movie theater in Paris which is targeted by the soldiers.",
            "release_date": "2009-08-18"
        },
        {
            "popularity": 58.655,
            "vote_count": 263,
            "video": false,
            "poster_path": "\/wpC0bIYYfAY0wLa8sjlzIspMQr4.jpg",
            "id": 610461,
            "adult": false,
            "backdrop_path": "\/ebKa6nCRkKWU3KIuacEkEe6XSQl.jpg",
            "original_language": "es",
            "original_title": "Veinteañera, divorciada y fantástica",
            "genre_ids": [
                35
            ],
            "title": "Veinteañera, divorciada y fantástica",
            "vote_average": 8.2,
            "overview": "Regina, our young protagonist, always dreamed of getting married. And she did it - but the dream lasted much less than she thought and now she has to face life in a very funny way as a divorcee.",
            "release_date": "2020-02-14"
        },
        {
            "popularity": 16.881,
            "id": 872,
            "video": false,
            "vote_count": 1897,
            "vote_average": 8.2,
            "title": "Singin' in the Rain",
            "release_date": "1952-04-09",
            "original_language": "en",
            "original_title": "Singin' in the Rain",
            "genre_ids": [
                35,
                10402,
                10749
            ],
            "backdrop_path": "\/kOJHfBhGCeBjLjAWw2SHLAztlmf.jpg",
            "adult": false,
            "overview": "In 1927 Hollywood, a silent film production company and cast make a difficult transition to sound.",
            "poster_path": "\/62plaLItfJDXKcLUJdOQ35wASms.jpg"
        },
        {
            "popularity": 23.265,
            "id": 19,
            "video": false,
            "vote_count": 1594,
            "vote_average": 8.2,
            "title": "Metropolis",
            "release_date": "1927-03-06",
            "original_language": "de",
            "original_title": "Metropolis",
            "genre_ids": [
                18,
                878
            ],
            "backdrop_path": "\/r8pUcom5Mw8igtBpj3AHSAUvH0R.jpg",
            "adult": false,
            "overview": "In a futuristic city sharply divided between the working class and the city planners, the son of the city's mastermind falls in love with a working class prophet who predicts the coming of a savior to mediate their differences.",
            "poster_path": "\/vODOVn29fr0nLF9MVfpfKDcxuXF.jpg"
        },
        {
            "popularity": 27.105,
            "vote_count": 10621,
            "video": false,
            "poster_path": "\/pvSESD7ujxWZwtYDb9l57qE0ywq.jpg",
            "id": 1124,
            "adult": false,
            "backdrop_path": "\/yCnJT53HMXAK87xzPAdjdYhZ3JE.jpg",
            "original_language": "en",
            "original_title": "The Prestige",
            "genre_ids": [
                18,
                9648,
                53
            ],
            "title": "The Prestige",
            "vote_average": 8.2,
            "overview": "A mysterious story of two magicians whose intense rivalry leads them on a life-long battle for supremacy -- full of obsession, deceit and jealousy with dangerous and deadly consequences.",
            "release_date": "2006-10-19"
        },
        {
            "popularity": 10.746,
            "vote_count": 361,
            "video": false,
            "poster_path": "\/iXVaWbxmyPk4KZGZk5GGDGFieMX.jpg",
            "id": 437068,
            "adult": false,
            "backdrop_path": "\/dbXjTu5J00kCggPnQlDpVZmDBil.jpg",
            "original_language": "ko",
            "original_title": "택시운전사",
            "genre_ids": [
                28,
                18,
                36
            ],
            "title": "A Taxi Driver",
            "vote_average": 8.2,
            "overview": "May, 1980. Man-seob is a taxi driver in Seoul who lives from hand to mouth, raising his young daughter alone. One day, he hears that there is a foreigner who will pay big money for a drive down to Gwangju city. Not knowing that he’s a German journalist with a hidden agenda, Man-seob takes the job.",
            "release_date": "2017-08-02"
        },
        {
            "popularity": 10.277,
            "vote_count": 4265,
            "video": false,
            "poster_path": "\/8kSerJrhrJWKLk1LViesGcnrUPE.jpg",
            "id": 100,
            "adult": false,
            "backdrop_path": "\/tY6zVyt0OubPgCapbXFJLKhQqSu.jpg",
            "original_language": "en",
            "original_title": "Lock, Stock and Two Smoking Barrels",
            "genre_ids": [
                35,
                80
            ],
            "title": "Lock, Stock and Two Smoking Barrels",
            "vote_average": 8.2,
            "overview": "A card shark and his unwillingly-enlisted friends need to make a lot of cash quick after losing a sketchy poker match. To do this they decide to pull a heist on a small-time gang who happen to be operating out of the flat next door.",
            "release_date": "1998-03-05"
        },
        {
            "popularity": 17.295,
            "id": 10494,
            "video": false,
            "vote_count": 1028,
            "vote_average": 8.2,
            "title": "Perfect Blue",
            "release_date": "1997-07-25",
            "original_language": "ja",
            "original_title": "パーフェクトブルー",
            "genre_ids": [
                16,
                53
            ],
            "backdrop_path": "\/dVanL4a1kx0mXeZSOhVWSiJ27Pa.jpg",
            "adult": false,
            "overview": "A retired pop singer turned actress' sense of reality is shaken when she is stalked by an obsessed fan and seemingly a ghost of her past.",
            "poster_path": "\/79vujbsWEbX4dzffBV541QXN6sf.jpg"
        },
        {
            "popularity": 9.559,
            "vote_count": 240,
            "video": false,
            "poster_path": "\/pItF5SpDeXBj10mA8hbCVgDAsyb.jpg",
            "id": 9764,
            "adult": false,
            "backdrop_path": "\/7byBh4ZuZxsvRnSrcvlFqwHebna.jpg",
            "original_language": "ru",
            "original_title": "Дерсу Узала",
            "genre_ids": [
                28,
                12,
                18
            ],
            "title": "Dersu Uzala",
            "vote_average": 8.2,
            "overview": "A military explorer meets and befriends a Goldi man in Russia’s unmapped forests. A deep and abiding bond evolves between the two men, one civilized in the usual sense, the other at home in the glacial Siberian woods.",
            "release_date": "1975-08-02"
        },
        {
            "popularity": 20.552,
            "vote_count": 2128,
            "video": false,
            "poster_path": "\/hVIKyTK13AvOGv7ICmJjK44DTzp.jpg",
            "id": 239,
            "adult": false,
            "backdrop_path": "\/m7v4Qi1y7UFgMZn2sIWoTXDpYSu.jpg",
            "original_language": "en",
            "original_title": "Some Like It Hot",
            "genre_ids": [
                35,
                10402,
                10749
            ],
            "title": "Some Like It Hot",
            "vote_average": 8.2,
            "overview": "Two musicians witness a mob hit and struggle to find a way out of the city before they are found by the gangsters. Their only opportunity is to join an all-girl band as they leave on a tour. To make their getaway they must first disguise themselves as women, then keep their identities secret and deal with the problems this brings - such as an attractive bandmate and a very determined suitor.",
            "release_date": "1959-03-19"
        },
        {
            "popularity": 282.702,
            "vote_count": 15063,
            "video": false,
            "poster_path": "\/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg",
            "id": 475557,
            "adult": false,
            "backdrop_path": "\/n6bUvigpRFqSwmPp1m2YADdbRBc.jpg",
            "original_language": "en",
            "original_title": "Joker",
            "genre_ids": [
                80,
                18,
                53
            ],
            "title": "Joker",
            "vote_average": 8.2,
            "overview": "During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.",
            "release_date": "2019-10-02"
        }
    ]
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/movies/top-rated`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>page</b></code>&nbsp; <small>integer</small>         <i>optional</i>    <br>
    The page number. Defaults to 1



## Movie details


Show details from the given movie and all related movies

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movies/9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movies/9"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json

{
    "adult": false,
    "backdrop_path": "\/7c9UVPPiTPltouxRVY6N9uugaVA.jpg",
    "belongs_to_collection": null,
    "budget": 55000000,
    "genres": [
        {
            "id": 35,
            "name": "Comedy"
        },
        {
            "id": 18,
            "name": "Drama"
        },
        {
            "id": 10749,
            "name": "Romance"
        }
    ],
    "homepage": "",
    "id": 13,
    "imdb_id": "tt0109830",
    "original_language": "en",
    "original_title": "Forrest Gump",
    "overview": "A man with a low IQ has accomplished great things in his life and been present during significant historic events\u2014in each case, far exceeding what anyone imagined he could do. But despite all he has achieved, his one true love eludes him.",
    "popularity": 35.629,
    "poster_path": "\/clolk7rB5lAjs41SD0Vt6IXYLMm.jpg",
    "production_companies": [
        {
            "id": 4,
            "logo_path": "\/fycMZt242LVjagMByZOLUGbCvv3.png",
            "name": "Paramount",
            "origin_country": "US"
        }
    ],
    "production_countries": [
        {
            "iso_3166_1": "US",
            "name": "United States of America"
        }
    ],
    "release_date": "1994-07-06",
    "revenue": 677387716,
    "runtime": 142,
    "spoken_languages": [
        {
            "iso_639_1": "en",
            "name": "English"
        }
    ],
    "status": "Released",
    "tagline": "Life is like a box of chocolates...you never know what you're gonna get.",
    "title": "Forrest Gump",
    "video": false,
    "vote_average": 8.5,
    "vote_count": 18990,
    "related": [
        {
            "adult": false,
            "backdrop_path": "\/6esNUoXh4xQvucB7o7e3TCfjI65.jpg",
            "genre_ids": [
                35,
                18,
                10749
            ],
            "id": 522924,
            "original_language": "en",
            "original_title": "The Art of Racing in the Rain",
            "overview": "A family dog\u2014with a near-human soul and a philosopher's mind\u2014evaluates his life through the lessons learned by his human owner, a race-car driver.",
            "poster_path": "\/mi5VN4ww0JZgRFJIaPxxTGKjUg7.jpg",
            "release_date": "2019-08-08",
            "title": "The Art of Racing in the Rain",
            "video": false,
            "vote_average": 8.4,
            "vote_count": 631,
            "popularity": 34.464
        }, ...
    ]
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/movies/{movieId}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>movieId</b></code>&nbsp; <small>integer</small>     <br>
    The ID of the movie



## List genres


List all the movie genres

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/genres?id=11" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/genres"
);

let params = {
    "id": "11",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json

{
   "genres": [
       {
           "id": 28,
           "name": "Action"
       },
       {
           "id": 12,
           "name": "Adventure"
       },
       ...
   ]
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/genres`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>integer</small>         <i>optional</i>    <br>
    The genre id. If provided, the application will return just one position in "genres" array: the found (or not) genre




