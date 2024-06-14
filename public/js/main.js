document.addEventListener("DOMContentLoaded", () => {
     const header        = document.getElementById('header')
     const navBtn        = document.getElementsByClassName('navbar-toggler')[0]
     const alert         = document.getElementsByClassName('alert-dismissible')

     if(alert != undefined) {
          Array.from(alert).forEach(e => {
               setTimeout(function() {
                    let alertEl = new bootstrap.Alert(e)

                    alertEl.close()
               }, 5000)
          })
     }

     if(navBtn != undefined) {
          navBtn.addEventListener('click', () => {
               let icon = navBtn.firstElementChild

               console.log(icon)

               if(!navBtn.classList.contains('collapsed')) {
                    icon.classList.replace('fa-bars', 'fa-xmark')
               } else {
                    icon.classList.replace('fa-xmark', 'fa-bars')
               }
          })
     }

     window.addEventListener('scroll', (e) => { 
          let pos = header.offsetTop

          if(pos > 0) {
               header.classList.add("shadow")
          } else {
               header.classList.remove("shadow")
          }
     })
})