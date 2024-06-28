let myMap = L.map('myMap').setView([37.3497418776796, -5.859640181588476], 13)

L.tileLayer(`https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png`, {
	maxZoom: 18,
}).addTo(myMap);



let iconMarker = L.icon({
    iconUrl: 'imagenes/marker.png',
    iconSize: [60, 60],
    iconAnchor: [30, 60]
})

let marker2 = L.marker([37.3497418776796, -5.859640181588476], { icon: iconMarker }).addTo(myMap)


    myMap.on('click', e =>{
        let latLng = myMap.mouseEventToLatLng(e.originalEvent)
        console.log(latLng)
    })


myMap.doubleClickZoom.disable()
myMap.on('dblclick', e => {
  let latLng = myMap.mouseEventToLatLng(e.originalEvent);

  L.marker([latLng.lat, latLng.lng], { icon: iconMarker }).addTo(myMap)
})

navigator.geolocation.getCurrentPosition(
  (pos) => {
    const { coords } = pos
    const { latitude, longitude } = coords
    L.marker([latitude, longitude], { icon: iconMarker }).addTo(myMap)

    setTimeout(() => {
      myMap.panTo(new L.LatLng(latitude, longitude))
    }, 5000)
  },
  (error) => {
    console.log(error)
  },
  {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  })