<?php loadPartial('head'); ?>
<?php loadPartial('header'); ?>

<form class="create-form" method="POST">
      <h2>Create a new post</h2>
      <input
        type="text"
        name="title"
        class="form-title"
        placeholder="Post Title ..."
      />
      <textarea
        name="content"
        class="form-content"
        placeholder="Write what you are thinking about"
      ></textarea>
      <input type="text" name="tags" class="form-tags" placeholder="Tags ..." />
      <button type="submit" class="submitBtn">Submit</button>
    </form>

    <?php loadPartial('footer'); ?>