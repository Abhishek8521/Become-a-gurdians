var h1 = document.querySelector("h1").textContent
var splited = h1.split("")

var clutter = ""
splited.forEach(function(e){
    
    clutter += `<span>${e}</span>`

})
document.querySelector("h1").innerHTML = clutter

gsap.to("h1 span ",{
    color:"#fff",
    stagger:0.1,
    y: 30
})


 