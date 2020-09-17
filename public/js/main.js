// cepinput.oninput = () => {
  
//     if(cepinput.value.length != 8){
//         return;
//     }

//     fetch(`https://viacep.com.br/ws/${CEPinput.value}/json/`)
//     .then((resposta) => resposta.json())
//     .then((dados) => {
//         ruainput.value = dados.logradouro;
//         cidadeinput.value = dados.localidade;
//         UFinput.value = dados.uf;
//         cepinput.value = dados.cep;
        
//     })
// };

let enviarMensagem = document.getElementsByClassName('mensagem-sucesso')
for (var i = 0; i<enviarMensagem.length; i++){
  let modal = enviarMensagem[i];
  modal.onclick = function(){
    swal({
  title: 'Você está certo disso?',
  text: "Sua mensagem será enviado para o prestador de serviço",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sim, tenho certeza!',
  cancelButtonText: 'Melhor eu parar...'
  }).then((result) => {
    if (result.value) {
      swal(
        'Parabéns!',
        'Sua mensagem foi enviada com sucesso!',
        'success'
      )
    }
  })
}

};

// document.getElementById('mensagem-sucesso').onclick = function(){
//     swal('Boa!', 'Deu tudo certo!', 'success')
// };
        
    
