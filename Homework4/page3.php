<?php
$folders = scandir('./Folders');
      $mainFolder = isset($_POST['mainFolder']) ? $_POST['mainFolder'] : '';
        $subFolder = isset($_POST['subFolder']) ? $_POST['subFolder'] : '';
        $rmainFolder = isset($_POST['rmainFolder']) ? $_POST['rmainFolder'] : '';
    if(isset($_POST['submit'])){
  
       
        if(isset($mainFolder)){
            mkdir('Folders/'.$mainFolder);
            echo 'Folder created ';
        }
    }
    if(isset($_POST['submit2'])){
            mkdir('Folders/'.$rmainFolder.'/'.$subFolder);
            echo 'Folder created ';
    }
    if(isset($_POST['submit3'])){
        $folderPath = isset ($_POST['folderPath']) ? $_POST['folderPath'] : '';
        $fileName = $_POST['fileName'];
        $fileContent = $_POST['fileContent'];
        $file = fopen('Folders/'.$mainFolder.'/'.$folderPath.'/'.$fileName.'.txt', 'w');
        fwrite($file, $fileContent);
        fclose($file);
        

    }
    if(isset($_POST['submit4'])){
        $folderPath = isset ($_POST['folderPath']) ? $_POST['folderPath'] : '';
        $fileName = $_POST['editFile'];
        $fileContent = $_POST['fileContent'];
        $file = fopen('Folders/'.$mainFolder.'/'.$folderPath.'/'.$fileName.'.txt', 'w');
        fwrite($file, $fileContent);    
        fclose($file);
        }
    if(isset($_POST['submit5'])){
        $delFile = isset ($_POST['delFile']) ? $_POST['delFile'] : '';
        // check if file exists then delete it
        if(file_exists('Folders/'.$mainFolder.'/'.$delFile)){
            if(is_dir('Folders/'.$mainFolder.'/'.$delFile)){
                rmdir('Folders/'.$mainFolder.'/'.$delFile);
            }else{
                unlink('Folders/'.$mainFolder.'/'.$delFile);
            }
            echo 'File deleted';
        }else{
            echo 'File not found';
        }
        
    }
?>

<?php include_once 'blocks/start.php'; ?>

    <form  method="post">
        <input type="text" name="mainFolder" placeholder="Create main folder...">
        <button name='submit'>submit</button>
    </form>

    <form  method="post">
        <input type="text" name="subFolder" placeholder="Create sub folder...">
        <input type="hidden" name="rmainFolder" value="<?=$_POST['mainFolder']?>">
        <button name='submit2'>submit</button>
    </form>

    <form  method="post">
        <input type="text" name="folderPath" placeholder="Folder to put your file">
        <input type="text" name="fileName" placeholder="File name..">
        <input type="text" name="fileContent" placeholder="Content">
        <button name='submit3'>submit</button>
    </form>
    <div>
    <br>
        <h2>Folders:</h2>
        <?php
        foreach($folders as $folder){ ?>
          <?php  if(is_dir('Folders/'.$folder) && $folder != '.' && $folder != '..'){ ?>
                <a style='color:#000' href='Folders/<?=$folder?>'><?=$folder?></a><br>
              <?php }?>
          <?php }?>
                
        <h2>edit files</h2>
        <form action="" method="post">
            <input type="text" name="editFile" placeholder="file to edit">
            <input type="text" name="folderPath" placeholder="Folder to put your file">
            <input type="text" name="fileContent" placeholder="Content">
            <button name='submit4'>submit</button>
        </form>
        <?php
        foreach($folders as $folder){ ?>

            <?php  if(is_dir('Folders/'.$folder) && $folder != '.' && $folder != '..'){ ?>
                <?php
                $files = scandir('Folders/'.$folder);
                foreach($files as $file){
                    if(is_file('Folders/'.$folder.'/'.$file)){
                        echo '<a style="color:#000" href="Folders/'.$folder.'/'.$file.'">'.$file.'</a><br>';
                    }
                }
                ?>
            <?php }?>
        <?php }?>
        <br>
        <form action="" method="post">
            <h2>Delete file/folder</h2>
            <input type="text" name="delFile" placeholder="Type a file/folder name to delete">
            <button name='submit5'>submit</button>
        </form>
    </div>

<?php include_once 'blocks/end.php'; ?>