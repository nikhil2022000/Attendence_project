<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = 1 width ="100%">
    <tr>
    <th>Emp_id</th>
    <th>Date</th>
    <th>Name</th>
</tr>
<tbody>
  
            <?php 
           
                foreach($user_id as $item):
                 if($user_id == ''){?>
                <h3>data submit successfully</h3> 
                <?php   
            }else{ ?>
                    <tr>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->name}}</td>
                        
                    </tr>
                    <?php 
            }
        endforeach;     ?>

            
            
            
        </tbody>
</table>    

</body>
</html>