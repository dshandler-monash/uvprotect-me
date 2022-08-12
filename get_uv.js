function httpGet(theUrl) {
    // http request for a specific url, posts to console and return JSON response
    var request = new XMLHttpRequest();
    //Open URL
    request.open( "GET", theUrl, false ); // false for synchronous request
    request.send();
    if (request.status == 200){
        //If successful response log response and return
        response = JSON.parse(request.response)
        return response;
    } else {
        //If unsuccessful response log error code and text
        console.log(`error ${request.status} ${request.statusText}`);
    }
}

function get_data(el){
    var x = document.getElementById('suburb-name-id').value;
    console.log(x);
    var lat;
    var lon;
    switch (x) {
        case "Albury":
            lat = -36.08,
            lon = 146.91;
            break;
        case "Ballarat":
            lat = -37.56,
            lon = 143.82;
            break;
        case "Bendigo":
            lat = -36.76,
            lon = 144.28;
            break;
        case "Box Hill":
            lat = -37.82,
            lon =  145.12;
            break;
        case "Brunswick":
            lat = -37.76,
            lon = 144.94;
            break;
        case "Clayton":
            lat = -37.93,
            lon = 145.12;
            break;
        case "Camberwell":
            lat = -37.82,
            lon = 145.06;
            break;
        case "Caulfield":
            lat = -37.88,
            lon = 145.03;
            break;
        case "Dandenong":
            lat = -38.03,
            lon = 145.18;
            break;
        case "Frankston":
            lat = -38.15,
            lon = 145.12;
            break;
        case "Geelong":
            lat = -38.18,
            lon = 145.11;
            break;
        case "Glen Waverley":
            lat = -37.88,
            lon = 145.17;
            break;
        case "Mornington":
            lat = -38.24,
            lon = 145.06;
            break;
        case "Mount Buller":
            lat = -36.89,
            lon = 146.26;
            break;
        case "Pakenham":
            lat = -38.08,
            lon = 145.49;
            break;
        case "Phillip Island":
            lat = -38.45,
            lon = 145.24;
            break;
        case "Torquay":
            lat = -38.33,
            lon = 144.26;
            break;
        default:
            lat = -37.93,
            lon = 145.12;
    }
    
    var url_call = 'https://api.openweathermap.org/data/2.5/onecall?lat=' + lat + '&lon=' + lon + '&exclude=minutely,daily,alerts&appid=29f32a874ef287325631c36c8d516251';
    
    response = httpGet(url_call)
    arr_forecast = []
    arr_date = []
    
    for (i=0;i < 48; i++) {
        arr_forecast.push(response['hourly'][i]['uvi'])
        var forecast_date = new Date(response['hourly'][i]['dt']*1000);
        arr_date.push(forecast_date)
        
    }

    var x = document.getElementById('UV-value');

    var new_uv = response['current']['uvi']
    console.log(arr_forecast)
    x.textContent = x + " UV-index:  " + new_uv;
        
        
   

    return response['current']['uvi']
}



response = get_data()
