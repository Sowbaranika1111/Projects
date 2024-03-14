# Questions with answers

↪️ **Why index.html page runs first when we open a website?**

- When a specific file name is not given in the address , to open something, by default, it opens up the index.html page

- There's a setting in the web server (whether it be Apache, IIS, or something else) where we can define what the name is.

- Just replace index.html there with whatever file name we want

<hr>

↪️ **index.html , index.php if these 2 files are there which will run first?**

- The _PHP page_ will take precedence due to the DirectoryIndex directive of Apache

- _DirectoryIndex index.php index.html_
- We can change this to pick .html files by default if we would like (by swapping the order so that index.html comes first).
  
<hr>

↪️ **How php is compiled?**

- web browser only understands html
- php is interpreted by the server and converted into an HTML code
- php code gets interpreted on the server,the converted code is an HTML code so that the web browser can display the HTML code.

<hr>

↪️ **How html is compiled?**

- Browser does the process of interpreting and displaying web content ( HTML, CSS, and JavaScript files)
- It interprets HTML documents by parsing the HTML source code .
- The browser reads the HTML from top to bottom,it creates a corresponding node in the Document Object Model (DOM).

<hr>

↪️ **How javascript is compiled?**

- Browser has a browser engine which contains the interpreter for Javascript , it reads over the javascrpit code and interprets.

<hr>

↪️ **What is a server?**

- a computer program or device that provides services such as resources, data or programs to another computer program and its user

<hr>

↪️ **GET , POST**

- GET :  - to access resources that are located at the specified URL on the server
         - ( It requests the data from a specified resource.)
- POST :  It submits the processed data to a specified resource

<hr>

↪️ **What is REST API?**

- An interface that two computer systems use to exchange information securely over the internet
- (API) defines the rules that you must follow to communicate with other software systems
- (REST) is a software architecture that imposes conditions on how an API should work.
