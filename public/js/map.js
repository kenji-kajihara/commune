var mayMap;
var service;
var latlng = new google.maps.LatLng(35.729756, 139.711069);
 
function initialize() {
    // googleマップ表示設定
    var initPos = latlng;
    var opts = {
        zoom: 16,
        center: initPos,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: true,
        scaleControl: true,
        panControl:true,
    };
    myMap = new google.maps.Map(document.getElementById("gmapBlock"), opts);
 
    // googleマップマーカー設定
   var markerOptions = {
        position: initPos,
        map: myMap,
        
    };
    var marker = new google.maps.Marker(markerOptions);
 
 
    // 検索の条件を指定（緯度経度、半径、検索の分類）
    var request = {
        location: initPos,
        radius: 1000,
        types: ['movie_theater']
    };
    var service = new google.maps.places.PlacesService(myMap);
    service.search(request, Result_Places);
}
 
// 検索結果を受け取る
function Result_Places(results, status){
    if(status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker({
                 text : place.name,
                 position : place.geometry.location
            });
        }
    }
}
 
// 入力キーワードと表示範囲を設定
function SearchGo() {
    var initPos = latlng;
    var mapOptions = {
        center : initPos,
        zoom: 16,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    };
    myMap = new google.maps.Map(document.getElementById("gmapBlock"), mapOptions);
    service = new google.maps.places.PlacesService(myMap);
    // input要素に入力されたキーワードを検索の条件に設定
    var myword = document.getElementById("search");
    var request = {
        query : myword.value,
        radius : 3000,
        location : myMap.getCenter()
    };
    service.textSearch(request, result_search);
}
 
 
// 検索の結果を受け取る
function result_search(results, status) {
    var bounds = new google.maps.LatLngBounds();
    for(var i = 0; i < results.length; i++){
        createMarker({
             position : results[i].geometry.location,
             text : results[i].name,
             map : myMap
         });
        bounds.extend(results[i].geometry.location);
    }
    myMap.fitBounds(bounds);
}
 
// 該当する位置にマーカーを表示
function createMarker(options) {
    options.map = myMap;
    var marker = new google.maps.Marker(options);
    var infoWnd = new google.maps.InfoWindow();
    infoWnd.setContent(options.text);
    google.maps.event.addListener(marker, 'click', function(){
        infoWnd.open(myMap, marker);
    });
    return marker;
}

 
// ページ読み込み完了後、Googleマップを表示
google.maps.event.addDomListener(window, 'load', initialize);