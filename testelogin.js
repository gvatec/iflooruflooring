const btnsubmit = document.getElementById('entrar')

btnsubmit.addEventListener('click',validacaodelogin)

function validacaodelogin(){
  let emailcadastrado = 'lutai9life@gmail.com'
  let senhacadastrada = '1234'
  
  let emailuser = document.getElementById('email')
  let senhauser = document.getElementById('senha')
  
  if(emailuser.value == "" && senhauser.value == ""){
    window.alert('faça login para entrar')
    window.location.href="index.php"

  }
  if(emailuser.value == emailcadastrado && senhauser.value == senhacadastrada){
    window.location.href="./iflooruflooring_manager/managerflooring.php"

  }

}
