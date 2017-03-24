<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <!-- Framework material desain  -->
  <link rel="stylesheet" href="./mdl/material.css">
  <script src="./mdl/material.js"></script>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <!-- end framework material desain -->

</head>
<body>

  <dialog class="mdl-dialog" >
  <h4 class="mdl-dialog__title">Login Page</h4>
    <div class="mdl-dialog__content">
      <form action="input_user.php" method="POST" accept-charset="utf-8">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="username">
          <label class="mdl-textfield__label" for="username">Username</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" id="password">
          <label class="mdl-textfield__label" for="password">Password</label>
        </div>

        <div class="mdl-dialog__actions">
          <button type="submit" class="mdl-button">Login</button>
        </div>
      </form>

    </div>

  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  </script>

</body>
</html>