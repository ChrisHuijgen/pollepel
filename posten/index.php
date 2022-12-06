<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
        <link href="upload.css" rel="stylesheet">
</head>

<body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
                <table>
                        <th>
                                <tr>
                                        <label for="gerecht">Gerecht:</label>
                                        <input type="text" name="gerecht" placeholder="Gerecht">
                                </tr>
                        </th>
                        <tr>
                                <th>
                                        <input type="file" name="my_image">
                                </th>
                        </tr>
                        <tr>
                                <th>
                                        <input type="submit" name="posten" value="Posten">
                                </th>
                        </tr>
        </form>
        </form>
</body>

</html>