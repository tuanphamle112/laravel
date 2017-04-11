<html>

   <head>
      <title>Student Management | Add</title>
   </head>
   
   <body>
      <h2>Form 1(Insert)</h2>  
      <form action = "create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
			
      </form>

      <h2>Form 2(Insert)</h2>  
      <form action = "create2" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>LastName</td>
               <td><input type='text' name='last_name' /></td>
            </tr>
            <tr>
               <td>FirstName</td><br>
               <td><input type='text' name='first_name' /></td>
            </tr>
            <tr>
               <td>Age</td><br>
               <td><input type='number' name='age' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
         
      </form>
   
   </body>
</html>