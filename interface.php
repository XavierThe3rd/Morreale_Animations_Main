<?php
    include_once 'something.php';
?>

<div class="int-wrapper">
    <div class="flex column">
        <h4>Geometrics</h4>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #1 (Cover)</h2>
                <div class ="coverpic">
                    <img src="./uploads/img1">
                </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="submit">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #2</h2>
                <div class ="coverpic">
                    <img src="./uploads/img2">
                </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file2">
                    <button type="submit" name="submit2">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #3</h2>
                <div class ="coverpic">
                    <img src="./uploads/img3">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file3">
                    <button type="submit" name="submit3">UPLOAD</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex column" >
        <h4>Anime</h4>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #1 (Cover)</h2>
                <div class ="coverpic">
                    <img src="./uploads/img4">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file4">
                    <button type="submit" name="submit4">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #2</h2>
                <div class ="coverpic">
                    <img src="./uploads/img5">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file5">
                    <button type="submit" name="submit5">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #3</h2>
                <div class ="coverpic">
                    <img src="./uploads/img6">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file6">
                    <button type="submit" name="submit6">UPLOAD</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex column">
        <h4>More</h4>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #1 (Cover)</h2>
                <div class ="coverpic">
                    <img src="./uploads/img7">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file7">
                    <button type="submit" name="submit7">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #2</h2>
                <div class ="coverpic">
                    <img src="./uploads/img8">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file8">
                    <button type="submit" name="submit8">UPLOAD</button>
                </form>
            </div>
        </div>
        <div class ="imghold">
            <div class=pic-wrap>
                <h2>Picture #3</h2>
                <div class ="coverpic">
                    <img src="./uploads/img9">
            </div>
                <form class="formlay" action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file9">
                    <button type="submit" name="submit9">UPLOAD</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex row grid10 between">
        <div class="vidhold">
            <h4 class="story">Demo Reel</h4>
            <div class="video-wrap flex">
                <div class="video-block2 video-wrapper">
                    <video class="video-element" preload="metadata">
                        <source src="./uploads/vid1" type="video/ogg">
                        <source src="./uploads/vid1" type="video/mp4">
                    </video>
                </div>
            </div>
            <form class="formlay2" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file10">
                <button type="submit" name="submit10">UPLOAD</button>
            </form>
        </div>
        <div class="vidhold">
            <h4 class="story">Story Board</h4>
            <div class="video-wrap flex">
                <div class="video-block2 video-wrapper">
                    <video class="video-element" preload="metadata">
                        <source src="./uploads/vid2" type="video/ogg">
                        <source src="./uploads/vid2" type="video/mp4">
                    </video>
                </div>
            </div>
            <form class="formlay2" action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file11">
                <button type="submit" name="submit11">UPLOAD</button>
            </form>
        </div>
    </div>
</div>