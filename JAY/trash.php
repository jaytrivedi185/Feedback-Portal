var rIndex,
table = document.getElementById("table");
 function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      
                        rIndex = this.rowIndex;
                      document.getElementById("fname").value = this.cells[0].innerHTML;
                      document.getElementById("lname").value = this.cells[1].innerHTML;
                      document.getElementById("age").value = this.cells[2].innerHTML;

                    };
                }
            }
            selectedRowToInput();

            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("fname").value = "";
                $enroll = document.getElementById('fname').value;
                

                window.location.href = "Adminview.php";
            }

              
                <div class="tab tab-2">
                Enroll :<input type="text" name="fname" id="fname">
                Name :<input type="text" name="lname" id="lname">
<button onclick="removeSelectedRow();">Remove</button>

