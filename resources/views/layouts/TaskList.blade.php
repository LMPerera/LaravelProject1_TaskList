<!DOCTYPE html>
<html>
    <head>
        <title>My Task List</title>
    </head>
    <body>
        <div>
            <h1>My Task List</h1>
            <form method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input type="hidden" name="_method" value="POST" />
                List name: <input type="text" name="lname"><br>
                <br>
                Description: <input type="text" name="description">
                <input type="submit" value="Submit">
            </form>
            <br>
            <br>
            <div>
                <table style="width:20%">
                  <tr>
                    <th>List name</th>
                    <th>Description</th> 
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                  </tr>
                </table>
            </div>
        </div>
    </body>
</html>
