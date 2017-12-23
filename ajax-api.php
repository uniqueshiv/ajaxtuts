<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ajax Testing</title>
    <style type="text/css">
      .user{
        margin:0px;
        padding:0px;
        background:#ccc;
        display:flex;
        margin-bottom:10px;
      }
      .user ul{
        list-style:none;
      }
      }
    </style>
  </head>
  <body>

    <button type="button" name="button" id="button">Get github users</button>
  <br><br>
    <h1>Github Users</h1>
    <div class="" id="users">

    </div>
  </body>
  <script type="text/javascript">
    document.getElementById('button').addEventListener('click',loaduser);
      function loaduser(){
        //alert('sss')
        var xhr=new XMLHttpRequest();
        xhr.open('GET','https://api.github.com/users',true);
        xhr.onload=function(){
          if(this.status==200){
            var users=JSON.parse(this.responseText);
            console.log(this.responseText);
            var output="";
            for(var i in users){
              output+=
              '<div class="user">'+
              '<img src="'+users[i].avatar_url+'" width="70" height="70px">'+
              '<ul>'+
              '<li>ID: '+users[i].id+'</li>'+
              '<li>LOGIN:'+users[i].login+'</li>'+
              '</ul></div>';
            }
            document.getElementById('users').innerHTML=output;
          }
        }
        xhr.send();
      }


  </script>
</html>
