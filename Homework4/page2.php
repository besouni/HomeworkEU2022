<?php
$folders = scandir('./Folders');

if(isset($_POST['submit'])){
    $folderName = $_POST['folderName'];
    if(!empty($folderName)){
            mkdir('Folders/'.$folderName);
            echo 'Folder created ';
    }

}
if(isset($_POST['submit2'])){
    $folderPath = isset ($_POST['folderPath']) ? $_POST['folderPath'] : '';
    $fileName = $_POST['fileName'];
    $fileContent = $_POST['fileContent'];
    $file = fopen('Folders/'.$folderPath.'/'.$fileName.'.txt', 'w');
    fwrite($file, $fileContent);
    fclose($file);
    

}

$date = date('Y-m-d H:i:s');

?>

<?php include_once 'blocks/start.php'; ?>

    <form   method="post">
        <label for="folderName">Folder name</label>
        <input type="text" readonly value="<?=$date?>" name="folderName" id="folderName" placeholder="Folder name">
        <button name="submit">Click</button>
    </form>

    <div>
        <br>
        <h2>Folders:</h2>
        <?php
        foreach($folders as $folder){ ?>
          <?php  if(is_dir('Folders/'.$folder) && $folder != '.' && $folder != '..'){ ?>
                <a style='color:#000' href='<?=$folder?>'><?=$folder?></a><br>
              <?php }?>
          <?php }?>
                
          <form  method="post">
              <h2>Create file</h2>
        <input type="text" name="folderPath" placeholder="Folder to put your file">
        <input type="text" name="fileName" placeholder="File name..">
        <input type="text" name="fileContent" placeholder="Content">
        <button name='submit2'>submit</button>
    </form>
    </div>

<?php include_once 'blocks/end.php'; ?>