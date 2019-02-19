<?php
include 'head.php';
include 'functions.php';
$functions = new Functions();
session_start();

if(!isset($_SESSION["user"])) {
    header("Location: index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $functions->uploadFunction();
}

?>

<div class="container">
<div class="accordion" id="archiveAcc">

    <div class="card">
        <div class="card-header bg-dark" id="imgHeading">
            <div class="row">
                <div class="col">
                    <h5 class="mb-0">
                        <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseImg" aria-expanded="false" aria-controls="collapseImg">
                        Images
                        </button>
                    </h5>
                </div>
                <div class="col">
                <form action="archive.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <input class="form-control-file" type="file" value="Browse..." name="images[]" id="images" multiple>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark">Upload</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    <div>

    <div id="collapseImg" class="collapse" aria-labelledby="collapseImg" data-parent="#archiveAcc">
        <div class="card-body bg-dark">
            <?php foreach($functions->loadImgsArchive() as $img) { ?>
                <img width="50%" height="50%" class="rounded" src="images/<?php echo $img ?>" alt="<?php echo $img ?>">
            <?php } ?>
            <a style="position:sticky-bottom;font-size:8px;" href="#collapseImg">To top</a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header bg-dark" id="fileHeading">
            <h5 class="mb-0">
                <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseFile" aria-expanded="false" aria-controls="collapseFile">
                Files
                </button>
            </h5>
        </div>
    <div>

    <div id="collapseFile" class="collapse" aria-labelledby="collapseFile" data-parent="#archiveAcc">
        <div class="card-body bg-dark">
            <?php foreach($functions->loadFilesArchive() as $file) { ?>
            <a href="documents/<?php echo $file ?>"><?php echo $file ?></a>
            <?php } ?>
        </div>
    </div>
</div>
</div>