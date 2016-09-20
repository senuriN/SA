#Readme for Applications

 - After downloading the CodeIgniter Project folder you can simply start working on your indivisual interfaces.
 - There is no dependency between the main interface and your individual dashboard files. 
 - For example, for a student the side menubar will hold menu items such as 
      - View profile
      - Request recommendation
      - Apply for internship, etc.
      (These are merely examples)
      
      ~ In this case, you can develop the individual pages for each item in the list.
      ~ Since the menu is dynamically loaded at runtime, we'll integrate your individual pages in a Javascript depending on the 
      menu item selected.
  
  - Also please place any additional resources such as CSS, JS, SCSS, Images, etc inside 
      ~ CodeIgniter/application/assets/<relevant folder(eg:js)>/<your name>
        (Note: If your external resource does not fall into any of the existing folders, create another folder within the assets
        and place it there)
      ~ Since there's a chance that many of us may be using files with common names such as "style.css", create another folder 
        within the relevant folder(eg:js) and place your files there.
        (I've provided an example inside the css folder. Please refer to that)
        
  - In the js folder under assets, there are two sub folders such as 
      ~ customScripts - Place any JS scripts that you have written here
      ~ helperScripts - Any referenced or externally available js scripts (eg: jquery.min.js) will go here.
      
      Create folders with your name and then place the scripts in these two subfolders as well
      (Eg: CodeIgniter/application/assets/js/helperScripts/taro(Your folder)/jquery.min.js(your file)
      
      
      
      
