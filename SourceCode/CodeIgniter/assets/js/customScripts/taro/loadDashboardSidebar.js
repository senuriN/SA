/**
 * Created by nayantara on 9/15/16.
 */

function loadUserSidebar()
{
    var ul = document.getElementById("sideBarMenu");
    
    var li = document.createElement("li");
    li.appendChild(document.createTextNode("Dashboard"));
    li.setAttribute("id", "liDashboard"); 
    // li.className = "pe-7s-graph";
    ul.appendChild(li);

    // var li = document.createElement('li');
    // li.setAttribute('class','pe-7s-graph');
    // ul.appendChild(li);
    //
    // var t = document.createTextNode(element);
    //
    // li.innerHTML=li.innerHTML + element;
    //
    // var li = document.createElement("li");
    // li.appendChild(document.createTextNode("User Profile"));
    // li.setAttribute("id", "liUserProfile");
    // li.className = "pe-7s-user";
    // ul.appendChild(li);
    
    alert(li.id);
}
