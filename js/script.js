// --------------- SHOW HEADER CONTENT ACCORDING TO CLICK ---------------

// divs from backoffice_access.php
document.getElementById('homebackofficediv').style.visibility = "visible"
document.getElementById('contactformdiv').style.visibility = "hidden"
document.getElementById('guestbookdiv').style.visibility = "hidden"
document.getElementById('galleryuploaddiv').style.visibility = "hidden"



// header topics from headerBO.php
bolinkHeader = document.getElementById('bolink')
bolinkHeader.addEventListener("click", () => {
    document.getElementById('homebackofficediv').style.visibility = "visible"
    document.getElementById('contactformdiv').style.visibility = "hidden"
    document.getElementById('guestbookdiv').style.visibility = "hidden"
    document.getElementById('galleryuploaddiv').style.visibility = "hidden"
}) 

for (let i = 0; i < 2; i++) {
    contactFormHeader = document.getElementsByClassName('contactform')[i]
    contactFormHeader.addEventListener("click", () => {
       document.getElementById('homebackofficediv').style.visibility = "hidden"
        document.getElementById('contactformdiv').style.visibility = "visible"
        document.getElementById('guestbookdiv').style.visibility = "hidden"
        document.getElementById('galleryuploaddiv').style.visibility = "hidden"
    })

    guestBookHeader = document.getElementsByClassName('guestbook')[i]
    guestBookHeader.addEventListener("click", () => {
        document.getElementById('homebackofficediv').style.visibility = "hidden"
        document.getElementById('contactformdiv').style.visibility = "hidden"
        document.getElementById('guestbookdiv').style.visibility = "visible"
        document.getElementById('galleryuploaddiv').style.visibility = "hidden"
    })

    galleryUploadHeader = document.getElementsByClassName('galleryupload')[i]
    galleryUploadHeader.addEventListener("click", () => {
        document.getElementById('homebackofficediv').style.visibility = "hidden"
        document.getElementById('contactformdiv').style.visibility = "hidden"
        document.getElementById('guestbookdiv').style.visibility = "hidden"
        document.getElementById('galleryuploaddiv').style.visibility = "visible"
    })
}


// --------------- DELETE BUTTON REFRESH PAGE ---------------
// contact form
if (window.location.toString().includes("#contactform")) {
    //option 2 inside if -->(window.location.href.indexOf("#contactform") > -1)
    document.getElementById('homebackofficediv').style.visibility = "hidden"
    document.getElementById('contactformdiv').style.visibility = "visible"
    document.getElementById('guestbookdiv').style.visibility = "hidden"
    document.getElementById('galleryuploaddiv').style.visibility = "hidden"
}


// guest book





// gallery upload
if (window.location.toString().includes("#galleryupload")) {
    document.getElementById('homebackofficediv').style.visibility = "hidden"
    document.getElementById('contactformdiv').style.visibility = "hidden"
    document.getElementById('guestbookdiv').style.visibility = "hidden"
    document.getElementById('galleryuploaddiv').style.visibility = "visible"
}
