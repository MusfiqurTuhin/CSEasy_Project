<link rel="stylesheet" type="text/css" href="../../style.css">
    <script type="text/javascript" src="../../script.js"></script>
<script src="https://cdn.tiny.cloud/1/puiazt06jfhosncc4upyzt6g6ihbot05eg2gj6vl7wni1s7z/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
<nav class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="../index.php">CSEasy</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <link rel="stylesheet" type="text/css" href="../style.css">
    <script type="text/javascript" src="../script.js"></script>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
        
                <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">CSE Bangla Content </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="../subjects/computer_courses.html ">Bangla Courses</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="view-posts.php">Library</a>
                <ul class="submenu">
                        <li><a href="../read.html">Live Reading</a></li>
                        <li><a href="../download.html">Download Books</a></li>
                    </ul>
            
            </li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="">Practice</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="">Q&A</a></li>

                <?php if (strlen($_SESSION['login']) != 0) {
                    ?>
                    <li class="nav-item dropdown" role="presentation"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage Posts
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="add-post.php">Add Post</a>
                            <a class="dropdown-item" href="manage-posts.php">Edit Post</a>
                        </div>
                    </li>
                <?php } else { }?>
                <?php if (strlen($_SESSION['login']) == 0) {
                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Log in</a></li>
                <?php } else {
                    $email = $_SESSION['login'];
                    $sql = "SELECT `fname`,`lname` FROM `users` WHERE `email`=:email";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':email', $email, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result2) {
                            ?>
                            <li class="nav-item dropdown" role="presentation">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo htmlentities($result2->fname." ".$result2->lname); ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                                    <a class="dropdown-item" href="update-password.php">Update Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Log out</a>
                                </div>
                            </li>
                        <?php }
                    }
                } ?>
                <?php if (strlen($_SESSION['login']) == 0) {
                ?>
                <?php } else { }?>

            </ul>
        </div>
    </div>
</nav>
