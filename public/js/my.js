
const fileinput = document.querySelector('input[type=file]')
const maxw = 1920
const maxh = 1272
fileinput.addEventListener('change', async({ target })=>{
  const img = new Image()
  const loadpromise = new Promise(resolve=> img.onload = resolve )
  img.src = URL.createObjectURL(target.files[0])
  await loadpromise
  if(img.height > maxh || img.width > maxw){
    alert('Plik w złym rozmiarze. Prosze dodać plik o wymiarach 1920x1272')
    URL.revokeObjectURL(img.src)
  }
})