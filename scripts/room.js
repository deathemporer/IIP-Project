function saveData(){
    var name_user = document.getElementById('name').value;
    var block_user = document.getElementById('block').value;
    var rno_user = document.getElementById('rno').value;
    var time_user = document.getElementById('sel1').value;

    var fh = fopen("MyFile.txt", 3); // Open the file for writing
    if(fh!=-1) // If the file has been successfully opened
    {
    var str = "<div id=\"card\"> <label class=\"control-label col-sm-2\">Name:</label><div class=\"col-sm-10\">"+name_user+"</div>"
                +"<div id=\"card\"> <label class=\"control-label col-sm-2\">Block:</label><div class=\"col-sm-10\">"+block_user+"</div>"
                +"<div id=\"card\"> <label class=\"control-label col-sm-2\">Room Number:</label><div class=\"col-sm-10\">"+rno_user+"</div>"
                +"<div id=\"card\"> <label class=\"control-label col-sm-2\">Time:</label><div class=\"col-sm-10\">"+time_user+"</div>";
    fwrite(fh, str); // Write the string to a file
    fclose(fh); // Close the file
    }

    alert('Request Submitted');
}