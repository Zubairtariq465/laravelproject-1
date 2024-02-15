 {{-- <!DOCTYPE html>
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
 </html> --}}


  <!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Student Grade Card System</title>
   <style>
      #t1
      {
         height: 40px;
         width: 350;
      }
      #table1
      {
         text-align: left;
         height: 100px;
         width: 300px;
         color: black;
         font-weight: bold;
      }
      #table2
      {
         text-align: left;
         height: 100px;
         width: 300px;
         }
</style>
 </head>
  <body>
   <center>
 <img src="{{asset('images/logo.webp')}}" style="height: 100px">
      <h3>Check Your Grade Card Here</h3>
      <form action="puserform" method="post">
         @csrf
         <input type="text" name="t1" id= "t1" placeholder="Enter Your Enrollment here"><br><br>
         <input type="submit" value="Click me">
      </form>
      <br>
      @if (Session('errormsg'))
      <div style="color:red;">
         {{Session('errormsg')}}
      </div>
          
      @endif

      @if (@isset($records))
      <table id="table1">
         <tr>
            <td>Enrollment No.</td>
            <td>{{$records->enrollment}}</td>
         </tr>
         <tr>
            <td>Name</td>
            <td>{{$records->name}}</td>
         </tr>
         <tr>
            <td>Program</td>
            <td>{{$records->program}}</td>
         </tr>
 </table>
 <table id="table2" border="1">
   <tr style="background-color: bisque; color:black ;">
      <td>Maths</td>
      <td>Physics</td>
      <td>Chemistry</td>
      <td>Total Out of 300</td>
 </tr>
 <tr style="font-weight:bold;">
   <td>
      @if ($records->sub1>=50)
      <span style="color: green">{{$records->sub1}}</span>
      @else
      <span style="color:rgb(211, 4, 32)" >{{$recro->sub1}}</span>
          
      @endif
   </td>
   <td>
      @if ($records->sub2>=50)
      <span style="color: green">{{$records->sub2}}</span>
      @else
      <span style="color:rgb(211, 4, 32)" >{{$records->sub2}}</span>
          
      @endif
   </td>
   <td>
      @if ($records->sub3>=50)
      <span style="color: green">{{$records->sub3}}</span>
      @else
      <span style="color:rgb(211, 4, 32)" >{{$recrods->sub3}}</span>
          
      @endif
   </td>
   <td>{{$records->sub1+$records->sub2+$records->sub3}}</td>
</tr>
</table>
 @endif
          </center>
   </body>
  </html>