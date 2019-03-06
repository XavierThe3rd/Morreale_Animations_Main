<?php
    include_once 'something.php';
?>

<div class ="int-wrapper grid9 flex wrap">
    <div class ="platehold flex between grid10">
        <div class="instruction flex abs center grid10">
            <p class="grid5 z2">The upload system is a little complicated but works none the less. For each catagory there is an file choose, file upload, and delete button. when uploading pictures, you must do it in an order were the first picture uploaded will be the cover pic for the intended catagory. The following images uploaded will decend in order of how you wish them to be viewed in the slideshows the maximum of which for each slideshow is 21 pictures. In order to remove pictures from the slideshow, click the delete button. Be wary that the delete button deletes all pictures in the associated catagory.</p>
        </div>    
        <div class ="formplate one flex column">
            <h3>Anime</h3>
            <div class="coverpic flex automain">
                <img class="coverpic-main automain" src="./uploads/1">
            </div>
            <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file1">
                <button type="submit" name="submit1" class="point roman">UPLOAD</button>
            </form>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
            <button type="submit" name="delete1" class="delbutton point roman">DELETE ROW</button>
            </form>
             <div class="int-picholder flex row wrap even">
                <?php
                    $beta = 1;
                    for($alpha=2; $alpha<22; $alpha++){
                        echo str_repeat("<div class='picbox flex'>
                        <img class='picmain automain' src='./uploads/$alpha'>
                    </div>", $beta);
                    }
                ?>
            </div>
        </div>
        <div class ="formplate one flex column">
            <h3>Geometrics</h3>
            <div class="coverpic flex automain">
                <img class="coverpic-main automain" src="./uploads/22">
            </div>
            <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file2">
                <button type="submit" name="submit2" class="point roman">UPLOAD</button>
            </form>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="delete2" class="delbutton point roman">DELETE ROW</button>
            </form>
            <div class="int-picholder flex row wrap even">
                <?php
                    $delta = 1;
                    for($gamma=23; $gamma<43; $gamma++){
                        echo str_repeat("<div class='picbox flex'>
                        <img class='picmain automain' src='./uploads/$gamma'>
                    </div>", $delta);
                    }
                ?>
            </div>
        </div>
        <div class ="formplate one flex column">
            <h3>More</h3>
            <div class="coverpic flex automain">
                <img class="coverpic-main automain" src="./uploads/43">
            </div>
            <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file3">
                <button type="submit" name="submit3" class="point roman">UPLOAD</button>
            </form>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="delete3" class="delbutton point roman">DELETE ROW</button>
            </form>
            <div class="int-picholder flex row wrap even">
                <?php
                    $zeta = 1;
                    for($epsilon=44; $epsilon<64; $epsilon++){
                        echo str_repeat("<div class='picbox flex'>
                        <img class='picmain automain' src='./uploads/$epsilon'>
                    </div>", $zeta);
                    }
                ?>
            </div>
        </div>         
    </div>
    <div class="flex even grid10">
        <div class="formplate two flex column">
            <div class="gear-follow flex center">
                <video class="video-element" preload="metadata">
                    <source src="./uploads/64" type="video/ogg">
                    <source src="./uploads/64" type="video/mp4">
                </video>
            </div> 
            <form class="formlay auto" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file4">
                <button type="submit" name="submit4" class="point roman">UPLOAD</button>
            </form>
            <form class="auto" action="upload.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="delete4" class="delbutton point roman">DELETE ROW</button>
            </form>
        </div>
        <div class="formplate two flex column">
            <div class="gear-follow flex center">
                <video class="video-element" preload="metadata">
                    <source src="./uploads/65" type="video/ogg">
                    <source src="./uploads/65" type="video/mp4">
                </video>
            </div> 
            <form class="formlay auto" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file5">
                <button type="submit" name="submit5" class="point roman">UPLOAD</button>
            </form>
            <form class="auto" action="upload.php" method="POST" enctype="multipart/form-data">
                <button type="submit" name="delete5" class="delbutton point roman">DELETE ROW</button>
            </form>
        </div>
    </div>
</div>



                