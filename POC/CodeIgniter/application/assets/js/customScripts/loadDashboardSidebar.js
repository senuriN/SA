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

/*

 First name:
 <input type="text" id="firstname">
 <br>
 <p>Your first name is: <b id='boldStuff2'></b>
 </p>
 <p>Other people's names:</p>
 <ol id="demo"></ol>
 <input type='button' onclick='changeText2()' value='Submit' />

 var list = document.getElementById('demo');

 function changeText2() {
 var firstname = document.getElementById('firstname').value;
 document.getElementById('boldStuff2').innerHTML = firstname;
 var entry = document.createElement('li');
 entry.appendChild(document.createTextNode(firstname));
 list.appendChild(entry);
 }
     <li>
     <a href="dashboard.html">
     <i class="pe-7s-graph"></i>
     <p>Dashboard</p>
     </a>
     </li>

     <li class="active">
     <a href="user.html">
     <i class="pe-7s-user"></i>
     <p>User Profile</p>
     </a>
     </li>
     <li>
     <a href="table.html">
     <i class="pe-7s-note2"></i>
     <p>Table List</p>
     </a>
     </li>
     <li>
     <a href="typography.html">
     <i class="pe-7s-news-paper"></i>
     <p>Typography</p>
     </a>
     </li>
     <li>
     <a href="icons.html">
     <i class="pe-7s-science"></i>
     <p>Icons</p>
     </a>
     </li>
     <li>
     <a href="maps.html">
     <i class="pe-7s-map-marker"></i>
     <p>Maps</p>
     </a>
     </li>
     <li>
     <a href="notifications.html">
     <i class="pe-7s-bell"></i>
     <p>Notifications</p>
     </a>
     </li>
     <li class="active-pro">
     <a href="upgrade.html">
     <i class="pe-7s-rocket"></i>
     <p>Upgrade to PRO</p>
     </a>
     </li>
 */