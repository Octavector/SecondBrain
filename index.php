 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SecondBrain</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        
<h1>Second<strong>Brain</strong></h1>
        <menu>
            <ul>
            <li><a href="#" id="sb_Add">Add</a></li>
            </ul>
        </menu>
    </header>
    
    <div id="popupAdd" class="hidden">
        <form action="add_note.php" method="post">
            <label for="addTitle">Name:</label>
            <input id="addTitle" type="text" name="addtitle">
            <label for="addNote">Note:</label>
            <textarea id="addNote" name="addnote" rows="10" cols="50">Write something here</textarea>
            <input type="submit" value="Add note">
        </form>
    </div>
    
    <div id="Container">
        
        <div class="note">
            <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
       <div class="note">
           <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
       <div class="note">
           <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="note">
            <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
       <div class="note">
           <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
       <div class="note">
           <h2 class="noteTitle">Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        
    </div>
    
    <script src="scripts.js"></script>
</body>

</html> 