
function toggleShowSection(section) {
  if (section.style.display === "none") {
    section.style.display = "block";
  }
  else {
    section.style.display = "none";
  }
}

var links = document.getElementsByClassName("show_link");

for (var i=0; i < links.length; i++) {
  var link = links[i];

  listenerFunc = function(event) {
    event.preventDefault();
    var sectionName = event.target.getAttribute("showtarget");
    var section = document.getElementById(sectionName);
    toggleShowSection(section);
  };
  link.addEventListener("click", listenerFunc);
  listenerFunc({ target: link, preventDefault: ()=>{} }); // hide the section on page load
}


// toggle green background of the items when selected/unselected
var checkboxes = document.querySelectorAll("#config_section input[type=checkbox]");

for (var i=0; i<checkboxes.length; i++) {
  var box = checkboxes[i];

  var toggleSelected = function(event) {
    // console.log()
    var td = event.target.parentNode.parentNode; // first parentNode is <label>
    if (td.className === "selected")
      td.className = "";
    else
      td.className = "selected";
  }
  box.addEventListener("change", toggleSelected);
}


// toggle green background of the card table cell
var tds = document.querySelectorAll("#card td");

for (var i=0; i<tds.length; i++) {
  var td = tds[i];

  var toggleSelected = function(event) {
    var className = event.target.className;
    if (className === "selected") {
      event.target.className = "";
    }
    else {
      event.target.className = "selected";
    }
  }
  td.addEventListener("click", toggleSelected);

  var img = td.querySelector("img");
  if (img != null) {
    img.tablecell = td;
    img.addEventListener("click", function(event) {
      toggleSelected({ target: event.target.tablecell });
    });
  }
  /*else
    console.warn(td);*/
}

