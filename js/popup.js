// Deschide fereastra modală la click pe buton
document.getElementById('openModalBtn').addEventListener('click', function() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'block';
  
    // Așteaptă puțin pentru a permite browserului să "calculeze" stilurile și să activeze animația
    setTimeout(function() {
        modal.style.height = '100%';
        modal.querySelector('.modal-content').style.top = '50%';
    }, 50);
  });
  
  // Închide fereastra modală la click pe "×" (close)
  document.getElementById('closeModalBtn').addEventListener('click', closeModal);
  
  // Închide fereastra modală dacă utilizatorul dă click în afara acesteia
  window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('myModal')) {
        closeModal();
    }
  });
  
  // Adaugă funcționalitate pentru buton 
  document.getElementById('btnAction1').addEventListener('click', function() {
    // Adaugă aici codul pentru Acțiune 1
    console.log('Acțiune 1 apăsată');
  });
  
  // Adaugă funcționalitate pentru butonul Acțiune 2
  document.getElementById('btnAction2').addEventListener('click', function() {
    // Adaugă aici codul pentru Acțiune 2
    console.log('Acțiune 2 apăsată');
  });
  
  // Funcție pentru închiderea ferestrei modale
  function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.height = '0';
    modal.querySelector('.modal-content').style.top = '0';
  
    setTimeout(function() {
        modal.style.display = 'none';
    }, 500); // Așteaptă sfârșitul animației înainte de a ascunde fereastra
  }
  