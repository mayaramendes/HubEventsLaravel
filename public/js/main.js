cepinput.oninput = () => {
  
    if(cepinput.value.length != 8){
        return;
    }

    fetch(`https://viacep.com.br/ws/${CEPinput.value}/json/`)
    .then((resposta) => resposta.json())
    .then((dados) => {
        ruainput.value = dados.logradouro;
        cidadeinput.value = dados.localidade;
        UFinput.value = dados.uf;
        cepinput.value = dados.cep;
        
    })
};