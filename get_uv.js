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

function get_data(){

    var citySuburb = document.querySelector('#suburb-name-id').value;
    console.log('option[value="'+citySuburb+'"]');
    var pk = document.querySelector('option[value="'+citySuburb+'"]').id;
    var suburb = citySuburb.split(',');
    var postcode = citySuburb.split(', ');
    console.log(citySuburb);
    console.log(suburb);
    console.log(postcode);
    console.log(pk)
    var lat;
    var lon;
    
    //var url_call = 'https://api.openweathermap.org/data/2.5/onecall?lat=' + lat + '&lon=' + lon + '&exclude=minutely,daily,alerts&appid=29f32a874ef287325631c36c8d516251';
    
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
    x.textContent = city + " UV-index:  " + new_uv;
    console.log(arr_forecast)
    console.log(city)
    
        
        
   

    return response['current']['uvi']
}



response = get_data()
