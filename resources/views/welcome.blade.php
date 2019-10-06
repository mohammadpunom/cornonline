<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My first project</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/mystyle.css">
        <!-- JS -->
        <script src = "test.js">
        </script>

    </head>
    <body class="myfontstyle">
    <div>
        <h1>Want a seasonal job ?</h1>
    </div>
        <form action = "/action_page.php" id = "usrform">
        <div class="mygrid">

            <div class="item1">
                Name:
            </div>
            <div class="item2">
                <input tabindex = "1" type = "text" name = "name" value = "">
            </div>
            <div class="item3">
                Gender ?
            </div>
            <div class="item4">
                <input tabindex = "2" type = "radio" name = "rm" value = "Male" > Male
                <input tabindex = "3" type = "radio" name = "rm" value = "Female" > Female   
            </div>
            <div class="item5">
                When you can start ?
            </div>
            <div class="item6">
                <textarea tabindex = "4" row="5" column="20" name="comment" form = "usrform"></textarea>
            </div>
            <div class="item7">
                <input tabindex ="6" type="submit" onClick = "alert('clicked')" value="Save" class="butn myfontstyle">
                <input tabidex = "5" type="reset" value="Reset" class="butn myfontstyle">
            </div>
        </form>           
        
                <!-- <tr>
                    <th>Name:  </th>
                    <th><input tabindex = "1" type = "text" name = "name" value = ""><br></th>
                </tr>
                <tr>
                    <th>Your Gender: </th>
                    <th>
                        <input tabindex = "2" type = "radio" name = "rm" value = "Male" > Male
                        <input tabindex = "3" type = "radio" name = "rm" value = "Female" > Female                                
                    <br>
                    </th>
                </tr>
                <tr> 
                    <th> Comment</th>
                    <th><textarea tabindex = "4" row="6" column="200" name="comment" form = "usrform"></textarea></th>
                </tr>
                <tr>
                    <th>
                        <input tabindex ="6" type="submit" value="Save">
                        <input tabidex = "5" type="reset" value="Reset">
                    </th>
                </tr> -->
            <!-- </table> -->
           
    
    </body>
</html>

<form action = "/action_page.php" id = "usrform"
