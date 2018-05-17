const openPage = (pageName, element) => {
    var i, tabcontent, tablinks, mainColor;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    if (pageName === 'Regis') {
        mainColor = document.getElementsByClassName("mainColor");
        for (i = 0; i < mainColor.length; i++) {
            mainColor[i].style.background = "rgb(200, 50, 0)";
        }
        element.style.backgroundColor = "rgb(200, 50, 0)";
    }
    else if (pageName === 'Sign') {
        mainColor = document.getElementsByClassName("mainColor");
        for (i = 0; i < mainColor.length; i++) {
            mainColor[i].style.backgroundColor = "rgb(0, 50, 200)";
        }
        element.style.backgroundColor = "rgb(0, 50, 200)";
    }
    document.getElementById(pageName).style.display = "block";
};