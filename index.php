<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD -Opreration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="row">
        <h3 align="center" style="color:red;">Sample Example of Crud Operation In php using ajax api call</h3>
</div>

                <div class="row" id="tableRowx" >
                            <div class="col-md-12">
                                <div class="table-responsive"  id="tabledata" >
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                        </thead>
                                        
                                </table>
                                </div>
                        </div>
                            
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript">
                
                  // Calling Fetch all GET Method Data
                  $(document).ready(function(){
                        $.ajax({

                            url: 'https://reqres.in/api/unknown',            
                            method:'GET',
                            contentType:'application/json',             
                            success :function(response, textStatus, request){                   
                                console.log(response);
                                if(response == "ERROR"){
                                    alert('Sorry No data available')
                                }
                                else{
                                    $('#tabledata').append('<table id="example" class="table table-striped table-bordered"><tr><th>ID</th><th>Name</th><th>Year</th></tr><tbody id="contact">');
                                    data = response.data;
                                    
                                    for(var t=0;t< data.length;t++){
                                        $('#contact').append('<tr><td>'+data[t].id+'</td><td>'+data[t].name+'</td><td>'+data[t].year+'</td></tr>');


                                    }
                                    $('#tabledata').append('</tbody></table>');

                                }
                            }
                    });
                });
            

                </script>
    

</body>
</html>