const fs = require('fs');
const fetch = require('node-fetch');

const key = 'AIzaSyCFOe8jC0NWPr-qG-55j7II02ZhoBwfKLo';

const file = JSON.parse(fs.readFileSync('details_places/db_detail_places.json'));

function mkdirPlace(namePlace){
    const validName = namePlace.replace(/[^a-zA-Z0-9]/g, '_');
    fs.mkdirSync(`imgs/${validName}`);
    return `imgs/${validName}`;
}

file.results.map(async (e) => {
    
    // console.log(e.name);

    let folder = mkdirPlace(e.name)
    
    if(e.photos){
        if(e.photos.length > 0){
            for(const el in e.photos) {
                await fetch(`https://maps.googleapis.com/maps/api/place/photo?maxwidth=${e.photos[el].width}&photo_reference=${e.photos[el].photo_reference}&key=${key}`)
                .then(response => {
                    if (!response.ok) {
                        // throw new Error("Erro na requisição de imagem");
                    }
                    return response.buffer();
                })
                .then(imageBuffer => {
                    const filePath = `${folder}/${e.name.replace(/[^a-zA-Z0-9]/g, '_')}_${el}.jpg`;
                    fs.writeFileSync(filePath, imageBuffer);
                    console.log(`Imagem salva em ${filePath}`);
                })
                .catch(error => console.error(error));

                // console.log(e.photos[el].photo_reference);
                // console.log(e.photos[el].width);

            }
        }
    }
})

