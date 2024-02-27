const { error } = require('console');
const fs = require('fs');

const key = 'AIzaSyCFOe8jC0NWPr-qG-55j7II02ZhoBwfKLo';

const blumenau = {
    lat: '-26.8560081',
    lng: '-49.2639116'
};

const radius = 50000;

const query = "bakeries in Blumenau - SC";

fetch(`https://maps.googleapis.com/maps/api/place/textsearch/json?location=${blumenau.lat}%2C${blumenau.lng}&query=${query}&radius=${radius}&key=${key}`)
.then(response => {
    if(!response.ok){
        throw new Error("Erro na requisição")
    } else{
        return response.json()
    }
})
.then((data) => {
    fs.writeFileSync("db_bakeries.json", JSON.stringify(data))
})
.catch((error) => {
    console.log(error.message);
});