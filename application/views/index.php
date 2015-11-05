<html>
<head>
  <title> Ajax Notes </title>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
  $(document).ready(function(){
    
    $(document).on('submit', 'form', function(){
      $.post($(this).attr('action'), $(this).serialize(), function(res){
        $('#notes').html(res); 
        $('.updateForm textarea').change(function(){
      $(this).parent().submit(); 
        })
      })
        return false; 
    });

    $('.updateForm textarea').change(function(){
      $(this).parent().submit(); 
    })

  });

</script>

<style>
  div#notes{
    margin-bottom: 30px;
  }

  div.notes{
    width:200px;
    border-bottom:1px solid silver;
  }

  form.updateForm textarea{
    margin-bottom: 20px;

  }

  form.deleteForm input{
    background:none;
    border:none;
    cursor:pointer;
    color:blue;
  }

</style>

</head>
<body>

<h2> Notes </h2>
<div id = "notes">
    <?php foreach ($notes as $note)
    {
    ?>
    <div class="notes">

      <h4> <?= $note['title']; ?></h4>
      <form class="deleteForm" action="notes/destroy" method="post">
        <input type="hidden" name='id' value='<?= $note['id'] ?>'> 
        <input type="submit" value="delete">
      </form>
      <form class="updateForm" action="notes/update" method="post">
        <input type="hidden" name='id' value='<?= $note['id'] ?>'>
           <textarea name="description" placeholder="add description..."><?= $note['description'] ?></textarea>
      </form>
    </div>

  <?php } 
  ?>
</div> 

<form id="addForm" action="notes/create" method="post">
  <input type="text" name="title" placeholder="Insert title...">
  <input type="submit" value="create">
</form>

</body>
<ul>
</html>