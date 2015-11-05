   
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