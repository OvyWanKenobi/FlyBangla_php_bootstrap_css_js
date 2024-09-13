window.onscroll = function() {scrollnavbar()};

function scrollnavbar() {
  if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
    document.getElementById("navbar1").style.top = "0";
  } else {
    document.getElementById("navbar1").style.top = "-100px";
  }
}

function scrolltosearchflight() {
  
 window.scrollTo(0,260);
}

function scrolltoabout() {
 
  window.scrollTo(0,790);
}

function scrolltocontact() {

  window.scrollTo(0,1800);
}





function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "crimson";
      tablinks[i].style.color = "white";
  }
  document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
     elmnt.style.color = "black";
}

window.onload = function () {
document.getElementById("defaulttab").click(); };