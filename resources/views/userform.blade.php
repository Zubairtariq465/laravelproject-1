 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>client</title>
 </head>
 <body>
    <center>
        <h1>User Registration Form</h1>
              <form action="puserform" method="post">
                @csrf

                <input type="text" name="t1" id="" placeholder="Enter Your Name"> <br>
                <input type="text" name="t2" id="" placeholder="Enter Your Email "><br>
                <input type="submit" value="Click ME">
                <br>

                @if (Session('msg'))
                {{Session('msg')}}
                    
                @endif

                @if (isset($records))
                <table border="1">
                  <tr style="background-color:antiquewhite ; color:blue" >
                        <td>Name</td>
                        <td>Email</td>

                  </tr>

                  @foreach ( $records as $item )

                  <tr>
                     <td>{{$item->name}}</td>
                     <td>{{$item->email}}</td>
                  </tr>
                     
                  @endforeach

                    </table>
                
                    
                @endif







              </form>




    </center>
    
 </body>
 </html>