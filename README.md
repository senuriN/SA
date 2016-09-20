# Internship-Management
A system to automate and manage the Student Internship Program

- please refer to the readme.txt file inside POC/codeIgniter/application folder for info regarding the project structure

- Use camelCase naming convention in naming your folders/ files

- Many of the scripts are direct links to external resources on the web. But, since you won't be dealing with the main page        components, net connectivity to view all the features will not be an issue for now.

- The sidebar size has been set to desired and it shrinks/ expands depending on the browser zoom level. For optimal display,       please check your webpages in chrome with a 100% display. This will be our default, though the components will differ by a       negligible proportion with differing attributes(This won't hopefully affect much of the display).

- <h3>To create forms<h3>, let's continue with bootstrap as that will be much more easier. 

    - Refer the following external scripts in your project
        - <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        - <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        - <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    - You can auto generate this html code by interactively creating the forms at the following site
          - http://bootsnipp.com/forms
          
    - Follow the below mentioned format for each form element by placing it in divisions that inherit bootstrap css styles
        <div class="form-group">
            <label class="col-md-4 control-label" for="userName">Username</label>
            <div class="col-md-4">
                <input id="userName" name="userName" placeholder="Enter username/email" class="form-control input-md" required="" type="text">
            </div>
        </div>
    
