/**
 * Created by nayantara on 9/15/16.
 */

function displayHomePage()
{
    document.getElementById('targetMain').src = "http://www.w3schools.com";
}

function displayRegistrationPage()
{
    loadUserSidebar();
    document.getElementById('targetMain').src = "commonElements/notifications.html";
}

function displayLoginPage()
{
    document.getElementById('targetMain').src = "https://www.dataflowgroup.net/haad/Section1.aspx";
}

