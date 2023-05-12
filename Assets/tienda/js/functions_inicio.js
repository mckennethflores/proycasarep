
function playVideo(){
 var iframeVideo = `<iframe src="https://www.youtube.com/embed/hv1MPGaSWLg?autoplay=1" frameborder="0"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="70%" height="380"></iframe>`;
 document.getElementById("showVideo").innerHTML = iframeVideo;
 document.getElementById("fotoVideo").style.display = 'none';
 
}