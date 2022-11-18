var formulario = document.querySelector('form')

formulario.addEventListener('submit', function (e) {

    //para o refresh da pagina
    e.preventDefault()

    //url da pesquisa
    let urlForm = "https://pokeapi.co/api/v2/pokemon/";

    //valor do inpt 
    let nome = document.getElementById("name")

    //concatenar a url com o inputname
    urlForm = urlForm + this.name.value

    //vai transformar os valores em minusculo 
    urlForm = urlForm.toLocaleLowerCase()

    //ID content
    let resposta = document.getElementById('content')

    //ID imgpokemon
    let imagem = document.getElementById('foto')

    //ID stats
    let stats = document.getElementById('stats')

    //resposta em HTML
    let html = ''

    fetch(urlForm)
    .then(resposta => resposta.json())
    .then(function(data){
        console.log(data)
        //nome do pokemon
        html = 'nome:' + maiuscula(data.name) + '<br>'

        //imagem do pokemon       
        imagem.innerHTML = "<img src='" + data.sprites.front_default + "'><img src='" + data.sprites.back_default +"'>"
        //caso o pokemon tenha 2 tipos         
        if (data.types[0].type.name){ html = html + 'Type:'+ maiuscula(data.types[0].type.name)
        resposta.innerHTML = html  
        html = html + ' Type:'+ maiuscula(data.types[1].type.name)
        resposta.innerHTML = html
    }else{
        html = html + 'Type:'+ maiuscula(data.types[0].type.name)
        resposta.innerHTML = html        
    }       
        //status
        html = 'stats:' + (data.stats[0].base_stat) + '<br>'

    })
    .catch(function(err){
        console.log(err)
    })
});

function maiuscula(val){
    return val[0].toUpperCase() + val.substr(1)
}