<?php
ini_set("display_errors", 0);
switch ($_GET['a']) {
    case 'create_page':
        if ($_POST['template_name'] == "") {
            echo "❌ ห้ามป้อนค่าว่าง";
            break;
        }
        if (!copy("blank_page.php", "src/" . $_POST['template_name'] . ".php")) {
            echo "❌ เกิดข้อผิดพลาดบางอย่าง \n";
        } else {
            echo "✔️ หน้าเปล่าถูกสร้างแล้ว สามารถแก้ไขได้ที่ <strong>src/" . $_POST['template_name'] . ".php</strong>\n";
        }
        break;
    case 'render':
        $source_dir = array_diff(scandir("src", 1), array('.', '..', 'assets'));
        foreach ($source_dir as $target) {
            $target = basename($target, ".php");
            ini_set("display_errors", 0);
            ob_start();
            include __DIR__ . '/header.html';
            include __DIR__ . "/src/" . $target . ".php";
            include __DIR__ . '/footer.html';
            if (!is_dir("dist")) {
                mkdir('dist');
            }
            file_put_contents("dist/" . $target . ".html", ob_get_contents());
            ob_end_clean();
        }
        echo "✔️ หน้าเว็บได้ถูกสร้างแล้ว อยู่ในโฟเดอร์ <b>dist</b>";
        break;
    case 'dlzip':
        // create new zip archive
        $zip = new ZipArchive;

        // specify the path and name for the zip file
        $zipFile = "dist_" . time() . ".zip";

        // open the zip file for writing
        if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
            // specify the folder to be zipped
            $folder = __DIR__ . '/dist';

            // get a list of all files in the folder
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($folder), RecursiveIteratorIterator::LEAVES_ONLY);

            // add each file to the zip archive
            foreach ($files as $name => $file) {
                // skip directories (they would be added automatically)
                if (!$file->isDir()) {
                    // get the real path to the file
                    $filePath = $file->getRealPath();

                    // get the relative path to the file in the zip archive
                    $relativePath = substr($filePath, strlen($folder) + 1);

                    // add the file to the zip archive
                    $zip->addFile($filePath, $relativePath);
                }
            }

            // close the zip file
            $zip->close();

            header("location: " . $zipFile);
            echo 'สร้างไฟล์ Zip แล้วกำลังดาวน์โหลด....';
        } else {
            echo 'สร้างไฟล์ Zip ไม่สำเร็จ';
        }
        break;
    default:
        # code...
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page generate toolkits</title>
    <style>
        .content-box {
            padding: 20px;
        }

        body {
            font-family: 'Sagoe UI', sans-serif;
            padding: 50px 150px 50px 150px;
        }
    </style>
</head>

<body>
    <h1>Actions Center</h1>
    <div class="content-box" style="background: lightblue;">
        <h3>📄 สร้างหน้าเปล่า</h3>
        <form action="index.php?a=create_page" method="post">
            <input type="text" style="width: 200px;" name="template_name" placeholder="ชื่อหน้า (ไม่ต้องมีตามสกุลต่อท้าย)">
            <button type="submit">submit</button>
        </form>

    </div>
    <div class="content-box" style="background: lightsalmon;">
        <h3>⚙️ Render หน้าเว็บเป็นไฟล์ HTML5</h3>
        <button type="button" onclick="window.location.href = 'index.php?a=render'">Render</button>
    </div>

    <div class="content-box" style="background: lightgreen">
        <h3>🚀 โหลดไฟล์ จากโฟเดอร์ dist (HTML ที่ถูก Render แล้ว)</h3>
        <button type="button"  onclick="window.location.href = 'index.php?a=dlzip'; this.setAttribute('disabled', '')">Download</button>
    </div>
    <div class="content-box" style="background: lightcyan">
        <h3>📁 ไฟล์ทั้งหมดในโฟเดอร์ src</h3>
        <ul>
            <?php
            $source_dir = array_diff(scandir("src", 1), array('.', '..', 'assets'));
            foreach ($source_dir as $fileName) {
                echo "<li>" . $fileName . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>