  console.log('bien');
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function()
    {
        var cod = document.getElementById("producto").value;
        if (this.readyState == 4 && this.status==200 )
        {
            var dataArray = JSON.parse(this.responseText);

            var i, j;
            var displayData = "";
         
                for (i in dataArray.lectPresidentJSON)
            {
                
            displayData += dataArray.lectPresidentJSON[i].label.value + '<br>';
           
            }
             
        };

        document.getElementById("content").innerHTML = displayData;
      
//return displayData; 
       
        };
        
        xmlhttp.open("GET", "lectPresidentJSON.json", true);
        xmlhttp.send();