showFirstContent = function(index) {
   document.querySelector('.router-tab').className = document.querySelector('.router-tab').className + ' onwork'
   document.querySelector(document.querySelector('.router-tab').getAttribute('data-target')).style.display = 'block'
}

setInitialSpannerText = function() {
   document.querySelectorAll('.data-spanner').forEach(function(elem) {
      if (elem.getAttribute('data-span') == 'true') {
         elem.innerHTML = `<span style='transform: rotateZ(90deg);'>&#10094;</span><br/><span>LESS</span>`
      } else {
         elem.innerHTML = `<span>MORE</span><br/><span style='transform: rotateZ(-90deg);'>&#10094;</span>`
      }
   })
}

document.addEventListener('DOMContentLoaded', function() {
   showFirstContent()
   setInitialSpannerText()

   document.querySelectorAll('.router-tab').forEach(function(elem) {
      elem.addEventListener('click', function() {
         document.querySelectorAll('.router-tab.onwork').forEach(function(elem) {
            elem.className = elem.className.replace(' onwork', '')
            elem.className = elem.className.replace('onwork', '')
            document.querySelector(elem.getAttribute('data-target')).style = 'none'
         })
         elem.className = elem.className + ' onwork'
         document.querySelector(elem.getAttribute('data-target')).style.display = 'block'
      })
   })

   document.querySelectorAll('.data-spanner').forEach(function(elem) {
      elem.addEventListener('click', function() {
         if (elem.getAttribute('data-span') == 'true') {
            elem.setAttribute('data-span', 'false')
            elem.innerHTML = `<span>MORE</span><br/><span style='transform: rotateZ(-90deg);'>&#10094;</span>`
         } else {
            elem.setAttribute('data-span', 'true')
            elem.innerHTML = `<span style='transform: rotateZ(90deg);'>&#10094;</span><br/><span>LESS</span>`
         }
      })
   })

   document.querySelectorAll('.data-group .picture, .data-group .name-detail').forEach(function(elem) {
      elem.addEventListener('click', function() {
         spanner = elem.parentElement.parentElement.children
         for (let i = 0; i < spanner.length; i++) {
            if (spanner[i].className.indexOf('data-hidden-box') + 1) {
               if (spanner[i].style.display == 'block') {
                  spanner[i].style.display = 'none'
               } else {
                  spanner[i].style.display = 'block'
               }
            }
         }
      })
   })

   document.querySelector('#main_image').addEventListener('click', function(event) {
      document.querySelector('#main_text').innerHTML = event.target.files[0].name
   })

   document.querySelector('#additional_image').addEventListener('click', function(event) {
      str = ''
      for (let i = 1; i < event.target.files.length; i++) {
         str += ', ' + event.target.files[i].name
      }
      str = event.target.files[0].name + ', ' + str
      document.querySelector('#additional_text').innerHTML = event.target.files[0].name
   })
})