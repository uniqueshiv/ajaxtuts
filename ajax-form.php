<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ajax form Testing</title>

  </head>
  <body>
    <h1>Normal FORM</h1>
    <form class="" action="getname.php" method="GET">
      <input type='text' name="name">
      <input type="submit" value='submit'>
    </form>
    <h1>Ajax GET FORM</h1>
    <form id="getForm">
      <input type='text' name="name" id="name1">
      <input type="submit" value='submit'>
    </form>
    <h1>Ajax POST FORM</h1>
    <form id="postForm">
      <input type='text' name="name" id="name2">
      <input type="submit" value='submit'>
    </form>

  </body>
  <script type="text/javascript">

      //document.getElementById('button').addEventListener('click',getname);
      document.getElementById('getForm').addEventListener('submit',getname);
      document.getElementById('postForm').addEventListener('submit',postname);

      function getname(e){
        e.preventDefault();
        var name=document.getElementById('name1').value;
        var xhr=new XMLHttpRequest();
        xhr.open('GET','getname.php?name='+name,true);
        xhr.onload=function(){
          if(this.status==200){
            console.log(this.responseText);
            document.getElementById
            console.log(xhr);
          }
        }
       xhr.send();
      }


      function postname(e){
        e.preventDefault();
        var name=document.getElementById('name2').value;
        var params ="name="+name;
        var xhr=new XMLHttpRequest();
        xhr.open('POST','getname.php',true);
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')
        xhr.onload=function(){
          if(this.status==200){
            console.log(this.responseText);
            document.getElementById
            console.log(xhr);
          }
        }
       xhr.send(params);
      }


  </script>
</html>
