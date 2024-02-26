const { error } = require('console');
const fs = require('fs');

const key = 'AIzaSyCFOe8jC0NWPr-qG-55j7II02ZhoBwfKLo';

const file = JSON.parse(fs.readFileSync('for_categories/db_restaurants.json'));
const destine = JSON.parse(fs.readFileSync('details_places/db_detail_places.json'));

let dataResult = [];

file.results.map(async (e) => {
    await fetch(`https://maps.googleapis.com/maps/api/place/details/json?&place_id=${e.place_id}&key=${key}`)
    .then(response => { 
        if (!response.ok) {
            throw new Error("Erro na requisição");
        } else {
            return response.json();
        }
    })
    .then((data) => {
        dataResult.push(data);
        destine.results.push(data.result)
        fs.writeFileSync('details_places/db_detail_places.json', JSON.stringify(destine, null, 2))
    })
    .catch(error => console.log(error));
    
})
